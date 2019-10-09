<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$option = $_POST['choice'];
$username = $_POST['name'];
$password = $_POST['pass'];

$numStd = $_POST['sNum'];
$numDeluex = $_POST['dNum'];
$numCollector = $_POST['cNum'];

$stdCost = 39.99 * $numStd;
$deluexCost = 59.99 * $numDeluex;
$collectorCost = 199.99 * $numCollector;
$shipping = 0;
$total = $stdCost + $deluexCost + $collectorCost + $shipping;

if ($option == "Free 7 day")
{
  $shipping = 0;
}

if ($option == "$50.00 over night")
{
  $shipping = 50;
}

if ($option == "$5.00 three day")
{
  $shipping = 5;
}


echo "Welcome valued customer!<br>
      Your account passsword is: $password (Do NOT forget your password)
      <br><br>";

      echo "<div class='table'>";
      echo "<table style=\"width:100%\" border =\"1\">";
      echo "<tr>";
      echo "<td>";
      echo "";
      echo "</td>";
      echo "<td>";
      echo "Quantity";
      echo "</td>";
      echo "<td>";
      echo "Cost Per Item";
      echo "</td>";
      echo "<td>";
      echo "Sub total";
      echo "</td>";
      echo "</tr>";
      echo "<tr>";

      echo "<td>";
      echo "Standard";
      echo "</td>";
      echo "<td>";
      echo $numStd;
      echo "</td>";
      echo "<td>";
      echo "$39.99";
      echo "</td>";
      echo "<td>";
      echo "$" . "" . $stdCost;
      echo "</td>";
      echo "</tr>";

      echo "<td>";
      echo "Deluex";
      echo "</td>";
      echo "<td>";
      echo $numDeluex;
      echo "</td>";
      echo "<td>";
      echo "$59.99";
      echo "</td>";
      echo "<td>";
      echo "$" ."". $deluexCost;
      echo "</td>";
      echo "</tr>";

      echo "<td>";
      echo "Collector";
      echo "</td>";
      echo "<td>";
      echo $numCollector;
      echo "</td>";
      echo "<td>";
      echo "$199.99";
      echo "</td>";
      echo "<td>";
      echo "$" . "" . $collectorCost;
      echo "</td>";
      echo "</tr>";

      echo "<td>";
      echo "Shipping";
      echo "</td>";

      echo "<td colspan = '2'>";
      echo $option;
      echo "</td>";

      echo "<td>";
      echo "$" . "" . ($shipping);
      echo "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan = '3'>";
      echo "Total Cost";
      echo "</td>";
      echo "<td>";
      echo "$" . "" . $total;
      echo "</td>";
      echo "</tr>";
      echo "</table>";
      echo "</div>";
      echo "<br>";
      echo "</div>";

      echo "Thanks for your shopping";
 ?>
