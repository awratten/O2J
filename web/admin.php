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
    <?php echo file_get_contents('include/head.php'); ?>
    <body>
    <body class="bg-primary" style="overflow-x: hidden; margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-block">
                            <div class="form-group mb30">
                                <form name="loginform" id="loginform" action="admin.php" method="post">
                                    <p>
                                        <label for="user_login">Username<br>
                                            <input type="text" name="log" id="user_login" class="form-control" value="" size="20" autocomplete="off"></label>
                                    </p>
                                    <p>
                                        <label for="user_pass">Password<br>
                                            <input type="password" name="pwd" id="user_pass" class="form-control" value="" size="20" style="cursor: auto;" autocomplete="off"></label>
                                    </p>
                                    <p class="submit">
                                        <input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary btn-large" value="Log In">
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

