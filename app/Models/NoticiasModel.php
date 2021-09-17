<?php

namespace App\Models;
use CodeIgniter\Model;

class NoticiasModel extends Model {

    protected $table = 'noticias';
    protected $primaryKey = 'id';

    public function getNoticias($id = null) {
        if ($id === null) {
            return $this->findAll();
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
}