<?php

namespace App\Controllers;

use App\Models\UsersModel;
use CodeIgniter\Controller;

class Users extends Controller
{
    public function index()
    {
        $model = new UsersModel();
        $data['users'] = $model->findAll();

        return view('testingdb/users_list', $data);
    }
}
