<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $allowedFields = ['title', 'content'];
    
    public function getArticle($title = false) {
        if($title == false) {
            return $this->findAll();
        }

        return $this->where(['title' => $title])->first();
    }

    // public function getSocmed($id)
    // {

    // }
}