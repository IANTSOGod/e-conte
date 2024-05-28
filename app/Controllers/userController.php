<?php

namespace App\Controllers;
use  App\Models\utilisateurs;

class userController extends BaseController
{
    public function __construct(){
       $this->userModel=new Utilisateurs();
    } 

    public function index(): string 
    {
        return view('login');
    }
    public function signup(): string
    {
        return view('signup');
    }
    public function forgot(): string 
    {
        return view('forgot');
    }
    public function checkEmail(): string 
    {
        return view('login');
    }
    public function login(): string 
    {
        $username=$this->request->getVar('username');
        $password=$this->request->getVar('password');
        $data['user']=$this->userModel->checkLogin($username,$password);
        if($data['user']!=false){
            return view('home',$data);
        }    
        else{
            return view('signup');
        }
    }
    public function createAccount(): string {
        $autority=$this->request->getVar('autority');
        $username=$this->request->getVar('username');
        $password=$this->request->getVar('password');
        $email=$this->request->getVar('email');
        $CIN=$this->request->getVar('CIN');
        $this->userModel->createUser($autority,$username,$password,$email,$CIN);
        return view('createAccount');
    }
}
?>
