<?php
include_once('./src/Acme/Mozi/Jegy.php');

use Acme\Mozi\Jegy;
<<<<<<< HEAD
use Acme\Repter\Jegy2;
=======
>>>>>>> b9b8b46646e6591ffa8db89685b6a703e9e35309

$jegy = new Jegy('Free Guy', 990, 'Spielberg', 11, 4, '2021.11.11 15:45');
$jegy2 = new Jegy("FR5190","Ryanair",25000,"Budapest Liszt Ferenc Nemzetközi Repülőtér (BUD)","Karol Wojtyła nemzetközi repülőtér (BRI)","2021.11.11 15:45");
?>

<pre>
    <?= $jegy ?>
    <?= $jegy2 ?>
</pre>
