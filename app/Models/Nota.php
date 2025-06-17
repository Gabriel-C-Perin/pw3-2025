<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nota extends Model
{
    use SoftDeletes;
    
    // Nome da tabela no banco
    protected $table = 'notas';
    
    // Listagem de campos para inserção no banco
    protected $fillable = ['titulo', 'texto'];
}
