<?php 

$dimensional_arrays = [
    [1,2,3,6,7,8],
    [2,3,5,7,84,77],
    [2,3,5,7,84,77],

];
function matrix_diagonal($array){
$sum=0;

    foreach($array as $key => $value){
        for($j=0;$j<count($value);$j++){
            if($key==$j){
                $sum += $value[$j];
            }
        }
       
    }
    return $sum;
}
function matrix_diagonal_2($array){
    $sum = 0;
    $rowCount = count($array);

    for ($i = 0; $i < $rowCount; $i++) {
        for ($j = count($array[$i]) - 1; $j >= 0; $j--) {
            // Check if the current position is on the diagonal from top-right to bottom-left
            if ($i + $j === count($array[$i]) - 1) {
                $sum += $array[$i][$j];
                break;  // Exit the inner loop after adding the diagonal element
            }
        }
    }

    return $sum;
}

$result=matrix_diagonal($dimensional_arrays);
$result_2=matrix_diagonal_2($dimensional_arrays);

echo "đường chéo ma trận: $result";
echo "đường chéo ma trận phải: $result_2";


$assocArray = [
    "fruit" => "apple",
    "color" => "red",
    "price" => 1.5,
];
$assocArray["pinaapple"]= "khóm";
// cách 2
array_push($assocArray,"asdas","new");
foreach($assocArray as $key=>$value){
    echo "Key: $key, Value: $value\n";
}


?>