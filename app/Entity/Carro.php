<?php

namespace App\Entity;

use \App\Db\Database;
use \PDO;

class Carro{

  /**
   * Método responsável por cadastrar uma novano banco
   * @return boolean
   */
  public function cadastrar(){
    //DEFINIR A DATA
    $this->data = date('Y-m-d H:i:s');

    $obDatabase = new Database('carros');
    $this->id = $obDatabase->insert([
                                      'chassi'    => $this->chassi,
                                      'marca'    => $this->marca,
                                      'modelo'    => $this->modelo,
                                      'ano'    => $this->ano,
                                      'placa'    => $this->placa,
                                      'estilo'    => $this->estilo,
                                      'data'      => $this->data
                                    ]);

    //RETORNAR SUCESSO
    return true;
  }

  /**

   * @return boolean
   */
  public function atualizar(){
    return (new Database('carros'))->update('id = '.$this->id,[
                                                                'chassi'    => $this->chassi,
                                                                'marca'    => $this->marca,
                                                                'modelo'    => $this->modelo,
                                                                'ano'    => $this->ano,
                                                                'placa'    => $this->placa,
                                                                'estilo'    => $this->estilo,
                                                                'data'      => $this->data
                                                              ]);
  }

  /**
   * @return boolean
   */
  public function excluir(){
    return (new Database('carros'))->delete('id = '.$this->id);
  }

  /**
   * @param  string $where
   * @param  string $order
   * @param  string $limit
   * @return array
   */
  public static function getCarros($where = null, $order = null, $limit = null){
    return (new Database('carros'))->select($where,$order,$limit)
                                  ->fetchAll(PDO::FETCH_CLASS,self::class);
  }

  /**
   * @param  integer $id
   * @return Carro
   */
  public static function getCarro($id){
    return (new Database('carros'))->select('id = '.$id)
                                  ->fetchObject(self::class);
  }

}