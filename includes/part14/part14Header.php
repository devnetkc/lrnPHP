
<?php

// my functions of what he is doing in the video
function isItData( $in, $input ) {
    if( $in ) {
        $var = 'Your name is ';

        switch ($input) {
            case 'GET':
                $var = $_POST['formInputGetName'];
                break;
            case 'POST':
                $var = $_POST['formInputPostName'];
                break;
            default:
                $var = 'Input Not Found';
        }

        $ret = $var;


        // that moment you realize you've just spent 30min trying to find the issue and it was the wrong attr tag ;;
       // $ret = 'Your name is ' . $_POST['formInputName']; 
    } else {
        $ret = 'Please enter your name';
    }
    return $ret;
}