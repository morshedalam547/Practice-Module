<?php

$colors = array("red", "green", "blue", "yellow" , "black", "white");

foreach ($colors as $value) {
    echo "$value <br>";
}

echo $colors[0] . "<br>";
echo $colors[1] . "<br>";
echo $colors[2];

echo "<br>";
echo "<br>";
for($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . "<br>";
}

$colors=["white","blue","Yellow", "Black" ,"Yellow", "Black"];
echo "<ul>";
for($i=0; $i <=5;$i++){
  echo "<li>$colors[$i] </li>";
}
echo "</ul>";


echo "<br>";
echo "<br>";
$colors[1] = "pink";
$colors[2] = "purple";
array_unshift($colors);

foreach ($colors as $value) {
    echo "$value <br>";
}

$colors_count= count($colors);

echo "<br>";
echo "<br>";

$marks =["philosophy"=> 80, "math"=> 90, "english"=> 70, "science"=> 85, "social science"=> 75];

foreach ($marks as $key => $value) {
    echo "Subject: $key, Marks: $value <br>";
}

echo "<br>";
echo "<br>";

$marks1 = [
     "Morshed" => ["philosophy"=> 80, "math"=> 90, "english"=> 70, "science"=> 85, "social science"=> 75],
     "Rahim" => ["philosophy"=> 70, "math"=> 80, "english"=> 60, "science"=> 75, "social science"=> 65],
        "Karim" => ["philosophy"=> 60, "math"=> 70, "english"=> 50, "science"=> 65, "social science"=> 55]
];

foreach ($marks1 as $key => $value) {
    echo "Name: $key <br>";
    foreach ($value as $key1 => $value1) {
        echo "Subject: $key1, Marks: $value1 <br>";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";


$emp=[
    [
      "id"=> 1,
      "Name"=> "Morshed",
      "designation"=> "Manager",
      "salary" => 50000,
    ],
     [
      "id"=> 2,
      "Name"=> "Nure alam",
      "designation"=> "DMD",
      "salary" => 70000,
    ],
     [
      "id"=> 3,
      "Name"=> "Al amin",
      "designation"=> "MD",
      "salary" => 90000,
    ],
  
     [
      "id"=> 4,
      "Name"=> "Mahid",
      "designation"=> "Chairman",
      "salary" => 100000,
    ],
  ];
  echo "<table border='1px'cellpadding='5px' cellspacing='0px'>
  <tr>
  <th>Id</th>
  <th>Name</th>
  <th>Designation</th>
  <th>salary</th>
  </tr>";
  foreach ($emp as list ( "id"=> $id,"Name"=>$name,"designation"=>$designation,"salary"=>$salary)){
    echo "<tr><td>$id</td> <td>$name</td> <td>$designation</td> <td>$salary</td></tr>";
  }
  echo "</table>";
  
  echo "<br>";
  echo "<br>";