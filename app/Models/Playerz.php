<?php

namespace App\Models;

use CodeIgniter\Model;

class Playerz extends Model
{
    /*=================================================================*/
    
    public function checkLogin(string $username, string $password)
    {
        // Verify the username and password
        // ...

        // Get the user's ID
        $user_id = $user->id;

        // Get the current session ID
        $session_id = session_id();

        // Get the user's device information
        $ip_address = $this->request->getIPAddress();
        $user_agent = $this->request->getUserAgent();

        // Check if there is already an active session for the user from the same device
        $existing_session = $this->db->table('sessions')
            ->where('user_id', $user_id)
            ->where('ip_address', $ip_address)
            ->where('user_agent', $user_agent)
            ->get()
            ->getRow();

        if ($existing_session)
        {
            // There is already an active session for the user from the same device
            // Return an error
            return [
                'success' => false,
                'message' => 'User is already logged in on another device'
            ];
        }

        // Set the user's session data
        // ...

        // Store the session ID and device information in the database
        $this->db->table('sessions')->insert([
            'user_id' => $user_id,
            'session_id' => $session_id,
            'ip_address' => $ip_address,
            'user_agent' => $user_agent,
        ]);

        return [
            'success' => true,
            'message' => 'Login successful'
        ];
    }
}
