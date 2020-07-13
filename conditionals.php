<?php
$b = '<br>';
$co = '<h2>Comment Out</h2>';





$num = 5;

if($num == 5) {
    echo '5 passed';
} elseif ($num == 6) {
    echo "$num passed";
} else {
    echo 'did not pass';
}

echo $b;


echo $co;


$num = 5;


if ($num > 4) {
    if($num < 10) {
        echo "$num passed";
    }
}

/*


    Logical operators

    and &&
    or ||
    xor //this is exclusive or


*/

echo $co;

$num = 6;

//AND
echo '<h3>AND</h3>';
    if ($num > 4 AND $num < 10) {
        echo "$num passed";
    }

    echo $b;

//OR
echo '<h3>OR</h3>';
    if ($num > 4 OR $num < 10) {
        echo "$num passed";
    } else {
        echo "fail$b";
    }
echo '<h3>OR-2</h3>';
$num = 2;
    if ($num > 4 OR $num < 10) {
        echo "$num passed";
    } else {
        echo "fail$b";
    }
echo $co;

$selectedColor = 'red';


switch($selectedColor) {
    case 'red':
        echo 'Your selected color is red';
        break;
    case 'blue':
        echo 'Your selected color is blue';
        break;
    case 'green':
        echo 'Your selected color is green';
        break;
    default:
        echo 'You haven\'t selected a color.';
}


// Adding my own function and switch -- with some flair -- to better show what the video was doing
// by changing the value of the $selectedColor variable above.

function carYouDrive ($car) {
    $msg = 'You\'ve selected the vehicle maker: ';
    $notFound = false;

    switch ($car) {
        case 'BMW': 
            $msg .= $car;
        break; 
        case 'Volkswagon':
            $msg .= $car;
        break;
        case 'Chevy':
            $msg .= $car;
        break;
        case 'Honda':
            $msg .= $car;
        break;
        default:
            $notFound = true;
    }

    if ($notFound) {
        $msg = "$car was not found in our database.";
    } else {
        $msg .= '.  Enjoy!' . $b;
    }

    return $msg;
}


echo '<h4>Honda</h4>';
echo carYouDrive('Honda');

echo '<h4>BMW</h4>';
echo carYouDrive('BMW');

echo '<h4>Volkswagon</h4>';
echo carYouDrive('Volkswagon');

echo '<h4>Chevy</h4>';
echo carYouDrive('Chevy');




?>