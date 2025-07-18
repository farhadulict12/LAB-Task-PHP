<?php
function cleanString($string) {
    // Keep only a-z, A-Z, 0-9, spaces, and question marks
    return preg_replace('/[^a-zA-Z0-9 ?]/', '', $string);
}

// Example usage
$testString = "Hello, World! 123? This is a test@string#with$special%characters.";
$cleanedString = cleanString($testString);

echo "Original string: " . $testString . "\n";
echo "Cleaned string: " . $cleanedString . "\n";
?>