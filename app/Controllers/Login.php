<?php

// File: app/Controllers/Login.php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
  public function index()
  {
    return view('/blog/admin/login');
  }

  public function attempt()
  {
    $model = new UserModel();

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = $model->where('username', $username)->first();

    if ($user && password_verify($password, $user['password'])) {
      // Valid credentials, log the user in and redirect to the admin dashboard.
      session()->set('logged_in', true);
      return redirect()->to('/admin');
    } else {
      // Invalid credentials, redirect back to the login page with an error message.
      return redirect()->back()->with('error', 'Invalid username or password.');
    }
  }

  public function logout()
  {
    session()->remove('logged_in');
    return redirect()->to('/blog/admin');
  }
}