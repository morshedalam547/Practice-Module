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



  $emp=[
    "Morshed"=>[
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
echo "<pre>";
  print_r($emp);
  echo "</pre>";

foreach ($emp as $key => $value) {
    echo "Name: $key <br>";
    foreach ($value as $key1 => $value1) {
        echo "Subject: $key1, Marks: $value1 <br>";
    }
    echo "<br>";
}

$marks2=[ 
    "Morshed"  =>["physics"=> 85,"maths"=> 78,"chemistry"=>89],
    "Nure Alam"=>["physics"=> 85,"match"=> 95,"chemistry"=>79],
     "Al amin" =>["physics"=> 95, "match"=> 96, "chemistry"=>79],
  ];

  foreach($marks2 as $val1){
    foreach($val1 as $key => $val){
      echo "Name: $key, Marks: $val <br>";
    }
  }
$marks2=[ 
    "Morshed"  =>["physics"=> 85,"maths"=> 78,"chemistry"=>89],
    "Nure Alam"=>["physics"=> 85,"match"=> 95,"chemistry"=>79],
     "Al amin" =>["physics"=> 95, "match"=> 96, "chemistry"=>79],
  ];

  foreach($marks2 as $val1){
    foreach($val1 as $key => $val){
      echo "Name: $key, Marks: $val <br>";
    }
  }

echo "<br>";
echo "<br>";



$marks=[ 
    "Morshed"  =>["physics"=> 85,"maths"=> 78,"chemistry"=>89],
    "Nure Alam"=>["physics"=> 85,"match"=> 95,"chemistry"=>79],
     "Al amin" =>["physics"=> 95, "match"=> 96, "chemistry"=>79],
  ];
  foreach($marks as $key => $val1){
   echo $key . " ";
   foreach($val1 as $val2){
    echo  $val2 . " ";
   }
   echo "<br>";
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
  foreach ($marks1 as $key => $value) {
      echo "Name: $key <br>";
      foreach ($value as $key1 => $value1) {
          echo "Subject: $key1, Marks: $value1 <br>";
      }
      echo "<br>";
  }
  
  $marks=[ 
    "Morshed"  =>["physics"=> 85,"maths"=> 78,"chemistry"=>89],
    "Nure Alam"=>["physics"=> 85,"match"=> 95,"chemistry"=>79],
     "Al amin" =>["physics"=> 95, "match"=> 96, "chemistry"=>79],
  ];
  
  echo "<table border='2px' cellpadding='5px' cellspacing='0'>
  <tr>
  <th>Student Name</th>
  <th>physics</th>
  <th>match</th>
  <th>chemistry</th>
  </tr>";
  
  foreach($marks as $key => $v1){
    echo "<tr>
    <td>$key</td>" ;
    foreach($v1 as $v2){
      echo "<td>$v2</td>";
    }
  echo "</tr>";
  }
  echo "</table>";
  
  echo "<br>";
  echo "<br>";
  
  $array=[
    
    
    ["name"=>"Morshed" , "age"=> 25, "city"=>"Dhaka"],
    ["name"=>"Nure Alam" , "age"=> 30, "city"=>"Dhaka"],
    ["name"=>"Al amin" , "age"=> 35, "city"=>"Dhaka"],
    ["name"=>"Mahid" , "age"=> 40, "city"=>"Dhaka"],

  ];


  echo "<pre>";
  print_r($array);
echo "</pre>";
  echo "<br>";
  
  $array=[
    
    
    ["name"=>"Morshed" , "age"=> 25, "city"=>"Dhaka"],
    ["name"=>"Nure Alam" , "age"=> 30, "city"=>"Dhaka"],
    ["name"=>"Al amin" , "age"=> 35, "city"=>"Dhaka"],
    ["name"=>"Mahid" , "age"=> 40, "city"=>"Dhaka"],

  ];


  echo "<pre>";
  print_r($array);
echo "</pre>";



foreach($array as $value){
  echo "Name: " . $value["name"] ."<br>";
}

  
echo "<br>";
echo "<br>";


echo "Math Mark is: ";
$math = (int) readline();

echo "English Mark is: ";
$english = (int) readline();

echo "Bangla Mark is: ";
$bangla = (int) readline();

echo "Arabic Mark is: ";
$arabic = (int) readline();

echo "History Mark is: ";
$history = (int) readline();

function myMark($math, $english, $bangla, $arabic, $history) {
$allMarks = $math + $english + $bangla + $arabic + $history;
$average = $allMarks / 5;


echo "Your Total Marks: $allMarks\\n";
echo "Your Average Marks: $average\\n";

if ($average >= 80) {
    echo "You Have Achieved A+\\n";
} elseif ($average >= 60) {
    echo "You Have Achieved A-\\n";
} else {
    echo "You Are Failed\\n";
}


}

myMark($math, $english, $bangla, $arabic, $history);


