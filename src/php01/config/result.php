<?php
$name=htmlspecialchars($_POST['name'], ENT_QUOTES);
$set=htmlspecialchars($_POST['set'], ENT_QUOTES);
$number=htmlspecialchars($_POST['number'], ENT_QUOTES);

echo "私の名前は、".$name. "<br>";
echo "ご希望の商品は、".$set. "<br>";
echo "ご注文は、".$number;