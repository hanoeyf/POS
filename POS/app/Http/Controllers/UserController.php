<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $data = [
            'username' => 'manager_tiga',
            'nama' => 'Manager 3',
            'password' => Hash::make('12345'),
            'level_id' => 2
        ];
         UserModel::create($data);
            
        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
