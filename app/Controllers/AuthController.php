<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Login'; // Menambahkan title ke data
        $data['msg1'] = 'Selamat datang di halaman login!';
        $data['msg2'] = 'Silakan masukkan username dan password Anda.';
        return view('login', $data); // Mengirimkan data ke view
    }

    public function login()
    {
        $userModel = new UserModel();
        $session = \Config\Services::session();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $userModel->getUserByUsername($username);

        if ($user && $user['password'] === sha1($password)) {
            $session->set([
                'id_user' => $user['id_user'],
                'username' => $user['username'],
                'nama_user' => $user['nama_user'],
                'level_pengguna' => $user['level_pengguna'],
                'status_user' => $user['status_user'],
                'logged_in' => true
            ]);

            return $this->response->setJSON(['status' => 'success']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Username atau password salah.']);
        }
    }

    public function logout()
    {
        $session = \Config\Services::session();
        $session->destroy();
        return redirect()->to('/AuthController');
    }
}
