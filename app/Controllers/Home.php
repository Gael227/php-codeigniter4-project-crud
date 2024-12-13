<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function coba()
    {
        $data['title'] = 'Belajar CI4';
        $data['msg1'] = 'Mari kita belajar CodeIgniter 4';
        $data['msg2'] = 'Membuat aplikasi CRUD sederhana dengan CodeIgniter 4';
        echo view('test_view', $data);
    }

    public function bootstrap()
    {
        $data['title'] = 'Belajar Bootstrap';
        $data['msg1'] = 'Mari kita belajar CodeIgniter 4';
        $data['msg2'] = 'Membuat aplikasi CRUD sederhana dengan CodeIgniter 4';
        echo view('login', $data);
    }
}
