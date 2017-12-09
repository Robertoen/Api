<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Aluno;

class AlunoController extends Controller
{
	private $alunoModel;

	public function __construct(Aluno $aluno){
		$this->alunoModel = $aluno;
	}
	
	public function index(){
		return $this->alunoModel->get();
	}
	
	public function find($id){
		return $this->alunoModel->find($id);
	}
	
	public function insert(Request $request){
		$dados = $request->all();
		$this->alunoModel->create($dados);
	}

	public function update(){
		$aluno = $this->find($id);
		$aluno->update($request->all());
	}

	public function delete(){
		$aluno = $this->find($id);
		$aluno->delete();
	}


}
