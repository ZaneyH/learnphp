<?php
namespace App\Controllers;

use App\Models\User;

class AuthController {
    public function register(){
       
        if($_POST['password'] == $_POST ['password_confirm']){
            $user = new User();
            $user->email = $_POST['email'];
            $user->password =password_hash($_POST['password'], PASSWORD_BCRYPT);
            $user->save();
            header('Location: /login');
        }else{
            $_SESSION['error']='Passwords dont match';
            header('Location: /register');
        }
       
    }

    public function registerForm(){
        view('auth/register');
    }

    public function login(){

        $user = User::where('email', $_POST['email']);
        $user =  $user[0] ?? null;
        if($user && password_verify($_POST['password'],$user->password)){
            $_SESSION['user'] = $user->id;
            header('Location: /');
        }else{
            $_SESSION['error']='Email or password is worng man';
            header('Location: /login');

        }
        
    }

    public function loginForm(){
        view('auth/login');
    }
    public function logout(){
        unset($_SESSION['user']);
        header('Location: /register');
}
 }