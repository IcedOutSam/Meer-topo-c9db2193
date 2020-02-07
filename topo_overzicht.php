<?php
echo "> Hoeveel landen ga je toevoegen?" . PHP_EOL;
$hvl = readline("> ");
$hvl--;
if (is_numeric($hvl)){
;}else {
  echo "Dit is geen cijfer, boeler.";
  exit;
}
for ($i=0; $i <= $hvl; $i++) {
  echo "Welk land wil je toevoegen?" . PHP_EOL;
  $land = readline("> ");

  echo "Wat is de hoofdstad van " . $land . PHP_EOL;
  $hoofdstad = readline("> ");
  $student[$land] = $hoofdstad;
}
foreach ($student as $key => $value) {

echo "> De volgende landen en steden zitten in de database" . PHP_EOL . $key . ", " . $value . PHP_EOL;
}

 ?>
