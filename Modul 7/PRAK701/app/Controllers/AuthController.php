<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    // Memuat helper "form" secara global pada
    // seluruh aplikasi. Digunakan untuk validasi
    // data yang dimasukkan pada form.
    protected $helpers = ['form'];

    // Fungsi ke halaman login.
    public function index()
    {
        return view('login');
    }

    // Fungsi melakukan login.
    public function login()
    {   
        // Validasi aturan login.
        if (!$this->validate('aturanLogin')) {
            return redirect()->back()->withInput();
        }
    
        $data = [
            "email" => $this->request->getPost('email'),
            "password" => $this->request->getPost('password')
        ];
    
        $model = new UserModel();
        $user = $model->where("email", $data['email'])->first();
    
        // Validasi apakah input username atau password
        // terdapat dalam basis data.
        if ($user) {
            if (password_verify($data['password'], $user['password'])) {
                session()->set([
                    "username" => $user['username'],
                    'isLoggedIn' => true
                ]);
                return redirect()->to(base_url('/'));
            } else {
                return redirect()->to(base_url('login'))->with("pesan", "Password atau Email Salah");
            }
        } else {
            return redirect()->to(base_url('login'))->with("pesan", "Password atau Email Salah");
        }
    }

    // Fungsi melakukan logout.
    public function logout(){
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}