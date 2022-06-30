<?php

$nums = [1,2,3,44,7,6,5];
$sum = 0;
//echo $nums[3];

foreach($nums as $x)
{
    echo "$x<br />";
    $sum += $x;   
}    
echo "$sum<br />";

foreach($nums as $x)
{
    if ($x>6)
    echo "$x<br />";
}    

// $people = ["Yuri", "Vasya", "Yulia"];
// //Name with Y
// foreach($people as $name) {
//     if (str_starts_with($name,"Y")){
//         echo "$name<br />";
//     }
// }

// $people = [
//     ["Yuri", "Andrienko", 123456],
//     ["Vasya", "Pupkin", 77777],
//     ["Yulia", "Yulkina", 300000]
// ];

// foreach($people as $person){
//     $firstName = $person[0];
//     $lastName = $person[1];
//     $salary = $person[2];
//     echo "$firstName $lastName has salary $salary<br />";
// }

//associativniy massiv:
$people = [
    array("firstName" => "Yuri", "lastName" => "Andrienko", "salary" => 123456),
    array("firstName" => "Vasya", "lastName" => "Pupkin", "salary" => 77777),
    array("firstName" => "Yulia", "lastName" => "Yulkina", "salary" => 300000),
];

    // foreach($people as $person){
    // $firstName = $person["firstName"];
    // $lastName = $person["lastName"];
    // $salary = $person["salary"];
    // echo "$firstName $lastName has salary $salary<br />";
    // }

    echo(json_encode($people));