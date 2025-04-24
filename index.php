<?php
echo "this is for loop" . "<br>";

for ($i = 0; $i <= 4; $i++) {
    echo "hello world" . '<br>';
}

echo "<br>";

echo "this is while loop" . "<br>";

$j = 0;

while ($j <= 4) {
    echo "hello from while  loop" . "<br>";
    $j++;
}

echo "<br>";

$d = 0;
do {
    echo "Hello from do while loop" . "<br>";
    $d++;
} while ($d <= 5);

echo "<br>";

$indexArray = [10, 50, 78, 98, 45, 24];

foreach ($indexArray as $element) {
    echo $element . " ";
}

$marks = 80;
if ($marks >= 80) {
    echo "the grade is A+";
}

else if ($marks>=70) {
    echo"the grade is A";
}
else if ($marks>=60) {
    echo"the grade is A-";
}

else if ($marks>=50) {
    echo"the grade is B";
}

else if ($marks>=40) {
    echo"the grade is c";
}
else if ($marks>=33) {
    echo"the grade is D";
}
else {
    echo"the grade is F";
}

echo "<br>";

$gradeMarks = [77, 90, 70,60, 40 ];

foreach($gradeMarks As $marks){
    if($marks>=80){
        echo"the grade is A+"."<br>";
    }

    else if ($marks>=70) {
        echo"the grade is A"."<br>";
    }
    else if ($marks>=60) {
        echo"the grade is A-"."<br>";
    }
    
    else if ($marks>=50) {
        echo"the grade is B"."<br>";
    }
    
    else if ($marks>=40) {
        echo"the grade is c"."<br>";
    }
    else if ($marks>=33) {
        echo"the grade is D"."<br>";
    }
    else {
        echo"the grade is F"."<br>";
    }
}

function show(){
   return"hello world from function";
}
$result = show();
echo $result ;

?>