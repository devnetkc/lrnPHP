define (['jquery'], function ($) {
    var methods = {};

    //
    // EXAMPLE METHODS
    //
    
        methods.changeHTML = function (arg1, arg2) {
            $(arg1).html(arg2);
        }

        methods.showAlert = function (arg) {
            alert(arg);
        }
    

    return methods;
})