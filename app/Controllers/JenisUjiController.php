<?php
namespace App\Controllers;
use App\Models\JenisUjiModel;
use CodeIgniter\Controller;

class JenisUjiController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new JenisUjiModel();
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
        $validation = \Config\Services::validation();
        
        // Set aturan validasi
        $validation->setRules([
            'nama_spesimen' => 'required',
            'harga_spesimen_umum' => 'required',
            'harga_spesimen_mahasiswa' => 'required',
            'satuan' => 'required',
            'status_spesimen' => 'required'
        ]);
    
        // Jalankan validasi
        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => $validation->getErrors()
            ])->setStatusCode(400);
        }
    
        $data = [
            'nama_spesimen' => $this->request->getPost('nama_spesimen'),
            'harga_spesimen_umum' => $this->request->getPost('harga_spesimen_umum'),
            'harga_spesimen_mahasiswa' => $this->request->getPost('harga_spesimen_mahasiswa'),
            'satuan' => $this->request->getPost('satuan'),
            'status_spesimen' => $this->request->getPost('status_spesimen')
        ];
    
        if ($this->model->insert($data)) {
            return $this->response->setJSON(['success' => 'Data berhasil ditambahkan']);
        } else {
            return $this->response->setJSON(['error' => 'Gagal menyimpan data'])->setStatusCode(500);
        }
    }

    public function edit($id)
    {
        $user = $this->model->find($id);
        if ($user) {
            return $this->response->setJSON($user);
        } else {
            return $this->response->setStatusCode(404, 'Data not found');
        }
    }

    public function update()
    {
        $id = $this->request->getPost('id_spesimen');
        $data = [
            'id_spesimen' => $this->request->getPost('id_spesimen'),
            'nama_spesimen' => ($this->request->getPost('nama_spesimen')),
            'harga_spesimen_umum' => $this->request->getPost('harga_spesimen_umum'),
            'harga_spesimen_mahasiswa' => $this->request->getPost('harga_spesimen_mahasiswa'),
            'satuan' => $this->request->getPost('satuan'),
            'status_spesimen' => $this->request->getPost('status_spesimen')
        ];

        $this->model->update($id, $data);
        return $this->response->setJSON(['success' => 'Data updated successfully']);
    }

    public function delete($id)
    {
        if ($this->model->delete($id)) {
            return $this->response->setJSON(['success' => 'Data deleted successfully']);
        } else {
            return $this->response->setJSON(['error' => 'Failed to delete data']);
        }
    }
}