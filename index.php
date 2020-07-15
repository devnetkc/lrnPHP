<?php
/*
Developer: Ryan Valizan
*/

echo "<h1>You did it!</h1>";

echo "You have a working dev lab and its linked to github, yay!";

// testing wakatime
// wakatime picked up project as html
// wakatime now picking up project as lrnlab because that is git repo parent dir

// customize where you are going to send visitors or yourself
$thisPage = 'index.php';

function test() {
    echo "error again";
}
?>

<?php // maybe will pretty this up one day ?>
<p>
    <button><a href="<?php echo $thisPage;?>">What I worked on last</a></button>
</p>