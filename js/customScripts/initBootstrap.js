// This custom JS file is necessary to fix the popper.js issue
// from using bootstrap and requirejs.
//
// For now, this file doesn't really do anything other than 
// load bootstrap.js and give us a place to enter custom bootstrap 4 functions

// Got help on this issue from stackoverflow
// https://stackoverflow.com/questions/46004087/issue-loading-popperjs-and-bootstrap-via-requirejs-even-after-using-recommended

// Create a new definition to initate bootstrap using our requirejs popper definition
define("initBootstrap", ["popper"], function(popper) {

    // set popper as required by Bootstrap
    // did not know there was a popper variable, thanks stackoverflow
    window.Popper = popper;
    console.log('initBootstrap was defined');

    require(["bootstrap"], function(bootstrap) {
        // do nothing - just let Bootstrap initialise itself
        console.log('bootstrap was required and loaded');
    });
    
});