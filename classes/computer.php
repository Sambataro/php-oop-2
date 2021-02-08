<?php
require_once __DIR__ . "/prodotto.php";

class Computer extends Prodotto {
  public $marca;
  private $ram;
  public $pagamento_rate;
  private $tipo_di_memoria;


  function __construct($nome_prodotto, $prezzo,  $marca, $ram, $pagamento_rate, $tipo_di_memoria) {
    parent::__construct($nome_prodotto, $prezzo);
    $this->marca = $marca;
    $this->ram = $ram;
    $this->pagamento_rate = $pagamento_rate;
    $this->tipo_di_memoria = $tipo_di_memoria;
  }

  public function ramEspandibile() {
    return $this->infoRam();
  }

  private function infoRam() {
    return "32GB non espandibile";
  }

  public function memoriaEspandibile() {
    return $this->infoMemoria();
  }

  private function infoMemoria() {
    return "2TB SSD non espandibile";
  }
}
