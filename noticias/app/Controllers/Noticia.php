<?php

namespace App\Controllers;

use App\Models\NoticiaModel;

class Noticia extends BaseController
{
    private $noticiaModel;

    public function __construct()
    {
        $this->noticiaModel = new NoticiaModel();
    }

    protected $class =['before' => ['auth']];
    public function index(): string
    {
        return view('noticias', [
            'noticias' => $this->noticiaModel->paginate(4),
            'pager' => $this->noticiaModel->pager
        ]);
    }

    public function deletar($id)
    {
        if ($this->noticiaModel->delete($id)) {
            echo view('msgNoticia', [
                'message' => 'Notícia Excluída com Sucesso'
            ]);
        } else {
            echo view('msgNoticia', [
                'message' => 'Falha ao Excluir Notícia'
            ]);
        }
    }

    public function novo()
    {
        return view('formNoticia');
    }

    public function gravar()
    {

        $dadosForm = $this->request->getPost();

        $imagem = $this->request->getFile('foto');

        if ($imagem->isValid()) {

            if ($imagem->hasMoved()) {
                return redirect()->route('noticias.novo')->with('erros', 'Falha na Leitura do Arquivo')->withInput();
            }

            $extensao = $imagem->getExtension();

            $extensoesAceitas = ['png', 'jpg', 'gif', 'webp'];

            if (!in_array($extensao, $extensoesAceitas)) {
                return redirect()->route('noticias.novo')->with('erros', 'Extensão Inválida!')->withInput();
            }
        

        if (!$imagem->move('assets/fotos', $imagem->getRandomName())) {
            return redirect()->route('noticias.novo')->with('erros', 'Falha no upload!')->withInput();
        }

        $dadosForm['foto'] = $imagem->getName();

    }

        if (empty($dadosForm['hab'])) {
            $dadosForm['hab'] = 0;
        }

        if ($this->noticiaModel->save($dadosForm)) {
            return view("msgNoticia", [
                'message' => 'Notícia Salva com Sucesso!'
            ]);
        } else {
            return view("msgNoticia", [
                'message' => 'Falha ao Salvar Registro!'
            ]);
        }
    }

    public function editar($id)
    {
        return view('formNoticia', [
            'noticias' => $this->noticiaModel->find($id)
        ]);
    }

    // public function getNoticia($id)
    //  {
    //     return view('noticia', [
    //         'noticia' => $this->noticiaModel->find($id)
    //     ]);
    //  }
}
