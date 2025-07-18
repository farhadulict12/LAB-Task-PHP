<?php
echo "Numbers between 200 and 250 divisible by 5:\n";

// Loop through numbers from 200 to 250
for ($i = 200; $i <= 250; $i++) {
    // Check if divisible by 5
    if ($i % 5 === 0) {
        echo $i . "\n";
    }
}
?>