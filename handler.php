<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8" />
    <meta name="description" content="Assignment 3 - PHP" />
    <meta name="keywords" content="ics2o" />
    <meta name="author" content="Ross Wen" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="index.css">
    <link rel="manifest" href="./site.webmanifest">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Pizza Ordering</title>
  </head>

  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Pizza Order</span>
        </div>
      </header>
      
      <main class="mdl-layout__content" style="margin-left:75px;">
<?php
$m=$_POST['pizza_size']+$_POST['toppings'];
    if ($_POST['pizza_size']==6.00){
      $size="large";
    }
    elseif ($_POST['pizza_size']==10.00){
      $size="extra large";
    }
    if ($_POST['toppings']==1.00){
      $toppings="1 toppings";
    }
    elseif ($_POST['toppings']==1.75){
      $toppings="2 toppings";
    }
    elseif ($_POST['toppings']==2.50){
      $toppings="3 toppings";
    }
    elseif($_POST['toppings']==3.35){
      $toppings="4 toppings";
    }
echo "You have ordered an $size pizza with $toppings. This will cost you $";
echo round($m*1.13,2);?>
</html>