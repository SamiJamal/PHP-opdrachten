<?php

echo "<h1>Hier begint de while loop</h1>";
echo "<p>Een while-loop gebruik je als je niet van tevoren kunt weten hoeveel herhalingen je wilt</p>";

$x = 35;

while ($x >= 25) {
    echo"skusku";
    $x--;
}

echo "<h1>Hir begint de for loop</h1>";
echo "<p>Een for loop gebruik je als je exact weet hoeveel herhalingen je wilt.</p>";

for ($i = 35; $i >= 25 ; $i--) {
    echo "skusku";
}

?>