
<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  echo "<table style=width:100%>";
  echo "<td>" . "  " . "</td>";
  for($i=1; $i <=100; $i++)
  {
    echo "<td>" . $i . "</td>";
  }

  for($j=1; $j <= 100; $j++)
  {
    echo "<tr>";
    echo "<td>" . $j . "</td>";
    for($k=1; $k<=100; $k++)
    {
      echo "<td>" . mult($j,$k) . "</td>";
    }
    echo "</tr>";
  }
  function mult($x, $y) {
    $z = $x*$y;
    return $z;
  }
  echo "</table>"
?>
