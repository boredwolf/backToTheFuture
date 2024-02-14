<?php

$presentTime = new DateTime('2015-10-21 04:29:00');
$destinationTime = new DateTime('2015-10-21 04:06:00');

echo $presentTime->format('M d Y h:i:s A') . "<br>";
echo $destinationTime->format('M d Y h:i:s A') . "<br>";

$interval = $presentTime->diff($destinationTime);
echo $interval->format("interval : %Y years %M months %H hours %I minutes %S seconds") . "<br>";

$intervalInMinutes = (int)$interval->format("%I");
$gasNeeded = round($intervalInMinutes / 10000);

echo $gasNeeded . " liters needed <br>";

