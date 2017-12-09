<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
	use SoftDeletes;

    protected $fillable = ["descricao"];

    protected $dates = ['deleted_at'];
}
