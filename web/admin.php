<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
$doc_title = "Admin Login";
?>
<html>
    <?php file_get_contents('include/head.php'); ?>
    <body>
    <body class="bg-primary" style="overflow-x: hidden; margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card text-center">
                        <div class="card-header">

                        </div>
                        <div class="card-block">
                            <div class="form-group mb30">
                                <h4>Login</h4>
                            </div>
                            <div class="form-group mb30">
                                <form method="post" action='' name="login_form">
                                    <p><input type="text" class="span3" name="eid" id="email" placeholder="Email"></p>
                                    <p><input type="password" class="span3" name="passwd" placeholder="Password"></p>
                                    <p><button type="submit" class="btn btn-primary">Sign in</button>
                                        <a href="#">Forgot Password?</a>
                                    </p>
                                </form>
                            </div>
                            <div class="form-group mb30">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>