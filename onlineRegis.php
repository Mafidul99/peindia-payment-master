<?php include('onlineRegisForm.php'); ?>
<!doctype html>
<html lang="en">
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="peindia Assam">
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />
    <link rel="icon" href="image/faa_logo.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <title>Peindia API - Website Design & Development | Software & App Development </title>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body onload="myFunction()">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-197537214-1"></script>
    <script src="../ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

    
    <!--------------header section start--------->

    <?php include('pages/header.php'); ?>

    <!------------header section end------------->

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay" style="background: url('img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">Online Registration Form</h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item">
                                        <a href="https://peindia.net.in/">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">Online Registration Form</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--header section end-->        
        <!--contact us promo end-->

        <!--contact us section start-->
        <section class="contact-us-section ptb-70">
            <div class="container contact">
                <div class="col-12 pb-3 message-box d-none">
                    
                </div>
                <div class="row justify-content-around">
                    <div class="col-md-9">
                        <div class="contact-us-form gray-light-bg rounded p-5">
                            <h3 class="text-center">Online Registration Form</h3>
                            <P class="text-center">Peindia Payments Retailer ID Free</P>
                            <form action="" method="POST" id="contactForm" class="contact-us-form" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="required">
                                        </div>
                                    </div>
                                </div>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="phone" placeholder="Enter Mobile Number" required="required">
                                        </div>                                    
                                        <div class="form-group col-md-6">
                                            <input type="email" class="form-control" name="email" placeholder="Enter Email" required="required">
                                        </div>
                                    </div>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="aadhaar" placeholder="Enter Aadhaar Number" required="required">
                                        </div>                                    
                                        <div class="form-group col-md-6">
                                            <input type="text" class="form-control" name="pan" placeholder="Enter Pan Number" required="required">
                                        </div>
                                    </div>
                                <div class="form-row">                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="add" placeholder="Enter Address" required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                            <label >Upload Aadhaar Card <strong class="jpgcolor"> (only jpg File)</strong></label>
                                            <input type="file" class="form-control" name="attachment" required>
                                        </div>                                    
                                        <div class="form-group col-md-6">
                                            <label >Upload Pan Card <strong class="jpgcolor"> (only jpg File)</strong></label>
                                            <input type="file" class="form-control" name="attachment2" required>
                                        </div>
                                    </div>
                                     <br>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                            <label class="form-check-label" for="gridCheck">
                                            I have read and agree to 
                                            <a class="linktext" href="terms_and_condition.php" target="_blank">Terms & Conditions</a>
                                            </label>
                                            </div>
                                        </div>                                                                       
                                        <div class="form-group col-md-6">
                                        <div class="g-recaptcha" data-sitekey="6LcImc4eAAAAAIcK4nuyCvW5DTvJy3DlcHW2Geh-" required></div>
                                        </div>                                        
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" name="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                        Submit
                                    </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us section end-->
    </div>
    <!--body content wrap end-->
    <?php include('pages/footer.php'); ?>





    <!--Registration Form  Code Menu-->
    
<script>
    if(window.history.replaceState){
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    ?>
        <script>            
            Swal.fire({
            position: 'top-end',
            toast: true,
            icon: '<?php echo $_SESSION['status_code']; ?>',            
            //title: 'Thank you !',
            text: "<?php echo $_SESSION['status']; ?>",
            showConfirmButton: false,
            timer: 7000
            })
        </script>        
    <?php
    unset($_SESSION['status']);
}
?>




