<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RedirectResponse;

class DashboardController extends BaseController
{
    public function index()
    {
        echo view('jenis_uji');
    }
}
