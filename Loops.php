<?php

for ($i = 0; $i <= 10; $i++){
    echo "$i <br>";
}

echo " =================Array================<br>";

$number = [4,5,6,8,34,98,67];

$person = [
    "username" => "Talha",
    "age" => 21,
    "cnic" => 6756541544643,
    "designation" => "Software Engineer"
];

foreach ($number as $val){
    echo "$val <br>";
}

foreach ($person as $key => $val){
    echo "$key ======> $val <br>";
}