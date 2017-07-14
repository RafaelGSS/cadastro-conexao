<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Token;
use App\Cadastro;
use Mail;
class CadastroController extends Controller
{
    private $cadastro;

    public function __construct(Cadastro $cadastro)
    {
      $this->cadastro = $cadastro;
    }
    public function showForm($token)
    {
      $tk = Token::where('token', $token)->get()->first();
      if($tk){
        $coach = $tk->coach;
        return view('cadastro.cadastroForm', compact('coach'));
      }
      return abort(404, "Token inválido");
    }
    public function store(Request $request)
    {
      $dates = $request->all();
      $dates["nascimento"] = date("Y-m-d", strtotime($request->input('nascimento')));
      $this->validate($request, $this->cadastro->rules);

      $insert = $this->cadastro->create($dates);
      if($insert){
        $request->session()->flush();
        $coach = $insert->coach;
        // $email = $coach->toArray();
        $email = ['rafael.nunu@hotmail.com', 'marcoscoala14@gmail.com', 'guidourado2014@gmail.com', 'douradojulliany@gmail.com', 'wanderraphaeldourado@gmail.com⁠⁠⁠⁠'];
        //  sending mail
        Mail::send('cadastro.sendEmail', $dates, function($message) use ($email,$coach){
          $message->to($email)->subject('Novo cadastro no nome de: '.$coach->name);
          $message->from('liderancanovale@gmail.com');
        });
        return view('cadastro.success', compact('coach'));

      }

    }
}
