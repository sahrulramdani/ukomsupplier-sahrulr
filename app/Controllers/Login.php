<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Login extends BaseController
{
    protected $user;
    protected $password;
    protected $level;
    protected $usermodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
    }

    public function index()
    {
        $data = [
            'basetitle' => 'Halaman Login'
        ];

        helper(['form']);
        return view('login/formLogin', $data);
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url().'/login');
    }
    
    public function auth(){
        $model = new UserModel();
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

        $data = $model->where('username', $username)->first();

        if($data){
            if($data['password'] == $password){
                $session_user = [
                    'id_user'      => $data['id_user'],
                    'nama'          => $data['nama'],
                    'password'      => $data['password'],
                    'LOGIN_SUCCESS'    => true
                ];

                session()->set($session_user);
                
                return redirect()->to(base_url() . '/supplier');
            } else {
                session()->setFlashdata('login', 'Password Salah!');
                // dd($verif_pass);
                return redirect()->to(base_url() . '/login');
            }
        } else {
            session()->setFlashdata('login', 'Username Salah!');
            return redirect()->to(base_url() . '/login');
        }
    }
}