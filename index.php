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
        <link rel="stylesheet" href="css/style.min.css">
        <?php include ( 'includes/metaTags.php' ); ?>
    </head>
    <body>
        <div class="container">
            <h1>Visitor Log Side Project'</h1>
            <p>Project repository and changes tracked on <a rel="nofollow" target="_blank" href="https://github.com/devnetkc/lrnPHP/tree/add-require-js" title="lrnPHP PHP Front to Back repository on GitHub">GitHub.</a></p>
            <h2 class="h3">The name fields are working again.</h2> 
            <p>Still a lot of unrelated changes to the tutorial taking place right now.</p> 
            <p>Custom msg model work can begin now that requireJS is implimented.</p>
            <p>Return soon, I'm working on a visitor log!</p> 
            <p>Front-end progress made to seperate visitor log idea from lesson area.  More functionality to come soon!</p>
            <div class="row mb-3">
                <div class="col-12 col-md-1 col-lg-2 col-xl-3"></div>
                <div class="col-12 col-md-10 col-lg-8 col-xl-6">
                    <div class="d-flex justify-content-center my-card mc1">

                        <form method="POST" action="includes/visitor-log/addRecord.php">
                            
                                        <div class="d-flex flex-row-reverse align-items-center">
                                            <div class="pl-2">
                                                <button type="submit" class="btn btn-secondary">Sign</button>
                                            </div>
                                            <div class="pl-2 pr-2 visitorLogName-min-len">
                                                <input type="text" class="form-control" name="visitorLogName" id="visitorLogName" aria-describedby="emailPrivacyNotice" placeholder="Welcome Visitor, mark your name here.">
                                            </div>
                                            <div class="pr-2">
                                                <label for="visitorLogName" class="mb-0">
                                                    Visitor Log
                                                </label>
                                            </div>
                                        </div>
                                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                                            <input type="text" name="b_cc3cc6300ab9753ebb2e03df8_92b9c97470" tabindex="-1" value="">
                                        </div>

                        </form>

                    </div>
                </div>
                <div class="col-12 col-md-1 col-lg-2 col-xl-3"></div>
            </div>
            <hr />
            <div class="row mb-3  lessonHeader">
                <div class="container">
                    <div class="d-flex justify-content-between">
                        <div class="col-10">
                            <h2 class="align-middle">Part 14 -- Filters &amp; Validation</h2>
                        </div>
                        <div class="col-2">
                            <img class="construction-image" src="images/working-on-it.gif" alt="construction sign to signify work in progress below">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col"><hr class="constructionBreak"></div>
                <div class="col-auto">Entering Lab Below</div>
                <div class="col"><hr class="constructionBreak"></div>
            </div>
            <div class="row">
                <div class="col-12-sm col-6-md">
                    <div class="container my-card mc2 ml-3 mc2-ml-3">

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
                    <div class="container ml-3 my-card mc3">

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
            </hr>
            <div class="row">
                <div class="col-12-sm col-6-md col-4-lg col-3-xlg"></div>
                <div class ="col-12-sm col-6-md col-8-lg col-3-xlg">

                </div>
            </div>
        </div>
        
    </body>
    <footer>
        <script data-main="js/config" src="node_modules/requirejs/require.js"></script>
        <script src="js/init.js" defer></script>
    </footer>
</html>


