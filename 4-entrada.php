<?php
echo "quem é voce?";
$usuario = $argv[0];
echo "ola " . $usuario . " tudo bem?";

echo "em qual UC voce esta? me responda apenas com numeros";

$uc = fgets(STDIN);

echo "voce ta na UC" . $uc ;
?>