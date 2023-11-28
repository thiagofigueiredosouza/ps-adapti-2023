<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Aluno;


class SiteController extends Controller
{

    private $alunos;
    private $cursos;
    private $nomeFiltro;


    public function __construct(Aluno $aluno, Curso $curso) {
        $this->alunos = $aluno;
        $this->cursos = $curso;
    }

    public function index()
    {
        $alunos = $this->alunos->all();
        $cursos = $this->cursos->all();
        return view('site.index', compact('cursos', 'alunos'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {
    }


    public function show($id)
    {
    }


    public function edit($id)
    {
    }


    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }

    public function contratar(Aluno $aluno) {
        $aluno->update(['formado' => true]);
        return view('site.index', compact('cursos', 'alunos'));
    }
}
