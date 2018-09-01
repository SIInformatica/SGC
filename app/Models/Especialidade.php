<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model {
    /*
     * 
     *  Tabela do Banco de Dados 
     * 
     */

    protected $table = 'especialidade';

    /*
     * 
     *  Mapeamento dos atributos da tabela
     * 
     */
    protected $fillable = ['id', 'ativo', 'descricao'];

    /*
     * 
     *  Mapeamento dos atributos da tabela que 
     *  não serão visiveis para consultas
     * 
     */
    protected $hidden = ['id'];

}
