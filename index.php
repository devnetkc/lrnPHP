<?php
include ('includes/functions.php');
include ('includes/part11/server-info.php');

include ('includes/part14/part14Header.php');
   

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Part 14 -- Filters &amp; Validation</title>
        <link rel="stylesheet" href="css/style.min.css">
    </head>
    <body>
        <div class="container">
            <h1>Filters &amp; Validation</h1>
            <p>Project repository and changes tracked on <a rel="nofollow" target="_blank" href="https://github.com/devnetkc/lrnPHP/tree/Part-14-Filters-and-Validation" title="lrnPHP PHP Front to Back repository on GitHub">GitHub.</a></p>
            <div class="row">
                <div class="col-12-sm col-6-md">
                    <div class="container my-card mc1 ml-3 mc1-ml-3">
                        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <div class="form-group">
                                <label for="formInputPostName">
                                    Post Name
                                </label>
                                <input type="text" class="form-control" name="formInputPostName" id="formInputPostName" aria-describedby="emailPrivacyNotice" placeholder="<?php echo isItData( filter_has_var(INPUT_POST, 'formInputPostName' ), 'POST' ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="formInputEmail">
                                    Email address
                                </label>
                                <input type="email" class="form-control" id="formInputEmail" aria-describedby="emailPrivacyNotice" placeholder="Enter email">
                                <small id="emailPrivacyNotice">We'll never share your email with anyone else</small>
                            </div>
                            <div class="form-group">
                                <label for="formInputPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="formInputPassword" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" id="formInputCheck1">
                                <label class="form-check-label" for="formInputCheck1">Select checkmark value</label>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </form>
                    </div>
                </div>
                <div class ="col-12-sm col-6-md">
                    <div class="container ml-3 my-card mc2">
                        <form method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
                            <div class="form-group">
                                <label for="formInputGetName">
                                    Get Name
                                </label>
                                <input type="text" class="form-control" name="formInputGetName" id="formInputGetName" aria-describedby="emailPrivacyNotice" placeholder="<?php echo isItData( filter_has_var(INPUT_GET, 'formInputGetName' ), 'GET' ); ?>">
                            </div>
                            <div class="form-group">
                                <label for="formInputEmail">
                                    Email address
                                </label>
                                <input type="email" class="form-control" id="formInputEmail" aria-describedby="emailPrivacyNotice" placeholder="Enter email">
                                <small id="emailPrivacyNotice">We'll never share your email with anyone else</small>
                            </div>
                            <div class="form-group">
                                <label for="formInputPassword">
                                    Password
                                </label>
                                <input type="password" class="form-control" id="formInputPassword" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input type="checkbox" class="form-check-input" id="formInputCheck1">
                                <label class="form-check-label" for="formInputCheck1">Select checkmark value</label>
                            </div>
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </form>
                    </div>
                

                </div>
            </div>
            <div class="row">
                <div class="col-12-sm col-6-md col-4-lg col-3-xlg"></div>
                <div class ="col-12-sm col-6-md col-8-lg col-3-xlg">

                </div>
            </div>
        </div>
        
    </body>
    <footer>
        <script data-main="js/config" src="node_modules/requirejs/require.js"></script>
        <script>
            require(['config'], function(){
                // add all other required scripts here
                require(['init']);
            });
        </script>
    </footer>
</html>


