<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Especialidade;

class TesteController extends Controller {

    public function teste() {
        echo "olá";
        
        $especialidade = new Especialidade();
        $especialidade->ativo = true;
        $especialidade->descricao = 'alguma coisa';
        $especialidade->save();
    }

}
