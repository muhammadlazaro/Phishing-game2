<?php namespace App\Controllers;

use App\Models\PostModel;
use CodeIgniter\Controller;

class PostsController extends Controller
{
    protected $postModel;
    protected $request;

    public function __construct()
    {
        $this->postModel = new PostModel();
        $this->request   = \Config\Services::request();
    }

    /**
     * Daftar semua post
     */
    public function index()
    {
        $data['posts'] = $this->postModel->getAll();
        // Render view posts_list, kirim data tanpa escaping
        echo view('posts_list', $data);
    }

    /**
     * Tampilkan detail satu post
     */
    public function view($id = null)
    {
        $post = $this->postModel->getById($id);
        if (!$post) {
			echo "Post dengan ID $id tidak ditemukan.";
			die;
            return redirect()->to('/posts');
        }
        $data['post'] = $post;
        //return view('posts_view', $data);
		return view('posts_view', ['post' => $post]);
    }

    /**
     * Form pembuatan post baru
     */
    public function create()
    {
        // Jika ada submission form
        if ($this->request->getMethod() === 'post') {
            $title   = $this->request->getPost('title');
            $content = $this->request->getPost('content');
			var_dump($title, $content);

            $this->postModel->insertPost([
                'title'   => $title,
                'content' => $content,
            ]);
            return redirect()->to('/posts');
        }
        echo view('posts_create');
    }

    /**
     * Form edit post
     */
    public function edit($id = null)
    {
        $post = $this->postModel->getById($id);
        if (!$post) {
            return redirect()->to('/posts');
        }

        // Jika ada submission form
        if ($this->request->getMethod() === 'post') {
            $title   = $this->request->getPost('title');
            $content = $this->request->getPost('content');
            $this->postModel->updatePost($id, [
                'title'   => $title,
                'content' => $content,
            ]);
            return redirect()->to('/posts');
        }

        $data['post'] = $post;
        echo view('posts_edit', $data);
    }

    /**
     * Hapus satu post
     */
    public function delete($id = null)
    {
        if ($id) {
            $this->postModel->deletePost($id);
        }
        return redirect()->to('/posts');
    }
}
