<?php 

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function processLogin()
    {
        $model = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                session()->set([
                    'id' => $user['id'],
                    'username' => $user['username'],
                    'role' => $user['role'],
                    'logged_in' => true
                ]);

                if ($user['role'] == 'petani') {
                    return redirect()->to('/petani');
                }
                if ($user['role'] == 'penggilingan') {
                    return redirect()->to('/penggilingan');
                }
                if ($user['role'] == 'distributor') {
                    return redirect()->to('/distributor');
                }
            }else{
                return 'password salah';
            }
        }else{
            return 'user tidak ditemukan';
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}