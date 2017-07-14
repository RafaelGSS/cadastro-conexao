<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;

class TokenController extends Controller
{
    private $token;

    public function __construct(Token $token)
    {
      $this->token = $token;
    }
    public function validateToken(Request $request)
    {
      $this->validate($request, $this->token->rules);
      $token = $this->token->where('token', $request->token)->where('active', 1)->first();
      if(!$token) {
        return redirect()->back();
      }
      $token->active = 0;
      $token->save();
      $request->session()->put('logado', $token->id);
      return redirect()->route('form', $token->token);
    }

    public function newToken()
    {
      return view('cadastro.gerar');
    }

    public function generate(Request $request)
    {
      $coach = $request->input('coach');
      $data = [];
      $data['token'] = str_random(40);
      $data['active'] = 1;
      $data['coach_id'] = $coach;
      $token = $this->token->create($data);
      $coach = $token->coach;
      if($token){
        return view('cadastro.gerar',['token' => $token]);
      }
      else{
        dd("erro na geração, contacte o administrador");
      }

    }

}
