<?php
// File: app/Controllers/Blog.php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController
{
    public function index()
    {
        $model = new BlogModel();
        $data['posts'] = $model->findAll();

        return view('blog/index', $data);
    }

    public function save()
    {
        $model = new BlogModel();

        $data = [
            'title' => $this->request->getPost('title'),
            'content' => $this->request->getPost('content'),
        ];

        $model->insert($data);

        // Redirect to the blog listing page after successful insertion.
        return redirect()->to('/blog');
    }

    public function view($id)
    {
        $model = new BlogModel();
        $data['post'] = $model->find($id);

        if (!$data['post']) {
            // If the blog post with the given $id is not found, display an error or redirect to a 404 page.
            // For simplicity, we'll redirect to the blog listing page here.
            return redirect()->to('/blog');
        }

        return view('blog/view', $data);
    }
}
