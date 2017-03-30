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
    <?php include_once('include/head.php'); ?>
    <body>
    <body class="bg-primary" style="overflow-x: hidden; margin-top: 200px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mx-auto">
                    <div class="card text-center">
                        <div class="card-header">
                            <h4>Login</h4>
                        </div>
                        <div class="card-block">
                            <div class="form-group">
                                <form name="loginform" id="loginform" action="admin.php" method="post">
                                    <div class="form-group">        
                                        <label for="user_login">Username<br>
                                            <input type="text" name="log" id="user_login" class="form-control" value="" autocomplete="on"></label>
                                    </div>  
                                    <div class="form-group">        
                                        <label for="user_pass">Password<br>
                                            <input type="password" name="pwd" id="user_pass" class="form-control" value="" style="cursor: auto;" autocomplete="on"></label>
                                    </div>  
                                    <div class="form-group">        
                                        <input type="submit" name="submit" id="submit" class="btn btn-primary btn-lg" value="Log In">
                                    </div>        
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

