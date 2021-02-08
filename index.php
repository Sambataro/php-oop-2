<?php
  require_once __DIR__."/classes/computer.php";
  require_once __DIR__."/classes/televisore.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $macBookPro = new Computer("MacbookPro M1", 1650, "Apple", "32gb", "12 rate", "2TB SSD");
      $SamsungTv = new Tv("Samsung 4K", "400 €", "Samsung", 40, false, true);

     ?>
    <div class="container">

      <div class="scheda_prodotto">
        <ul>
          <li> <?= $macBookPro->nome_prodotto; ?> </li>
          <li> prezzo: <?= $macBookPro->prezzo; ?> </li>
          <li> ram: <?= $macBookPro->ramEspandibile(); ?> </li>
          <li> finanziamento: <?= $macBookPro->pagamento_rate; ?> </li>
          <li> discho memoria: <?= $macBookPro->memoriaEspandibile(); ?> </li>
        </ul>
      </div>

      <div class="scheda_prodotto">
        <ul>
          <li> <?= $SamsungTv->nome_prodotto; ?> </li>
          <li> pollici: <?= $SamsungTv->pollici; ?></li>
          <li> prezzo: <?= $SamsungTv->prezzo;?> </li>
          <li> finanziamento: <?= $SamsungTv->pagamento_rate; ?> </li>
          <li> funzioni smart: <?= $SamsungTv->funzioniSmart(); ?> </li>
        </ul>
      </div>

    </div>

  </body>
</html>
