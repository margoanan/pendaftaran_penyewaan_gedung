<?php

namespace App\Controllers;

use App\Models\Auth_model;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    public function __construct()
    {
        // Load model Auth_model
        $this->authModel = new Auth_model();
    }

    public function login()
    {
        // Proses login
        if ($this->request->getMethod() === 'post') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            // Periksa kecocokan login dari database
            $user = $this->authModel->cek_login($username);

            if ($user && password_verify($password, $user['password'])) {
                // Cek peran (role) pengguna
                if ($user['role'] == 'admin') {
                    // Login sebagai admin
                    // Lakukan sesuatu seperti set session admin, redirect ke dashboard admin, dll.
                    return redirect()->to('/admin/dashboard');
                } else if ($user['role'] == 'pasien') {
                    // Login sebagai pasien
                    // Lakukan sesuatu seperti set session pasien, redirect ke dashboard pasien, dll.
                    return redirect()->to('/pasien/dashboard');
                }
            } else {
                // Login gagal
                // Tampilkan pesan error atau tindakan lainnya
                return redirect()->back()->withInput()->with('error', 'Username atau password salah.');
            }
        }

        return view('login'); // Ganti 'login' dengan view login Anda
    }

    public function register()
    {
        // Proses registrasi
        if ($this->request->getMethod() === 'post') {
            $data = [
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Hash password sebelum disimpan
                // Tambahkan data lain yang diperlukan untuk registrasi
            ];

            // Simpan data ke database
            $registered = $this->authModel->register($data);

            if ($registered) {
                // Registrasi berhasil
                // Lakukan sesuatu seperti redirect, dll.
                return redirect()->to('/login')->with('success', 'Registrasi berhasil, silakan login.');
            } else {
                // Registrasi gagal
                // Tampilkan pesan error atau tindakan lainnya
                return redirect()->back()->withInput()->with('error', 'Registrasi gagal.');
            }
        }

        return view('register'); // Ganti 'register' dengan view registrasi Anda
    }
}
