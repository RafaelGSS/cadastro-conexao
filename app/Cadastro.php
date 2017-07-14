<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Coach;

class Cadastro extends Model
{
    protected $fillable = [
      'nome',
      'cpf',
      'email',
      'telefone',
      'nascimento',
      'escolaridade',
      'instituicao',
      'curso',
      'conclusao',
      'empresa',
      'coach_id',
    ];

    public $rules = [
      'nome' => 'required|min:3',
      'cpf' => 'required|numeric',
      'email' => 'required',
      'telefone' => 'required|numeric',
      'nascimento' => 'required',
      'escolaridade' => 'required',
      'coach_id' => 'min:1|max:5',
    ];

    public function coach()
    {
      return $this->belongsTo(Coach::class);
    }
}
