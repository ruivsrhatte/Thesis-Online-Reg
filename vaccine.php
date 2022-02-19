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
<?php require_once "db.php" ?>

<body>
    
    <section class="vh-100 gradient-custom">
        <div id="register" class="container py-5 h-100">
            <div class="row justify-content-center h-100 mb-100">

                <!--
                   VACCINATION
                -->
                <div class="col-12 col-9 col-xl-7">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Vaccine</h3>
            <form class="form-container mx-auto" action="vaccine-handler.php" enctype="multipart/form-data" method="post">

                            <div class="row">
                                <div class="col-md-12 col-lg-12 mb-1 ">
                                    <select name="vaccine" class="select form-control" onchange="showDiv(this)">
                                        <option value="" disabled selected hidden>-- Vaccination--</option>
                                        <option value="Fully Vaccinated">Fully Vaccinated</option>
                                        <option value="Partially Vaccinated">Partially Vaccinated</option>
                                        <option value="Not Vaccinated">Not Vaccinated</option>
                                    </select>
                                </div>
                            </div>

                            <!-- VACCINATION CARD IMAGE START-->
                            <div class="row">
                                <div class="col-md-12  mb-4">
                                    <div class="form-group">
                                        <input name="vacsImage" type="file" style="display: none;" id="vacsImg" class="form-control form-group" accept="image/png, image/gif, image/jpeg/">
                                    </div>
                                    <div class="form-group float-center " id="vacsPreview1" style="display:none">
                                        <object style="margin-left:4%; ">
                                            <img id="vacsPreview" src="img/LOGO-CASAUL1.png" style="border:solid 1px black" width="500" height="300" alt="2X2 ID PIcture" />
                                        </object>
                                    </div>

                                </div>
                            </div>
                            <!-- VACCINATION CARD IMAGE END-->

                            <!-- BUTTON -->
                            <div class="col-12 col-lg-9 col-xl-7">
                                <div class=" shadow-3-strong card-registration mb-5" style="border-radius: 15px;">
                                    <div class=" ">
                                        <a href="index.php" class="btn btn-info btn-md" onClick="document.getElementById('register').scrollIntoView();">
                                            Clear
                                        </a>
                                        <button class="btn btn-primary btn-md" name="enroll" style="background: #980702" type="submit">
                                            Enroll
                                        </button>

                                        <input type="file" id="input" class="dropify" data-default-file="img/id.JPG" />
                                    </div>
                                </div>
                            </div>
                            <!-- END OF BUTTON  -->
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        //TO SHOW THE IMAGE INPUT
        function showDiv(select) {
            if (select.value == "Fully Vaccinated") {

                document.getElementById('vacsImg').style.display = "block";
                document.getElementById("vacsImg").value = "";
                document.getElementById("vacsPreview").src = "img/LOGO-CASAUL1.png";

            } else if (select.value == "Partially Vaccinated") {

                document.getElementById('vacsImg').style.display = "block";
                document.getElementById("vacsImg").value = "";
                document.getElementById("vacsPreview").src = "img/LOGO-CASAUL1.png";

            } else {

                document.getElementById('vacsImg').style.display = "block";
                document.getElementById('vacsPreview1').style.display = "block";
                document.getElementById("vacsImg").value = "";
                document.getElementById("vacsPreview").src = "img/LOGO-CASAUL1.png";

            }
        }
    </script>
    <script>
        //SELECT AN IMAGE
        vacsImg.onchange = evt => {
            const [file] = vacsImg.files
            if (file) {
                vacsPreview.src = URL.createObjectURL(file);
                vacsPreview1.style.display = "block";
            }
        }
    </script>
</body>