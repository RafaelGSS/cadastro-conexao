<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Coach;
class Token extends Model
{
    protected $fillable = ['token', 'active', 'coach_id'];

    public $rules = [
      'token' => 'required',
    ];

    public function coach()
    {
      return $this->belongsTo(Coach::class);
    }
}
