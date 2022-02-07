<head>
    <link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <link href="css/registration.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


    <TITLE>DRLCIFI - Registration Form</TITLE>
</head>

<!--
    <form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
        <label>Upload Image File:</label><br />
        <input name="studentNumber" type="text" required />
        <input name="userImage" type="file" class="inputFile" />
        <input type="submit" value="Submit" class="btnSubmit" />
    </form>
    </div>
-->
<?php require_once "db.php" ?>

<body>
    <section class="vh-100 gradient-custom ">
        <div id="register" class="container-fluid h-100">
            <div class="row justify-content-center align-items-center h-100 mb-100">
                <div class="col-12 col-lg-9 col-xl-7 mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">

                            <?php
                            session_start();

                            if (isset($_SESSION['status'])) {
                            ?>
                                <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                                    <h2 class=" mt-3 pb-2 pb-md-0  text text-success  card-title"> <?= $_SESSION['status']; ?> </h2>
                                </div>
                            <?php
                                unset($_SESSION['status']);
                            } else if (isset($_SESSION['exist'])) {
                            ?>
                                <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                    <h2 class=" mt-3 pb-2 pb-md-0 text text-success  card-title"> <?= $_SESSION['exist']; ?> </h2>

                                </div>
                            <?php
                                unset($_SESSION['exist']);
                            }

                            ?>
                            <div class="text-center card-footer" <p class="r">
                                <b class="">NOTE:</b> <br>This is just a pre-registration.
                                To be officially enrolled, please present your 
                                <br>
                                <b>QR ID</b> 
                                at the accounting office of
                                <br>
                                <b>Dr. Ruby Lanting Casaul Educational Foundation, Inc.</b>
                                located at
                                <br>
                                <b>Tomas Cabiles St., San Juan Tabaco City for further process.</b>
                                <br>
                                Thank you!
                                </p>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="alert"><a class="text text-light" href="index.php">Exit</a></button>                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
<!-- END OF BUTTON  
<script>
$(document).ready(function(){
    $("a.btn").click(function(){
        var datastring = $("#personalInfo").serialize();
        datastring +="&" + $("#otherInfo").serialize();
        datastring +="&" + $("#parents").serialize();
        datastring +="&" + $("#educHistory").serialize();
        $.ajax({
            type: "POST",
            url: "index.php",
            data: datastring,
            success: function(data) {
                
            },
            error: function() {
                alert('error handing here');
            }
        });
    });
});

</script>
-->