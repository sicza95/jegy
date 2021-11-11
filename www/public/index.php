<?php
require('../src/Acme/Mozi/Jegy.php');
require('../src/Acme/Repter/Jegy.php');

$jegy = new Acme\Mozi\Jegy('Free Guy', 990, 'Spielberg', 11, 4, '2021.11.11 15:45');
$jegy2 = new Acme\Repter\Jegy("FR5190","Ryanair",25000,"Budapest Liszt Ferenc Nemzetközi Repülőtér (BUD)","Karol Wojtyła nemzetközi repülőtér (BRI)","2021.11.11 15:45");

?>

<pre><?= $jegy ?></pre>
<pre><?= $jegy2 ?></pre>
