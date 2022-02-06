<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable =[
        'Nome',
        'Senha',

    ];
    public function rules()
    {
        return[
            'Nome'=>'required',
            'sennha'=>'required|unique:clientes'

        ];


    }














}