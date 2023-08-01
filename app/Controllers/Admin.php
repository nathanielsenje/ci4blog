<?php
// File: app/Controllers/Admin.php

namespace App\Controllers;

use App\Models\BlogModel;

class Admin extends BaseController
{
  public function index()
  {
    $model = new BlogModel();
    $data['posts'] = $model->findAll();

    return view('admin/dashboard', $data);
  }

  public function create()
  {
    if ($this->request->getMethod() === 'post') {
      $rules = [
        'title' => 'required|min_length[3]|max_length[255]',
        'content' => 'required',
      ];

      if (!$this->validate($rules)) {
        $data['validation'] = $this->validator;
      } else {
        $model = new BlogModel();

        $data = [
          'title' => $this->request->getPost('title'),
          'content' => $this->request->getPost('content'),
        ];

        $model->insert($data);

        return redirect()->to('/admin');
      }
    }
    return view('admin/create');
  }
  public function edit($id)
  {
    $model = new BlogModel();
    $data['post'] = $model->find($id);

    if (!$data['post']) {
      // If the blog post with the given $id is not found, display an error or redirect to a 404 page.
      // For simplicity, we'll redirect to the admin dashboard here.
      return redirect()->to('/admin');
    }

    return view('admin/edit', $data);
  }

  public function update($id)
  {
    $model = new BlogModel();

    $data = [
      'title' => $this->request->getPost('title'),
      'content' => $this->request->getPost('content'),
    ];

    $model->update($id, $data);

    return redirect()->to('/admin');
  }
}