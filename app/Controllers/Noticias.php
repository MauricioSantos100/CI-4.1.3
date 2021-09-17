<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\NoticiasModel;

class Noticias extends Controller {

    public function index(){

        $model = new NoticiasModel();

        $data = [
            'noticias' => $model->getNoticias()
        ];

        echo view('templates/header');
        echo view('pages/noticias/list', $data);
        echo view('templates/footer');
    }

    public function view($id = null) {

        $model = new NoticiasModel();
        $data['noticias'] = $model->getNoticias($id);

        if(empty($data['noticias'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoudExpetion('Pagina não encontrada!');
        }

        echo view('templates/header');
        echo view('pages/noticias/view', $data);
        echo view('templates/footer');
    }
}