<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'article';
    protected $allowedFields = ['title', 'content'];
    
    public function getArticle($id = false) {
        if($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }

    // public function getSocmed($id)
    // {

    // }
}