<?php
namespace App\Controllers;
use App\Models\CodeModel;
use App\Models\Server;
use App\Models\Status;
use App\Models\_ftext;
use App\Models\FileShow;
use App\Models\KeysModel;
use App\Models\UserModel;
use App\Models\File;
use App\Models\FileModel;
use App\Models\NotifyModel;
use CodeIgniter\Config\Services;
use CodeIgniter\Controller;
use CodeIgniter\Files\UploadedFile;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
class Main extends BaseController
{
    
        use ResponseTrait;

    protected $userModel, $model, $user, $userId, $FileModel;
    public function __construct()
    {
        $this->db = db_connect();
        $this->model = new File();
        $this->session = session();
        $this->request = \Config\Services::request();
        $this->data["session"] = $this->session;
        $this->data["request"] = $this->request;
        $this->data["uploads"] = $this->model->findAll();
        $this->userid = session()->userid;
        $this->usermodel = new UserModel();
        $this->FileModel = new FileModel();
        $this->FileModel = new NotifyModel();
        $this->user = $this->usermodel->getUser($this->userid);
        $this->time = new \CodeIgniter\I18n\Time();
    }

    public function index()
    {
        $keysModel = new KeysModel();
        $userModel = new UserModel();
        $data["user"] = $this->user;
        $data["session"] = $this->session;
        $data["request"] = $this->request;
        $data["uploads"] = $this->model->findAll();
        // return view('User/dashboard', $data);
        return view("update/Home", $data);
    }
    public function Show()
    {
        $model = new FileModel();
        $data["files"] = $model->getData();
        $data["user"] = $this->user;
        echo view("update/FileDashboard", $data);
    }
    public function notify()
    {
        helper(["form"]);
        $model = new NotifyModel();
        $data["user"] = $this->user;
        $data = [
            "notification" => $this->request->getVar("textarea_field"),
        ];
        $model->insertText($data);
        session()->setFlashdata("msg", "Please Download New Lib");
        return redirect()->back();
    }
    public function DeleteFiles()
    {
        $db = \Config\Database::connect();
        $builder = $db->table("files");
        $data->emptyTable("files");
        return redirect()
            ->back()
            ->with("msgSuccess", "success");
        echo "Deleted successfully !";
    }
    
   


 public function download ()
    {
        $model = new FileModel();
        $gameType = $this->request->getGet('game_type');
        $libType = $this->request->getGet('lib_type');
        
        if (!$gameType || !$libType) {
            return $this->failValidationError('Game type and lib type are required');
        }

        $files = $model->where('game_type', $gameType)
                      ->where('lib_type', $libType)
                      ->getData();
        
        foreach ($files as $file) {
            $namemm = $file['name'];
            $updateData = [
                'version' => $file['version'],
                'downloadUrl' => ['http://libbb.freewebhostmost.com/update/' . $gameType . '/' . $libType . '/' . $file['name']],
                'releaseNotes' => 'Bug fixes and performance improvements',
                'game_type' => $file['game_type'],
                'lib_type' => $file['lib_type']
            ];

            return $this->respond($updateData);
        }
    }


    public function upload()
    {
        $validation = \Config\Services::validation();
        $db = \Config\Database::connect();
        $builder = $db->table("files");
        
        // Only truncate files for specific game type
        $gameType = $this->request->getPost("game_type");
        if ($gameType) {
            $builder->where('game_type', $gameType)->delete();
        }

        $validated = $this->validate([
            "file" => [
                "uploaded[file]",
                "mime_in[file,so]",
                "max_size[file,10096]",
            ],
            "version" => ["required", "regex_match[/^\\d+\\.\\d+\$/]"],
            "game_type" => ["required", "min_length[1]"]
        ]);

        if ($file = $this->request->getFile("offensive")) {
            if ($file->isValid() && !$file->hasMoved()) {
                $name = $file->getName();
                
                // Create game type directory if it doesn't exist
                $gameTypeDir = ROOTPATH . "update/" . $gameType;
                if (!is_dir($gameTypeDir)) {
                    mkdir($gameTypeDir, 0777, true);
                }

                // Move file to game type specific directory
                $file->move($gameTypeDir, $name, true);

                $data = [
                    "name" => $file->getClientName(),
                    "type" => $file->getClientMimeType(),
                    "size" => $file->getSize(),
                    "extension" => $file->getClientExtension(),
                    "version" => $this->request->getPost("version"),
                    "game_type" => $gameType
                ];
                
                $save = $builder->insert($data);
                $msg = "File has been uploaded";
            }

            session()->setFlashdata("success", "Please Update Your Mod");
            return redirect()->back();
        }
    }
   /* {
        $fileModel = new \App\Models\FileModel();
        if ($this->request->getMethod() === "post") {
            $validation = \Config\Services::validation();
            $validated = $this->validate([
                "file" => [
                    "uploaded[file]",
                    "mime_in[file,application/x-sharedlib]",
                    "ext_in[file,so]",
                    "max_size[file,10096]"
                ],
                "version" => ["required", "regex_match[/^\\d+\\.\\d+\$/]"]
            ]);
            $fileName = $this->request->getFile("file")->getName();
            $filePath = ROOTPATH . "update/" . $fileName;
            $versionInfo = shell_exec(
                "objdump -p \$filePath | grep -E '(NEEDED|soname)'"
            );
            preg_match("/\\d+\\\\.\\d+/", $versionInfo, $matches);
            $fileVersion = isset($matches[0]) ? $matches[0] : null;
            if ($fileVersion && version_compare($fileVersion, "1.0") < 0) {
                session()->setFlashdata(
                    "error",
                    "File version is not supported."
                );
                return redirect()->to("/update/Home");
            }
            $file = $this->request->getFile("file");
            $name = $file->getName();
            $file->move(ROOTPATH . "update/", $name, true);
            $data = [
                "name" => $file->getClientName(),
                "type" => $file->getClientMimeType(),
                "size" => $file->getSize(),
                "extension" => $file->getClientExtension(),
                "version" => $this->request->getPost("version")
            ];
            $save = $fileModel->insert($data);
            session()->setFlashdata("success", "File has been uploaded.");
        }
        $data["files"] = $fileModel->findAll();
        $data["user"] = $this->user;
        return redirect()->back();
    }*/
}
