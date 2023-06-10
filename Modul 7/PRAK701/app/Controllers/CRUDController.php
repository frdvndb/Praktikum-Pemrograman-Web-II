<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BookModel;
use App\Models\UserModel;

class CRUDController extends BaseController
{
    // Memuat helper "form".
    // Digunakan untuk validasi data 
    // yang dimasukkan pada formulir.
    protected $helpers = ['form'];

    // Fungsi default yang akan dipanggil.
    // Halaman index di mana semua daftar buku
    // ditampilkan
    public function index()
    {
        $model = new BookModel();
        return view('index', [
            "data" => $model->findAll(),
            "username" => session()->get('username')
        ]);
    }

    // Fungsi ke halaman create.
    public function createView()
    {
        return view('create');
    }

    // Fungsi menambah buku.
    public function createAdd()
    {
        // Validasi aturan buku.
        if(!$this->validate('aturanBuku')){
            return redirect()->back()->withInput();  
        }

        $judul = $this->request->getPost('judul');
        $penulis = $this->request->getPost('penulis');
        $penerbit = $this->request->getPost('penerbit');
        $tahun_terbit = $this->request->getPost('tahun_terbit');

        $model = new BookModel();
        $model->insert([
            "judul" => $judul,
            "penulis" => $penulis,
            "penerbit" => $penerbit,
            "tahun_terbit" => $tahun_terbit,
        ]);

        return redirect()->to(base_url('/'));
    }

    // Fungsi ke halaman edit.
    public function editView($id){
        $model = new BookModel();
        return view('edit', [
            "data" => $model->find($id)
        ]);
    }

    // Fungsi edit buku.
    public function editUpdate($id){

        // Validasi aturan buku.
        if(!$this->validate('aturanBuku')){
            return redirect()->back()->withInput();
        }

        $data = [
            "judul" => $this->request->getPost('judul'),
            "penulis" => $this->request->getPost('penulis'),
            "penerbit" => $this->request->getPost('penerbit'),
            "tahun_terbit" => $this->request->getPost('tahun_terbit')
        ];

        $model = new BookModel();
        $model->update($id, $data);

        return redirect()->to(base_url('/'));
        
    }

    // Fungsi hapus buku.
    public function delete($id){
        $model = new BookModel();
        $model->delete($id);
        return redirect()->to(base_url('/'));
    }

    // Fungsi ke halaman register.
    public function createAccountView()
    {
        return view("register");
    }

    // Fungsi membuat akun untuk login.
    public function createAccountAdd()
    {   
        // Validasi aturan register.
        if(!$this->validate('aturanRegister')){
            return redirect()->back()->withInput();
        }

        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = new UserModel();
        $model->insert([
            "username" => $username,
            "email" => $email,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ]);

        return redirect()->to(base_url('login'));
    }

    // Fungsi untuk pencarian buku.
    public function search()
    {
        // Mendapatkan kueri dari input formulir.
        $query = $this->request->getGet('query');

        $model = new BookModel();

        // Pengembalian hasil pencaruan ke view.
        return view('index', [ 
            "data" => $model->searchBooks($query),
            "username" => session()->get('username'),
        ]);
    }
}