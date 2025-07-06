<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function loginPost()
    {
        $model = new \App\Models\UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();

        // Bagian ini hanya akan dieksekusi jika dd() dihapus
        if ($user && password_verify($password, $user['password'])) {
            session()->set([
                'id' => $user['id'],
                'username' => $user['username'],
                'role' => $user['role'],
                'isLoggedIn' => true
            ]);
            return redirect()->to($user['role'] === 'admin' ? '/admin' : '/game/level1');
        }

        return redirect()->to('/login')->with('error', 'Username atau password salah');
    }

    public function register()
    {
        return view('auth/register');
    }

    public function registerProcess()
    {
        helper('form');
        $rules = [
            'username' => 'required|min_length[3]|max_length[100]',
            'password' => 'required|min_length[5]',
            'role'     => 'required|in_list[admin,user]'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $model = new UserModel();
        $model->save([
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role'     => $this->request->getPost('role')
        ]);

        return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login')->with('success', 'Anda telah logout.');
    }
}
