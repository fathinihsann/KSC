<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Pages extends BaseController
{
    protected $articleModel;

    public function __construct() {
        $this->articleModel = new ArticleModel();
    }

    public function index()
    {
        $data = [
            'active'    => 'home'
        ];

        return view('pages/home', $data);
    }

    public function booking()
    {
        $data = [
            'active'    => 'booking'
        ];

        return view('pages/booking', $data);
    }

    public function article()
    {

        // $article = $this->articleModel->findAll();

        $data = [
            'active'    => 'article',
            'article' => $this->articleModel->paginate(5),
            'pager' => $this->articleModel->pager
        ];

        // $articleModel = new ArticleModel();
        

        return view('pages/article', $data);
    }

    public function detail($title)
    {
        // $article = $this->articleModel->getArticle($id);
        
        $data = [
            'active'    => 'article',
            'article' => $this->articleModel->getArticle($title)
        ];

        if(empty($data['article'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Article'.'Tidak Ditemukan.');
        }

        return view('pages/detail', $data);
    }

    public function article_edit()
    {
        $data = [
            'active' => 'article',
            'article' => $this->articleModel->paginate(5, 'article'),
            'pager' => $this->articleModel->pager
        ];

        return view('pages/article_edit', $data);
    }

    public function save() {
        // dd($this->request->getVar());
        $fileImage = $this->request->getFile('image');

        $imageName = $fileImage->getRandomName();

        $fileImage->move('img', $imageName);

        $this->articleModel->save([
            'title' => $this->request->getVar('title'),
            'content' => $this->request->getVar('content'),
            'image' => $imageName
        ]);

        session()->setFlashdata('pesan', 'Article berhasil ditambahkan');

        return redirect()->to('/article');
    }

    public function delete($id)
    {
        $this->articleModel->delete($id);

        return redirect()->to('/article');
    }
}
