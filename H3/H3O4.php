<!DOCTYPE html>
<html>
<head>
    <style>
        img {
            width: 150px;
            height: 150px;
        }
img.green-border {
    border: solid 2px green;
}
        img.red-border {
            border: solid 2px red;
        }

    </style>
</head>
<body>


<?php

for ($i = 1 ; $i <= 9 ; $i++){
if ($i % 2 ==0) {
    echo '<img class="red-border" src="bomen/boom' . $i . '.jpg" alt="Boom ' . $i . '">';
}
else {
    echo '<img class="green-border" src="bomen/boom' . $i . '.jpg" alt="Boom ' . $i . '">';
}
}
?>

</body>
</html>