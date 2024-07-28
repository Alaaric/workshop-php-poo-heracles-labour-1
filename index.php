<?php

// First Labour : Heracles vs Nemean Lion
// use your Figher class here

require 'src/Fighter.php';


$heracles = new Fighter("🧔 Heracles", 6, 20);

$lion = new Fighter("🦁 Nemean lion", 13, 11);


$round = 0;
while ($heracles->getLife() > 0 && $lion->getLife() > 0) {
    $round += 1;

    echo "\n";
    echo "🗡️ round " . $round . " FIGHT!!!" . "\n";
    $heracles->fight($lion);
    $lion->fight($heracles);
    echo $heracles->isAlive($lion);
    echo $lion->isAlive($heracles);
//    echo $heracles->getName() . " : " . $heracles->getLife(). " ❤️" . "\n";
//    echo $lion->getName() . " : " . $lion->getLife() . " ❤️" . "\n";
//
//    if (!$heracles->isAlive()) {
//        echo "\n";
//        echo "💀 " .  $heracles->getName() ." is dead" . "\n";
//        echo "🏆 " . $lion->getName() . "won the fight (❤️ " . $lion->getLife() .")" . "\n";
//
//    }
//    if(!$lion->isAlive()) {
//        echo "\n";
//        echo "💀 " .  $lion->getName() ." is dead!" . "\n";
//        echo "🏆 " . $heracles->getName() . " won the fight! (remaining life: ❤️ " . $heracles->getLife() .")" . "\n";
//    }
}