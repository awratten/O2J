<?php
$doc_title = "Office2John Online";
$doc_version = "1";
$filter_hash = "";
$error = "";

/* Office2John.online
 * 
 * Version 0.4 Beta
 * 
 * Created by Anthony Wratten
 * 29th March 2017
 * 
 * PHP5 , Apache2 , Bootstrap 4 , clipboard.js
 * 
 * TODO: 
 *  - Add MySQL database
 *  - Better looking Download Section
 *  - PDF Support Section
 */
?>
<?php
if (isset($_GET['hash'])) {
    $filter_hash = filter_input(INPUT_GET, 'hash', FILTER_SANITIZE_STRING);
}
if (isset($_GET['error'])) {
    $error = filter_input(INPUT_GET, 'error', FILTER_SANITIZE_STRING);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $doc_title; ?></title>

        <link rel="apple-touch-icon" sizes="180x180" href="favicon//apple-touch-icon.png">
        <link rel="icon" type="image/png" href="favicon//favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="favicon//favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="favicon//manifest.json">
        <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">

        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="/css/main.min.css">

        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <?php include_once("analyticstracking.php") ?>

        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head> <!-- Head Section END -->
    <body class="bg-primary" style="overflow-x: hidden; margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    
                    <div id="logo">
                        <a href="/index.php"><img class="logo-img" src="img/o2j_logo.svg" alt="Logo"></a>
                    </div> <!-- Logo Section END -->
                    
                    <div class="card text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#" onclick="ga('send', 'event', 'button', 'click','DOC_button');">MS Office</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="#">
                                        <i class="fa fa-file-pdf-o" aria-hidden="true" onclick="ga('send', 'event', 'button', 'click','PDF_button');"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#DownloadModal" onclick="ga('send', 'event', 'button', 'click','Download_Button');">
                                        <i class="fa fa-download" aria-hidden="true"></i>&nbsp;Downloads
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="modal" data-target="#HelpModal" onclick="ga('send', 'event', 'button', 'click','Help_Modal');">
                                        <i class="fa fa-question" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> <!-- Top Nav END -->
                        
                        <div class="card-block">
                            <form action="get_hash.php" method="post" enctype="multipart/form-data">
                                <div class="form-group mb30">
                                    <h4>Choose file to extract hash</h4>
                                </div>
                                <?php
                                if ($error) {
                                    echo "<div class='form-group alert alert-danger'> <strong>Error: </strong>" . $error . "</div>";
                                }
                                ?>
                                <div class="form-group mb30">
                                    <a href="#" onclick="$('#file-label').click()">
                                        <img src="img/cloud-hash.svg" style="height:80px;">
                                    </a>
                                </div>
                                <div class="form-group mb30">
                                    <label id="file-label" class="custom-file text-left mb30">
                                        <input type="file" id="upload" name="upload" class="custom-file-input" accept=".pdf, .doc, .docx ,application/msword, .xls, .xlsx, application/vnd.ms-excel, .ppt , .pptx, application/vnd.ms-powerpoint" required="true" onchange="this.form.submit()">
                                        <span class="custom-file-control"></span>
                                    </label>
                                    <p>File size limit : <?php echo ini_get('upload_max_filesize') . 'b'; ?></p>
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary btn-block" onclick="ga('send', 'event', 'button', 'click','Submit_office');">Extract Hash</button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="HashModal" tabindex="-1" role="dialog" aria-labelledby="HashModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Extracted Hash</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- Target -->
                                    <textarea id="hashTextArea" rows="4" style="width:100%;"><?php echo $filter_hash; ?></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-clipboard-target="#hashTextArea">Copy</button>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Hash Modal END -->
                    
                    <div class="modal fade" id="HelpModal" tabindex="-1" role="dialog" aria-labelledby="HelpModal" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Help</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>
                                    <strong>Office2John.online</strong> extracts
                                    the cryptographic hash from Microsoft Office
                                    Files. The extracted hash is ready to be 
                                    inserted into password cracking tools such 
                                    as Hashcat or John the Ripper.
                                    </p>
                                    <a class="nav-link text-center" href="downloads/Office_Hashcat_Tutorial.pdf" target="_BLANK">
                                        <h3><i class="fa fa-file-pdf-o"></h3></i>
                                        Tutorial
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Help Modal END -->
                    
                    <div class="modal fade" id="DownloadModal" tabindex="-1" role="dialog" aria-labelledby="DownloadModal" aria-hidden="true">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Downloads</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <ul class="nav justify-content-center">
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="downloads/O2J.txt" download onclick="ga('send', 'event', 'button', 'click','Down_O2J.txt');">
                                                <h3><i class="fa fa-file-o"></i></h3>
                                                O2J Wordlist
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="downloads/o2j.hcmask" download onclick="ga('send', 'event', 'button', 'click','Down_O2J.mask');">
                                                <h3><i class="fa fa-file-o"></i></h3>
                                                O2J Mask
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="downloads/hash/" target="_BLANK" onclick="ga('send', 'event', 'button', 'click','Show_Hash_Dir');">
                                                <h3><i class="fa fa-folder-open-o"></i></h3>
                                                Uncracked Hashs
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link text-center" href="downloads/Office_Hashcat_Tutorial.pdf" target="_BLANK" onclick="ga('send', 'event', 'button', 'click','Down_TUT.pdf');">
                                                <h3><i class="fa fa-file-pdf-o"></h3></i>
                                                Tutorial
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Download Modal END -->
                    
                    <div class="text-center" style="color:white;margin-top: 30px">
                        Help keep this site free. Donate BTC:
                       <span>18axSD6K5mwy9uwvRc9zuiiFZxnkGAWK4</span>
                    </div> <!-- Donate Section END -->
                </div>
            </div>
        </div>
        
        <?php 
        if ($filter_hash) {
            echo "<script type = 'text/javascript'>";
            echo "$(document) . ready(function () {";
            echo "$('#HashModal') . modal('show');";
            echo "});";
            echo "</script>";
        }
        ?>
        
        <script src="js/clipboard.min.js" type="text/javascript"></script>
        <script>
            var clipboard = new Clipboard('.btn');
            clipboard.on('success', function (e) {
                console.log(e);
            });
            clipboard.on('error', function (e) {
                console.log(e);
            });
        </script>
    </body>
</html>
