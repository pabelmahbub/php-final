
<?php

$date_string = 'January 21st, 2020';

$format = 'Y-m-d';
$dateimmutable = new DateTimeImmutable($date_string);

echo $dateimmutable->format($format);
?>