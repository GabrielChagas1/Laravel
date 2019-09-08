<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use lluminate\Http\UploadedFile;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{
    //
    public function index(){
        //recuperar todos os registros
        $registros = Curso::all();

        return view('admin.cursos.index', compact('registros'));
    }

    public function adicionar(){
        return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req){
        //
        $dados = $req->all();

        if(isset($dados['Publicado'])){
            $dados['Publicado'] = 'sim';
        }else{
            $dados['Publicado'] = 'nao';
        }
        
        //tratando imagens
        if($req->hasFile('Imagem')){
            $imagem = $req->file('Imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "Imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['Imagem'] = $dir."/".$nomeImagem;
        }

        Curso::create($dados);
        return redirect()->route('admin.cursos');
    }

    public function editar($id){
        $registro = Curso::find($id);
        return view('admin.cursos.editar', compact('registro'));
    }

    public function atualizar(Request $req, $id){
        //
        $dados = $req->all();

        if(isset($dados['Publicado'])){
            $dados['Publicado'] = 'sim';
        }else{
            $dados['Publicado'] = 'nao';
        }
        
        //tratando imagens
        if($req->hasFile('Imagem')){
            $imagem = $req->file('Imagem');
            $num = rand(1111, 9999);
            $dir = "img/cursos";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "Imagem_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);
            $dados['Imagem'] = $dir."/".$nomeImagem;
        }

        Curso::find($id)->update($dados);
        return redirect()->route('admin.cursos');
    }

    public function deletar($id){
        Curso::find($id)->delete();
        return redirect()->route('admin.cursos');
    }
}
