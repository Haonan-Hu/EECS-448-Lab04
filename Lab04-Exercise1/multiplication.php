<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

echo "<table style=\"width:100%\">";
for ($r = 1; $r <= 100; $r++)
{
  echo'<tr>';
  for ($c = 1; $c <= 100; $c++)
  {
    echo '<td>' .$c*$r.'</td>';
  }
  echo '</tr>';
}
echo"</table>";
?>
