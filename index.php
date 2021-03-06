<?php
include ('server-info.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Get &amp; Post Requests</title>
        <link rel="stylesheet" href="css/style.min.css">
    </head>
    <body>
        <div class="container">
            <h1>$_SERVER Examples</h1>
            <p>Project repository and changes tracked on <a rel="nofollow" target="_blank" href="https://github.com/devnetkc/lrnPHP" title="lrnPHP PHP Front to Back repository on GitHub">GitHub.</a></p>
            <div class="row">
                <div class="col-12-sm col-6-md col-4-lg col-3-xlg">
                    <div class="container ml-3 my-card">
                        <form>
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
                <div class ="col-12-sm col-6-md col-8-lg col-3-xlg">

                </div>
            </div>
        </div>
        
    </body>
    <footer>
        <script src="js/bootstrap.min.js" defer></script>
    </footer>
</html>