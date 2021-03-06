<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'rua', 'numero', 'bairro', 'cidade','uf', 'cep',
  ];

  public function user(){
      $this->hasOne('App\User', 'enderecoId');
  }

  public function evento(){
      $this->hasOne('App\Evento', 'enderecoId');
  }
}
