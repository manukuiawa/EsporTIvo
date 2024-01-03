<?php

namespace App\Controllers;

use App\Models\NoticiaModel;

class News extends BaseController
{
    private $noticiaModel;

    public function __construct()
    {
        $this->noticiaModel = new NoticiaModel();
    }

    public function index(): string
    {
        return view('noticias', [
            'noticias' => $this->noticiaModel->paginate(4),
            'pager' => $this->noticiaModel->pager
        ]);
    }

   

    public function getNoticia($id)
     {
        return view('noticia', [
            'noticia' => $this->noticiaModel->find($id)
        ]);
     }
}
