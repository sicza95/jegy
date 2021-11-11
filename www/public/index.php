<?php
require('../src/Acme/Mozi/Jegy.php');

use Acme\Mozi\Jegy;

$jegy = new Jegy('Free Guy', 990, 'Spielberg', 11, 4, '2021.11.11 15:45');

?>

<pre><?= $jegy ?></pre>
