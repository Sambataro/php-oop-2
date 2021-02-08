<?php

class Prodotto {
  public $nome_prodotto;
  public $prezzo;

  function __construct($nome_prodotto, $prezzo) {
    $this->nome_prodotto = $nome_prodotto;
    $this->prezzo = $prezzo;
  }

}

 ?>
