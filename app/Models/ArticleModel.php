<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $allowedFields = ['title', 'content', 'image'];
    
    public function getArticle($title = false) {
        if($title == false) {
            return $this->findAll();
        }

        return $this->where(['title' => $title])->first();
    }

    // public function getSocmed($id)
    // {

    // }
    public function search($keyword)
    {
        // $builder = $this->table('article');
        // $builder->like('title', $keyword);
        // return $builder;

        return $this->table('article')->like('title', $keyword);
    }
}