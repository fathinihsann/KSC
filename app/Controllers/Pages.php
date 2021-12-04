<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\BodyPaintModel;
use App\Models\GeneralRepairModel;
use App\Models\PesanModel;

class Pages extends BaseController
{
    protected $articleModel;
    protected $generalrepairModel;
    protected $bodypaintModel;
    protected $pesanModel;

    public function __construct() {
        $this->articleModel = new ArticleModel();
        $this->generalrepairModel = new GeneralRepairModel();
        $this->bodypaintModel = new BodyPaintModel();
        $this->pesanModel = new PesanModel();
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
        // $currentPage = $this->request->getVar('page_article') ? $this->request->getVar('page_article') : 1;

        // $article = $this->articleModel->findAll();

        // d($this->request->getVar('keyword'));

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $article = $this->articleModel->search($keyword);
        } else {
            $article  = $this->articleModel;
        }

        $data = [
            'active'    => 'article',
            'article' => $article->paginate(5, 'article'),
            'pager' => $this->articleModel->pager
            // 'currentPage' => $currentPage
        ];

        // $articleModel = new ArticleModel();
        

        return view('pages/article', $data);
    }

    public function layanan()
    {
        $generalrepair = $this->generalrepairModel->findAll();
        $bodypaint = $this->bodypaintModel->findAll();

        $data = [
            'active' => 'layanan',
            'generalrepair' =>$generalrepair,
            'bodypaint' => $bodypaint
        ];

        return view('pages/layanan', $data);
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

        $keyword = $this->request->getVar('keyword');
        if($keyword){
            $article = $this->articleModel->search($keyword);
        } else {
            $article = $this->articleModel;
        }

        $data = [
            'active' => 'article',
            'article' => $article->paginate(5, 'article'),
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

    public function savePesan() {
        
        $this->pesanModel->save([
            'name' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email'),
            'message' => $this->request->getVar('message')
    
        ]);

        session()->setFlashdata('pesan', 'Feedback berhasil ditambahkan');

        return redirect()->to('/layanan');
    }

    public function delete($id)
    {
        $this->articleModel->delete($id);

        return redirect()->to('/article');
    }
    
}
