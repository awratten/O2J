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

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    </head>
    <body class="bg-primary" style="overflow-x: hidden;">

        <div class="center-wrapper">
            <div class="center-content">
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <img style="margin-bottom: 45px;display: block;margin-left: auto;margin-right: auto;" src="/assets/logo-e160685033dac25d7ef1f5c24a745658.png" alt="Logo">
                        <section class="panel bg-white no-b">
                            <ul class="switcher-dash-action">
                                <li class="active"><a href="/login">Log in</a></li>
                                <li><a href="/users/sign_up">New account</a></li>
                            </ul>
                            <div class="p15">
                                <form class="new_user" id="new_user" action="/login" accept-charset="UTF-8" method="post" _lpchecked="1"><input name="utf8" type="hidden" value="✓"><input type="hidden" name="authenticity_token" value="PSGX6ZWxrNQi76c7GTTsnobdOmbfUjmG4KuzNIh8dl0gX1VuPmqfaTdx9cKrWqo7NxTGe2YPGTUXeIncqq8H+A==">
                                    <div class="field">
                                        <label for="user_email">Email</label><br>
                                        <span class="ti-user" style="position: absolute; margin-top: 16px; margin-left: 13px; color: #cccccc;"></span>
                                        <input autofocus="autofocus" class="form-control input-lg" placeholder="Email Address" style="padding-left: 34px; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAABHklEQVQ4EaVTO26DQBD1ohQWaS2lg9JybZ+AK7hNwx2oIoVf4UPQ0Lj1FdKktevIpel8AKNUkDcWMxpgSaIEaTVv3sx7uztiTdu2s/98DywOw3Dued4Who/M2aIx5lZV1aEsy0+qiwHELyi+Ytl0PQ69SxAxkWIA4RMRTdNsKE59juMcuZd6xIAFeZ6fGCdJ8kY4y7KAuTRNGd7jyEBXsdOPE3a0QGPsniOnnYMO67LgSQN9T41F2QGrQRRFCwyzoIF2qyBuKKbcOgPXdVeY9rMWgNsjf9ccYesJhk3f5dYT1HX9gR0LLQR30TnjkUEcx2uIuS4RnI+aj6sJR0AM8AaumPaM/rRehyWhXqbFAA9kh3/8/NvHxAYGAsZ/il8IalkCLBfNVAAAAABJRU5ErkJggg==&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" type="email" value="" name="user[email]" id="user_email" autocomplete="off">
                                    </div>
                                    <br>
                                    <div class="field">
                                        <label for="user_password">Password</label><br>
                                        <span class="ti-lock" style="position: absolute; margin-top: 16px; margin-left: 13px; color: #cccccc;"></span>
                                        <input autocomplete="off" class="form-control input-lg" placeholder="Password" style="padding-left: 34px; background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAACIUlEQVQ4EX2TOYhTURSG87IMihDsjGghBhFBmHFDHLWwSqcikk4RRKJgk0KL7C8bMpWpZtIqNkEUl1ZCgs0wOo0SxiLMDApWlgOPrH7/5b2QkYwX7jvn/uc//zl3edZ4PPbNGvF4fC4ajR5VrNvt/mo0Gr1ZPOtfgWw2e9Lv9+chX7cs64CS4Oxg3o9GI7tUKv0Q5o1dAiTfCgQCLwnOkfQOu+oSLyJ2A783HA7vIPLGxX0TgVwud4HKn0nc7Pf7N6vV6oZHkkX8FPG3uMfgXC0Wi2vCg/poUKGGcagQI3k7k8mcp5slcGswGDwpl8tfwGJg3xB6Dvey8vz6oH4C3iXcFYjbwiDeo1KafafkC3NjK7iL5ESFGQEUF7Sg+ifZdDp9GnMF/KGmfBdT2HCwZ7TwtrBPC7rQaav6Iv48rqZwg+F+p8hOMBj0IbxfMdMBrW5pAVGV/ztINByENkU0t5BIJEKRSOQ3Aj+Z57iFs1R5NK3EQS6HQqF1zmQdzpFWq3W42WwOTAf1er1PF2USFlC+qxMvFAr3HcexWX+QX6lUvsKpkTyPSEXJkw6MQ4S38Ljdbi8rmM/nY+CvgNcQqdH6U/xrYK9t244jZv6ByUOSiDdIfgBZ12U6dHEHu9TpdIr8F0OP692CtzaW/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%;" type="password" name="user[password]" id="user_password">
                                    </div>
                                    <br>
                                    <div class="field">
                                        <label><input name="user[remember_me]" type="hidden" value="0"><input type="checkbox" value="1" name="user[remember_me]" id="user_remember_me"> <span class="label-text">Remember me</span>
                                        </label>
                                    </div>
                                    <div style="text-align:center;margin-left:auto;margin-right:auto;width: 304px;">
                                        <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                                        <div data-sitekey="6LdtagMTAAAAAML2ZhXuuDxZ-PQcvAlbNqsnd3Oz" class="g-recaptcha "><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LdtagMTAAAAAML2ZhXuuDxZ-PQcvAlbNqsnd3Oz&amp;co=aHR0cHM6Ly9zZWxseS5nZzo0NDM.&amp;hl=en&amp;v=r20170315121834&amp;size=normal&amp;cb=nv4lh6pmd2lo" title="recaptcha widget" width="304" height="78" frameborder="0" scrolling="no" name="undefined"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
                                    </div>
                                    <br>
                                    <div class="actions">
                                        <button name="commit" type="submit" class="btn btn-primary btn-lg btn-block" data-disable-with="<div class=&quot;loading&quot;></div">Sign in</button>
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