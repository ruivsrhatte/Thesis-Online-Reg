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
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <TITLE>DRLCIFI - Registration Form</TITLE>
</head>
<?php require_once "db.php";
session_start();
if (isset($_POST["login"])) {
    $StdNumber = mysqli_real_escape_string($con, trim($_POST['stdNo']));

    $sql = mysqli_query($con, "SELECT `StdNumber`, `Scholarship`, `ContactNumber`, `SY`, `Sem`, `YearLevel`, `Block`, `Course` FROM `student` where StdNumber = '$StdNumber'");
    $count = mysqli_num_rows($sql);


    if ($count > 0) {
        $fetch = mysqli_fetch_assoc($sql);
        if ($fetch["StdNumber"] == $StdNumber) {
            
            $scholarship = $fetch["Scholarship"];
            $contactNo = $fetch["ContactNumber"];
            $sy = $fetch["SY"];
            $sem = $fetch["Sem"];
            $year = $fetch["YearLevel"];
            $block = $fetch["Block"];
            $course = $fetch["Course"];

            $_SESSION['scholarship'] = $scholarship;
            $_SESSION['contactNo'] = $contactNo;
            $_SESSION['sy'] = $sy;
            $_SESSION['sem'] = $sem;
            $_SESSION['year'] = $year;
            $_SESSION['block'] = $block;
            $_SESSION['course'] = $course;


            $_SESSION['stdNo'] = $StdNumber;
            header("Location: old-student.php");
        } else {
            echo "It seems like you are already";
        }
    }
}
?>

<body>
    <section class="vh-100 gradient-custom ">
        <div id="register" class="container py-5 h-100">
            <div class="row justify-content-center align-items-center h-100 mb-100">
                <div class="col-12 col-lg-9 col-xl-7 mb-3">
                    <div class="card shadow-3-strong card-registration" style="border-radius: 15px;">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Old Student</h3>
                            <form name="loginform" id="loginform" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-light form-control-lg" name="stdNo" id="username" placeholder="Student No." required>
                                    <i class="bi bi-eye-slash" id="toggleEmail"></i>
                                    <span></span>
                                </div>

                                <div class="py-3 pb-4 h-100">
                                    <button type="submit" name="login" class="btn btn-primary btn-lg btn-block" style=" background: #980702">Login</button>
                                </div>
                                <div class="col text-center">
                                    <p style="color: gray;" class="label label-info">Don't have a Student No?</p><a href="index.php" class="btn btn-primary btn-lg">Enroll as New Student</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>