<?php
function print_name(string $character = "A", string $spacer = " "): void {
    $line_length = 15;
    print str_pad($character, $line_length, $spacer, STR_PAD_BOTH) . "\n";
    print str_repeat($spacer, 6) . $character . $spacer . $character . str_repeat($spacer, 6) . "\n";
    print str_repeat($spacer, 5) . $character . str_repeat($spacer, 3) . $character . str_repeat($spacer, 5) . "\n";
    print str_pad(str_repeat($character, 7), $line_length, $spacer, STR_PAD_BOTH) . "\n";
    print str_repeat($spacer, 3) . $character . str_repeat($spacer, 7) . $character . str_repeat($spacer, 3) . "\n";
    print str_repeat($spacer, 2) . $character . str_repeat($spacer, 9) . $character . str_repeat($spacer, 2) . "\n";
    print $spacer . $character . str_repeat($spacer, 11) . $character . $spacer . "\n";
    print $character . str_repeat($spacer, 13) . $character . "\n";
}