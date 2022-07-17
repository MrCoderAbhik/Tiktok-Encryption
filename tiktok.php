<?php
function Xorconverter($input) {
$c = '';
for($i=0;$i<strlen($input);$i++) {

$value1 = ord($input[$i]);
$xorValue = $value1 ^ 5;
$xorHex = dechex($xorValue);
if (strlen($xorhex) < 2) {
}
$c = $c.$xorHex;
}
return $c;
}
$email = "Test@test.com";
$password = "Test@1234";
$encmail = Xorconverter($email);
$encpass = Xorconverter($password);
echo '{"email":"'.$encmail.',"password":"'.$encpass.'"}';
?>
