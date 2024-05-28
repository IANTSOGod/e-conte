<?php

namespace App\Models;

use CodeIgniter\Model; 

class Utilisateurs extends Model
{
    protected $table = 'utilisateurs'; 

    protected $primaryKey = 'userId'; 

    protected $allowedFields = ['userId','autority','username','password', 'email', 'CIN']; 

    public function checkLogin($username, $password)
    {
        $user = $this->where('username', $username)->first();
        if ($user && strcmp($user['password'],$password)==0) {
            return $user;
        } else {
            return false;
        }
    }

    public function createUser($autority,$username, $password, $email, $CIN)
    {
        $data = [
            'autority' => $autority,
            'username' => $username,
            'password' => $password, 
            'email' => $email,
            'CIN' => $CIN,
        ];
        $this->insert($data);
    }

    public function changeUser($preuserId,$autority,$username,$password, $email, $CIN)
    {
        $data = [
            'autority' => $autority,
            'username' => $username,
            'password' => $password, 
            'email' => $email,
            'CIN' => $CIN
        ];
        $this->update($preuserId,$data);   
    }
}

?>
