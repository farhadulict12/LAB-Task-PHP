<?php
function combineArrays($array1, $array2) {
    // Initialize new array
    $newArray = [];
    
    // Combine elements
    for ($i = 0; $i < 3; $i++) {
        $newArray[] = $array1[$i] + $array2[$i];
    }
    
    return $newArray;
}
?>
<?php
// Example usage
$array1 = [1, 2, 3];
$array2 = [4, 5, 6];
$newArray = combineArrays($array1, $array2);
echo "New array: ";
print_r($newArray);
?>