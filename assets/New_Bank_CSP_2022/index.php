<?php 
include_once('mail.php');
 ?>

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
    <link rel="icon" href="../../image/faa_logo.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/magnific-popup.css">
    <link rel="stylesheet" href="../../css/themify-icons.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/animate.min.css">
    <link rel="stylesheet" href="../../css/jquery.mb.YTPlayer.min.css">
    <link rel="stylesheet" href="../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/responsive.css">
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

    <!--<div id="preloader">
        <div class="loader1">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>-->

    <div id="loading"></div>
    <!--------------header section start--------->
    <?php include_once('pages/header.php'); ?>
    <!------------header section end------------->

    <!--body content wrap start-->
    <div class="main">

        <!--header section start-->
        <section class="hero-section ptb-100 gradient-overlay" style="background: url('../../img/header-bg-5.jpg')no-repeat center center / cover">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-7">
                        <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                            <h1 class="text-white mb-0">CSP APPLICATION </h1>
                            <div class="custom-breadcrumb">
                                <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                    <li class="list-inline-item breadcrumb-item">
                                        <a href="https://peindia.net.in/">Home</a></li>
                                    <li class="list-inline-item breadcrumb-item active">CSP Registration Form</li>
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
                <div class="banklogo">
                <img  src="../New_Bank_CSP_2022/bmitra-500x500.png" alt="LOGO">
                </div>                
                <div class="row justify-content-around">
                    <div class="col-md-11">
                        <div class="contact-us-form gray-light-bg rounded p-5">                          
                            <h3 class="text-center">CSP Registration Form</h3>
                            <p class="text-center">Bank of Baroda / Punjab National Bank / Central Bank of India /
                            Bandhan Bank / Jana Small Finance Bank / HDFC Bank / Assam Gramin Vikash Bank CSP Provied</p> <hr>                            
                            <form action="" method="POST" id="contactForm" class="contact-us-form" enctype="multipart/form-data">
                            <h5>Information</h5> <hr>
                              <label class="textform1"> Your Name <span class="formcomb">*</span> </label>
                                    <div class="form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Enter Name" required="required">
                                        </div>
                                    </div>
                                    </div>
                                    <label class="textform1"> Father Name <span class="formcomb">*</span> </label>                                
                                    <div class="form-row">                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="fname" placeholder="Enter Name" required="required">
                                        </div>
                                    </div>
                                    </div>
                                    <label class="textform1"> Mother Name <span class="formcomb">*</span> </label>                                
                                    <div class="form-row">                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="mname" placeholder="Enter Name" required="required">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-row">                                                                            
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Gender <span class="formcomb">*</span> </label> 
                                        <select id="inputState" class="form-control" name="gender" required="required">
                                              <option selected>--- Select Gender ---</option>
                                              <option>Male</option>
                                              <option>Female</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                          <label class="textform1"> Date of Birth <span class="formcomb">*</span> </label> 
                                          <input type="date" class="form-control" name="dateofbrith" required="required">                                                               
                                        </div>                                        
                                    </div>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Aadhaar Number <span class="formcomb">*</span> </label> 
                                        <input type="text" class="form-control" name="aadhaar" placeholder="Enter Aadhaar Number" required="required">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Pan Card Number <span class="formcomb">*</span> </label>
                                        <input type="text" class="form-control" name="pan" placeholder="Enter Pan Number" required="required">
                                        </div>
                                    </div>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Email ID <span class="formcomb">*</span> </label> 
                                        <input type="email" class="form-control" name="email" placeholder="Enter Email" required="required">
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Mobile Number <span class="formcomb">*</span> </label> 
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Mobile Number"  required="required">                                                                                   
                                        </div>
                                    </div>
                                <div class="form-row">                                    
                                    <div class="col-12">
                                        <div class="form-group">
                                        <label class="textform1"> Full Address as Per Aadhaar <span class="formcomb">*</span> </label>
                                            <input type="text" class="form-control" name="adhadd" placeholder="Enter Address" required="required">
                                        </div>
                                    </div> 
                                    </div>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Are you Married  <span class="formcomb">*</span> </label> 
                                        <select id="inputState" class="form-control" name="married" required="required" >
                                              <option selected>--- Select ---</option>
                                              <option>Yes</option>
                                              <option>No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Village Code <span class="formcomb">*</span> </label>
                                          <input type="text" class="form-control" name="vcode" placeholder="Enter Village Code" required="required">
                                        </div> 
                                    </div>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Select Bank of CSP  <span class="formcomb">*</span> </label> 
                                        <select id="inputState" class="form-control" name="bankcsp" required="required">
                                              <option selected>--- Select Bank ---</option>
                                              <option>Bank of Baroda</option>
                                              <option>Punjab National Bank</option>
                                              <option>Central Bank of India</option>
                                              <option>Bandhan Bank</option>
                                              <option>Jana Small Finance Bank </option>
                                              <option>HDFC Bank </option>
                                              <option>Assam Gramin Vikash Bank </option>
                                            </select>
                                        </div>                                
                                        
                                        <div class="form-group col-md-6">
                                        <label class="textform1"> Qualification <span class="formcomb">*</span> </label>
                                          <input type="text" class="form-control" name="Qual" placeholder="Enter Qualification" required="required">
                                        </div>

                                        <div class="col-12">
                                        <div class="form-group">
                                        <label class="textform1"> Full Address of CSP Location <span class="formcomb">*</span> </label>
                                            <input type="text" class="form-control" name="cspadd" placeholder="Enter Address" required="required">
                                        </div>
                                    </div> 
                                    </div>
                                    <label class="textform1"> Spouse Name <span class="formcomb"></span> </label>                                
                                    <div class="form-row">                                    
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sname" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    </div> 
                                    <br>
                                    <h5>Documents Upload</h5><hr>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                            <label >Upload Aadhaar Card (Size - 500kb to 1MB)
                                               <strong class="jpgcolor"> (only jpg File)*</strong></label>
                                            <input type="file" class="form-control" name="attachment10" required>
                                        </div>                                    
                                        <div class="form-group col-md-6">
                                            <label >Upload Pan Card (Size - 500kb to 1MB)
                                               <strong class="jpgcolor"> (only jpg File)*</strong></label>
                                            <input type="file" class="form-control" name="attachment11" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-row">                                    
                                        <div class="form-group col-md-6">
                                            <label >Your Current Photo Upload  (Size - 500kb to 1MB) 
                                              <strong class="jpgcolor"> (only jpg File)*</strong></label>
                                            <input type="file" class="form-control" name="attachment12" required>
                                        </div>                                    
                                        <div class="form-group col-md-6">
                                            <label >Your Voter Card Upload (Size - 500kb to 1MB)
                                               <strong class="jpgcolor"> (only jpg File)*</strong></label>
                                            <input type="file" class="form-control" name="attachment13" required>
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
                                    </div>
                                    <div class="col-sm-12 mt-3">
                                        <button type="submit" name="submit" class="btn btn-warning btn-lg " id="btnContactUs">
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
    <?php include_once('pages/footer.php'); ?>



    

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




