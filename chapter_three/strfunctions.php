<?php

$appleJice = "apple juice is made from apples.\n";
print $appleJice;
$grapefruitJuice = str_replace("apple", "grapefruit", $appleJice);
print $grapefruitJuice;

print ucfirst($grapefruitJuice);