<?php


$number =29;
if($number%2 ==0) {
  echo  "<h3> $number This is even number</h3>.";
}

else{
    echo  "<h3> $number This is an odd number </h3>";
}

$indexArray =[34, 22, 44, 55, 99];
for($i=0; $i<=4; $i++){
    echo $indexArray[$i]."<br>";

}

$j =0;

while($j<=4){
    echo $indexArray[$j]."<br>";
    $j++;
}



$k =0;
 do{
    echo $indexArray[$k]."<br>";
    $k++;
}

while($k<=4);

foreach($indexArray as $integeArray){
    echo $integeArray."<br>";
}

$marks =[67,78,23,88,90,23,45,72,11];

foreach($marks as $mark)
    if($mark>=80){
        echo "<h3>$mark= The grade is A+";
    }
    elseif($mark>=70){
        echo "<h3>$mark= The grade is A";
    }
    elseif($mark>=60){
        echo "<h3>$mark= The grade is A-";
    }
    elseif($mark>=50){
        echo "<h3>$mark= The grade is B";
    }
    elseif($mark>=40){
        echo "<h3>$mark= The grade is C";
    }
    elseif($mark>=33){
        echo "<h3>$mark= The grade is D";
    }
    else{
        echo "<h3>$mark= The grade is F";
    }

    $digits =[45,65,87,89,-98,67885];

    //odd or even --- positive or negative 

    foreach($digits as $digit1 )
        if ($digit1 %2 ==0){
            echo "<h5>The number $digit1 is even</h5>";
        }
        else{
            echo "<h5>The number $digit1 is odd</h5>";
        }

    foreach($digits as $digit2)
        if($digit2 >= 0){
            echo "<h4>The number $digit2 is Positive</h4>";
        }   
        else{
            echo "<h4>The number $digit2 is Negative</h4>";
        }

   


?>