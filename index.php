<?php
/*
Developer: Ryan Valizan
*/

echo "<h1>You did it!</h1>";

echo "You have a working dev lab and its linked to github, yay!";

// customize where you are going to send visitors or yourself
$thisPage = 'index.php';

function test() {
    echo "error again";
}
?>

<?php // maybe will pretty this up one day ?>
<p>
    <button href="<?php echo $thisPage;?>">What I worked on last</button>
</p>