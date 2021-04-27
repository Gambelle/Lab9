<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

  $userneame = $_POST["user"];
  $password = $_POST["password"];
  $avacado = $_POST["avacado"];
  $bread = $_POST["bread"];
  $cocoa = $_POST["cocoa"];
  $shipping = $_POST["shipping"];
  echo "<h2> Welcome ". $userneame.", your password is: ". $password ."</h2>";

    function getTotal($A, $B, $C, $S) {
      $total = ($A*24.99)+($B*22.99)+($C*23.99)+$S;
      return $total;
    }

    function ship($E){
      $shipStatement=null;
      if($E == "0")
      {
        $shipStatement = "Free seven day";
      }
      else if($E == "5")
      {
        $shipStatement = "Three day";
      }
      else if($E == "50")
      {
        $shipStatement = "Over night";
      }
      return $shipStatement;
    }

    echo "<div id = receipt>";
    echo "<table style=width:100%>";
    echo "<td>" . "   " . "</td>";
    echo "<td>" . "Quantity" . "</td>";
    echo "<td>" . "Cost per Item" . "</td>";
    echo "<td>" . "Sub Total" . "</td>";
    echo "<tr>";

    echo "<td>" . "Plush Avacado" . "</td>";
    echo "<td>" . $avacado . "</td>";
    echo "<td>" . "$24.99" . "</td>";
    echo "<td>" . "$". $avacado*24.99 . "</td>";
    echo "<tr>";

    echo "<td>" . "Plush Bread" . "</td>";
    echo "<td>" . $bread . "</td>";
    echo "<td>" . "$22.99" . "</td>";
    echo "<td>" . "$". $bread*22.99 . "</td>";
    echo "<tr>";

    echo "<td>" . "Plush Hot Cocoa" . "</td>";
    echo "<td>" . $cocoa . "</td>";
    echo "<td>" . "$23.99" . "</td>";
    echo "<td>" . "$". $cocoa*23.99 . "</td>";
    echo "<tr>";

    echo "<td>" . "Shipping" . "</td>";
    echo "<td>" . " " . "</td>";
    echo "<td>" . ship($shipping) . "</td>";
    echo "<td>" . "$". $shipping . "</td>";
    echo "<tr>";

    echo "<td>" . "Total cost" . "</td>";
    echo "<td>" . "  " . "</td>";
    echo "<td>" . "  " . "</td>";
    echo "<td>" . "$". getTotal($avacado, $bread, $cocoa, $shipping) . "</td>";
    echo "</div>";

  ?>
