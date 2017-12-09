<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{

    protected $fillable = [
    	"nome", "email", "senha", "cpf", "rg", "dt_nasc"
    ]; 

    protected $hidden = ["senha"];

}
