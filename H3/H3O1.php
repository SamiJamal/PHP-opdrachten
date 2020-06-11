<?php

$boomImages = array(
    'boom1.jpg',
    'boom2.jpg',
    'boom3.jpg',
    'boom4.jpg',
    'boom5.jpg'

);

$teller = 1;
foreach ($boomImages as $image) {
echo '<img src="bomen/' . $image .'" alt="Boom ' . $teller. '">';
        $teller++;
}
?>