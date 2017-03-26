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
        <title><?php echo $doc_title; ?></title>

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/css/main.css">

    </head>
    <body>

        <div class="container" style="margin-top: 20px;">
            <div class="row">

                <div class="col-lg-6 col-sm-6 col-12">
                    <div class="jumbotron">
                        <h1>Bootstrap File Input Demo</h1>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6 col-12">
                    <h4>Standard Button</h4>
                    <label class="btn btn-primary">
                        Browse&hellip; <input type="file" style="display: none;">
                    </label>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <h4>Block-level Button
                        <label class="btn btn-block btn-primary">
                            Browse&hellip; <input type="file" style="display: none;">
                        </label>
                </div>

                <div class="col-lg-6 col-sm-6 col-12">
                    <h4>Button Groups</h4>
                    <div class="btn-group">
                        <a href="#" class="btn btn-default">Action 1</a>
                        <a href="#" class="btn btn-default">Action 2</a>
                        <label class="btn btn-primary">
                            Browse&hellip; <input type="file" style="display: none;">
                        </label>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-12">
                    <h4>Input Groups</h4>
                    <div class="input-group">
                        <label class="input-group-btn">
                            <span class="btn btn-primary">
                                Browse&hellip; <input type="file" style="display: none;" multiple>
                            </span>
                        </label>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <span class="help-block">
                        Try selecting one or more files and watch the feedback
                    </span>
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