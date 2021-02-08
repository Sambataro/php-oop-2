<?php
require_once __DIR__ . "/prodotto.php";

class Tv extends Prodotto {
  public $marca;
  public $pollici;
  public $pagamento_rate;
  private $smartTv;


  function __construct($nome_prodotto, $prezzo,  $marca, $pollici, $pagamento_rate, $smartTv) {
    parent::__construct($nome_prodotto, $prezzo);
    $this->marca = $marca;
    $this->pollici = $pollici;
    $this->pagamento_rate = $pagamento_rate;
    $this->smartTv = $smartTv;
  }

  public function funzioniSmart() {
    return $this->infoTv();
  }


  private function infoTv() {
    return "supporta applicazioni smart di terze parti";
  }


}
