
<?php

// my functions of what he is doing in the video
function isItData( $in ) {
    if( $in ) {
        // that moment you realize you've just spent 30min trying to find the issue and it was the wrong attr tag ;;
        $ret = 'Your name is ' . $_POST['formInputName']; 
    } else {
        $ret = 'Please enter your name here';
    }
    return $ret;
}