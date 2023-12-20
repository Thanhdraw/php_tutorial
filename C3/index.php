<?php
// mảng 1 chiều
$car = ["Ford", "Lincol", "GM"];
$human = array(
    "1" => [
        "name" => "DangQuocThành",
        "Age" => "22",
        "Ngành" => "CNTT",
    ],
    "2" => [
        "name" => "DangQuocThành",
        "Age" => "22",
        "Ngành" => "CNTT",
    ]
);

foreach ($human as $key => $value) {
    echo "$key<br>";
    foreach ($value as $field => $data) {
        echo "$field: $data\n";
    }
    echo "--------\n";
}
// foreach ($car as $key => $value) {
//     echo "$key is $value <br>  ";
// }

$cars = array(
    array("BMW", "Mercedes", "Audi"),
    array("Toyota", "Honda", "Mitsubitsi"),
    array("Ford", "Lincol", "GM")
);
foreach ($cars as $key => $value) {
    // echo "$value";
}

?>