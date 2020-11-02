<?php 

$page = $_GET['page'];
$searchTerm = $_GET['search'];
$pages = 10;

echo '<h3>Searching for: ' . $searchTerm . '</h3>';
echo '<p>You are on page ' . $page . '</p>';

for ($i = 0; $i <= $pages; $i++){
    echo '<a href="?search=' . $searchTerm . '$page=' . $i . '">' . $i . '</a> ';
}
// require_once 'functions/user.php';

// echo fullName('Dale', 'Ernheart');
// function add() {
//     $total = 0;

//     forEach (func_get_args() as $number){
//         $total += $number;
//     }
//     return $total;
// }
// echo add(5, 10, 10);

// $numbers = [5, 10, 10, 29];

// function add(array $numbers){
//     $total = 0;
//     forEach ($numbers as $number) {
//         $total = $number + $total;
//     }
//     return $total;
// }

// echo add($numbers);

// function fullName($firstName, $lastName) {
//     return $firstName . ' ' . $lastName;
// }

// $fullName = fullName('Jack', 'Skiles');

// echo $fullName;
// $users = [
//     ['name' => 'alex', 'age' => 10],
//     ['name' => 'bob', 'age' => 23332],
// ];

// echo '<pre>', print_r($users), '</pre>';

// $daysInWeek = 6;

// $roomsRequested = 3;
// $roomsAvailable = 3;

// if ($roomsAvailable >= $roomsRequested) {
//     echo 'Enough rooms available';
// } else {
//     echo 'Not enough rooms';
// }
// $name = 'Frank';
// $people = [
//     7 => 'hello',
//     1 => 'no',
// ];

// if (in_array($daysInWeek, array_keys($people))) {
//     echo $people[$daysInWeek];
// } else {
//     echo 'that is not valid';
// }
// echo $people[0]['bill'];
// echo '<h1>' . "hello" . '</h1>';
// echo '<a href="http://www.google.com">Link</a>';