<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'basetitle' => 'Halaman Dashboard',
            'user_login' => session()->get('nama')
        ];

        return view('pages/dashboard', $data);
    }
}