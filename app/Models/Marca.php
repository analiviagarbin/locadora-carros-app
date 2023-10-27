<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $fillable = ['nome','imagem'];

    public function rules(){
        return [
                             // unique recebe a tabela e a coluna e ignora o id que vem da atualização
            'nome' => 'required|unique:marcas,nome,'.$this->id.'|min:3',
            'imagem' => 'required|file|mimes:png',
        ];
    }

    public function feedback(){
        return [
            'required' => 'O campo :attribute é obrigatório!',
            'nome.unique' => 'O nome da marca já existe!',
            'nome.min' => 'O nome dele ter no mínimo 3 caracteres.',
            'imagem.mimes' => 'O arquivo deve ter a extensão .png',
        ];
    }

    public function modelos() {
        // uma marca pode ter vários modelos
        return $this->hasMany('App\Models\Modelo');
    }
}
