<?php
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
    }

    public function index()
    {
        $data['judul'] = 'Kelola User';
        return view('user_view', $data);
    }

    public function fetch()
    {
        $users = $this->model->findAll();
        return $this->response->setJSON($users);
    }

    public function store()
    {
        $data = [
            'username' => $this->request->getPost('username'),
            'password' => SHA1($this->request->getPost('password')),
            'nama_user' => $this->request->getPost('nama_user'),
            'level_pengguna' => $this->request->getPost('level_pengguna'),
            'status_user' => $this->request->getPost('status_user'),
        ];
        $this->model->insert($data);
        return $this->response->setJSON(['success' => 'User has been added successfully']);
    }

    public function edit($id)
    {
        $user = $this->model->find($id);
        if ($user) {
            return $this->response->setJSON($user);
        } else {
            return $this->response->setStatusCode(404, 'User not found');
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id_user');
        $data = [
            'username' => $this->request->getPost('username'),
            'nama_user' => $this->request->getPost('nama_user'),
            'level_pengguna' => $this->request->getPost('level_pengguna'),
            'status_user' => $this->request->getPost('status_user')
        ];

        $this->model->update($id, $data);
        return $this->response->setJSON(['success' => 'User updated successfully']);
    }

    public function delete($id)
    {
        if ($this->model->delete($id)) {
            return $this->response->setJSON(['success' => 'User deleted successfully']);
        } else {
            return $this->response->setJSON(['error' => 'Failed to delete user']);
        }
    }
}

