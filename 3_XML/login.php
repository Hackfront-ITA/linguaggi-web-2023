<?php
require_once("connessione.php");

$conn_db = connessione_db();
?>

<?xml version="1.0" encoding="UTF-8" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="it" lang="it">
<head>
  <title>Corsi</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&amp;display=swap" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rampart+One&amp;display=swap" />
  <link rel="stylesheet" type="text/css" href="stile.css" />
</head>

<body>
  <div id="header">
    <h1><a href="index.html">R&amp;C GYM</a></h1>
    <table id="menu">
      <tbody>
        <tr>
          <td><a href="index.html">Homepage</a></td>
          <td><a href="corsi.html">Corsi</a></td>
          <td><a href="servizi.html">Servizi</a></td>
          <td><a href="shop.php">Shop</a></td>
          <td><a href="info.html">Informazioni</a></td>
        </tr>
      </tbody>
    </table>
    <hr />
  </div>

  <div id="contenuto" class="centrato">
    <h2 class="pb-16">LOGIN</h2>
    <form action="login.php" method="POST">
      <label for="nome">Nome utente:</label><br>
      <input type="text" id="nome" name="nome"><br><br>

      <label for="cognome">Password:</label><br>
      <input type="text" id="cognome" name="cognome"><br><br>

      <input type="hidden" name="corso" value="<?php echo ($_GET['corso']); ?>" />
      <button type="submit" name="azione" value="prenota" class="button">Accedi</button>
    </form>
    <a href="#">Registrati!</a>
  </div>

  <div id="footer">
    Copyright R&amp;C GYM 2023
  </div>
</body>

</html>
