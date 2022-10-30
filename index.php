<?php

$presentTime = new DateTime();
$destinationTime = '02-03-2032 03:50';

$futureDate = DateTime::createFromFormat('m-d-Y H:i', $destinationTime);
$diff = $futureDate->diff($presentTime);

echo "Voici l'heure et la date du jour" . $presentTime->format('m-d-Y H:i') . PHP_EOL;
echo "Voici la date et l'heure que l'on veut atteindre" . $futureDate->format('m-d-Y H:i') . PHP_EOL;
echo "Le temps qu'il reste avant le 02-03-2032 03:50 est de" . $diff->y . "années" . $diff->m . "mois" . $diff->d . "jours" . $diff->h . "heures" . $diff->i;
