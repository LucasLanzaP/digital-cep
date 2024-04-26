<?php

require_once "vendor/autoload.php";

use Usuario\DigitalCep\Search;

$busca = new Search;

$resultado = $busca->getAddressFromZipcode(37968000);

print_r($resultado);