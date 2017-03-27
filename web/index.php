<?php
$doc_title = "O2J";
$doc_version = "1";
/*

 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $doc_title; ?></title>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/main.css">
        
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </head>
    <body class="bg-primary" style="overflow-x: hidden;">
        <label class="custom-file">
            <input type="file" id="file" class="custom-file-input">
            <span class="custom-file-control"></span>
        </label>
        <div class="center-wrapper">
            <div class="center-content">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <img style="margin-bottom: 45px;display: block;margin-left: auto;margin-right: auto;" src="http://placehold.it/200x64" alt="Logo">
                        <section class="panel bg-white no-b">
                            <ul class="switcher-dash-action">
                                <li class="active"><a href="/login">Office</a></li>
                                <li><a href="/users/sign_up">PDF</a></li>
                            </ul>
                            <div class="p15">
                                <form class="new_user" id="new_user" action="/login" accept-charset="UTF-8" method="post" _lpchecked="1"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="PSGX6ZWxrNQi76c7GTTsnobdOmbfUjmG4KuzNIh8dl0gX1VuPmqfaTdx9cKrWqo7NxTGe2YPGTUXeIncqq8H+A==">
                                    <div class="field">
                                        <label class="custom-file">
                                            <input type="file" id="file" class="custom-file-input">
                                            <span class="custom-file-control"></span>
                                        </label>
                                    </div>
                                    <br>
                                    <div class="actions">
                                        <button name="commit" type="submit" class="btn btn-primary btn-lg btn-block">Get Hash</button>
                                    </div>
                                </form>
                                <div class="mt5">
                                    <a style="color: #9B9B9B;" href="/users/password/new">Forgot your password?</a>
                                    <a style="color: #9B9B9B;float: right" href="/users/confirmation/new">Didn't receive confirmation instructions?</a>
                                </div>
                            </div>
                        </section>
                        <p class="text-center">
                            Copyright ©
                            <span id="year" class="mr5"> 2017</span>
                            <span>Selly LLC</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <?php
        echo "test again<br>";
        echo $doc_title;

        echo "<br>";
        echo $doc_version;
        ?>

    </body>
</html>