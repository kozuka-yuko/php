<?php
$name = htmlspecialchars($_GET["name"], ENT_QUOTES);
echo "私の名前は、" . $name . "<br  />";

$order = htmlspecialchars($_GET["order"],
ENT_QUOTES);
echo "ご希望商品は、" . $order . "<br/>";

$number = htmlspecialchars($_GET["number"],
ENT_QUOTES);
echo "注文数は、" . $number . "<br />";
