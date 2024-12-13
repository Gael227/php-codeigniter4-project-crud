<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id_user';
    protected $allowedFields = ['username', 'password', 'nama_user', 'level_pengguna', 'status_user'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }
}
