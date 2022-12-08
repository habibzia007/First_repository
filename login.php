<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
            integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
            crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"
            integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
          integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous"/>
    <link href="bootstrap.min.css">
    <link href="font-awesome.min.css">
    <link href="bootstrap.bundle.min.js">
    <link href="jquery-3.3.1.slim.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,600;1,200;1,400;1,600&display=swap"
            rel="stylesheet">
    <!--    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->
    <!--    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">-->
    <!--    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">-->
    <title>Login-RoziKaAdda</title>
    <style>
        section.sec-1 {
            background: rgb(105, 105, 190);
            background: linear-gradient(90deg, rgba(105, 105, 190, 1) 8%, rgba(169, 168, 140, 1) 34%, rgba(84, 186, 164, 1) 59%, rgba(220, 161, 167, 1) 89%);
            /*height: 75px !important;*/
        }

        img.sec-img-1 {
            width: 180px;
        }

        button.sec-btn-1 {
            border-radius: 19px;
            font-size: 17px;
        }

        button.sec-btn-1:hover {
            background-color: transparent;
            font-weight: 500;
            color: black;
            border: 1px solid deepskyblue;
        }

        nav {
            background-color: #c9474a;
        }

        a.navbar-logo {
            font-size: 19px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        a.sec-2:hover {
            color: blue !important;
            cursor: pointer;
        }

        div.sec-3-row {
            margin-right: calc(0 * var(--bs-gutter-x));
            margin-left: calc(-1.5 * var(--bs-gutter-x));
        }

        .carousel-item {
            height: 83.5vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            /*margin-top: 3%;*/
            padding: 3%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            margin-top: 4%;
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        input.form-control {
            margin-bottom: 10px;
            border-top: none;
            border-bottom: 1px solid deepskyblue;
            border-right: none;
            border-left: none;
        }

        select.form-control {
            border-top: none;
            border-bottom: 1px solid deepskyblue;
            border-right: none;
            border-left: none;
            margin-bottom: 10px;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .btnRegister:hover {
            float: right;
            margin-top: 10%;
            border: 1px solid #0062cc;
            border-radius: 1.5rem;
            padding: 2%;
            background: transparent;
            color: #0062cc;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }
        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }

        .deneb_footer .widget_wrapper {
            background-repeat: no-repeat;
            background-size: cover;
            padding-top: 200px;
            padding-bottom: 70px;
        }

        @media (max-width: 767px) {
            .deneb_footer .widget_wrapper .widget {
                margin-bottom: 40px;
            }
        }

        .deneb_footer .widget_wrapper .widget .widget_title {
            margin-bottom: 30px;
        }

        .deneb_footer .widget_wrapper .widget .widget_title h4 {
            font-weight: bold;
        }

        .deneb_footer .widget_wrapper .widget .widget_title h4:after {
            content: "";
            display: block;
            background: url(../images/shape/line.png) no-repeat;
            max-width: 38px;
            height: 2px;
            margin-top: 5px;
        }

        .deneb_footer .widget_wrapper .widegt_about p {
            margin-bottom: 20px;
        }

        .deneb_footer .widget_wrapper .widegt_about .social li {
            display: inline-block;
            margin-right: 10px;
        }

        .deneb_footer .widget_wrapper .widegt_about .social li a {
            display: block;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            background-color: #f9e6d4;
            color: #fba543;
            font-size: 14px;
            -webkit-transition: all all 0.5s ease-out 0s;
            -moz-transition: all all 0.5s ease-out 0s;
            -ms-transition: all all 0.5s ease-out 0s;
            -o-transition: all all 0.5s ease-out 0s;
            transition: all all 0.5s ease-out 0s;
        }

        .deneb_footer .widget_wrapper .widegt_about .social li a:hover,
        .deneb_footer .widget_wrapper .widegt_about .social li a:focus {
            background-image: -moz-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
            background-image: -webkit-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
            background-image: -ms-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
            color: #fff;
            box-shadow: 2.5px 4.33px 15px 0px rgba(254, 176, 0, 0.4);
        }

        .deneb_footer .widget_wrapper .widget_link ul li {
            margin-bottom: 5px;
        }

        .deneb_footer .widget_wrapper .widget_link ul li a {
            text-transform: capitalize;
            color: #7a808d;
        }

        .deneb_footer .widget_wrapper .widget_link ul li a:hover,
        .deneb_footer .widget_wrapper .widget_link ul li a:focus {
            color: #feb000;
        }

        .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info {
            max-width: 250px;
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 20px;
        }

        .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .icon {
            font-size: 12px;
            color: #feb000;
            margin-right: 10px;
        }

        .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p a {
            color: #7a808d;
        }

        .deneb_footer .widget_wrapper .widget_contact .contact_info .single_info .info p span {
            display: block;
        }

        .deneb_footer .copyright_area {
            background: #edecf0;
            padding: 10px 0;
        }

        .deneb_footer .copyright_area .copyright_text {
            text-align: center;
        }

        .deneb_footer .copyright_area .copyright_text p {
            color: #011a3e;
        }

        .deneb_footer .copyright_area .copyright_text p span {
            color: #feb000;
        }

        .deneb_cta .cta_wrapper {
            padding: 45px 50px 42px;
            max-width: 970px;
            border-radius: 15px;
            margin: auto;
            margin-bottom: -135px;
            position: relative;
            background-image: -moz-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
            background-image: -webkit-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
            background-image: -ms-linear-gradient(0deg, #ffbd27 0%, #feb000 100%);
            box-shadow: 2.5px 4.33px 15px 0px rgba(254, 176, 0, 0.4);
            z-index: 1;
        }

        .deneb_cta .cta_wrapper:after {
            content: "";
            background: url(../images/shape/cta_shape.png) no-repeat;
            background-position: bottom;
            width: 100%;
            height: 100%;
            position: absolute;
            bottom: 0;
            left: 0;
            z-index: -1;
        }

        .deneb_cta .cta_wrapper .cta_content h3 {
            color: #fff;
            font-weight: bold;
        }

        @media (max-width: 767px) {
            .deneb_cta .cta_wrapper .cta_content h3 {
                font-size: 24px;
            }
        }

        .deneb_cta .cta_wrapper .cta_content h3:after {
            content: "";
            display: block;
            background: url(../images/shape/line_2.png) no-repeat;
            max-width: 110px;
            height: 2px;
            margin-top: 13px;
            margin-bottom: 24px;
        }

        .deneb_cta .cta_wrapper .cta_content p {
            color: #fff;
        }

        .deneb_cta .cta_wrapper .button_box {
            float: right;
        }

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .deneb_cta .cta_wrapper .button_box {
                float: none;
                text-align: left;
                margin-top: 30px;
            }
        }

        @media (max-width: 767px) {
            .deneb_cta .cta_wrapper .button_box {
                float: none;
                text-align: center;
                margin-top: 30px;
            }
        }

        .deneb_cta .cta_wrapper .button_box .deneb_btn {
            background: #fff;
            color: #011a3e;
        }

        .deneb_cta .cta_wrapper .button_box .deneb_btn:hover,
        .deneb_cta .cta_wrapper .button_box .deneb_btn:focus {
            box-shadow: 2.5px 4.33px 15px 0px rgba(0, 0, 0, 0.15);
        }
    </style>
</head>
<body>
<section class="sec-1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="logo">
                    <a class="sec-a-1 img-fluid" href="index.php"><img src="logo-rozi.png" class="sec-img-1 img-fluid"
                                                                       alt="Responsive image"></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div style="overflow: hidden" align="center">
                    <!--                    <button class="btn btn-primary px-5 sec-btn-1 mt-4" type="submit" data-toggle="button"-->
                    <!--                            aria-pressed="false" autocomplete="off" alt="Responsive image">Login-->
                    <!--                    </button>-->
                </div>
            </div>
        </div>
    </div>
</section>
<section class="sec-2">
    <nav class="navbar navbar-expand-md">

        <a class="navbar-brand navbar-logo" href="index.php" style="margin-left: 25px">RoziKaAdda</a>

        <button type="button" class="navbar-toggler bg-light" data-toggle="collapse" data-target="#nav">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse justify-content-end" id="nav">

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="index.php"><b>Home</b></a>

                </li>
                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>About Us</b></a>

                </li>
                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>Candidate Portal</b></a>

                </li>
                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>Centres</b></a>

                </li>
                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>News</b></a>

                </li>
                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>Tools & Platforms</b></a>

                </li>

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>Careers</b></a>

                </li>

                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>Success Stories</b></a>

                </li>
                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>Online Certificate</b></a>

                </li>
                <li class="nav-item">

                    <a class="nav-link text-light font-weight-bold px-3 sec-2" href="#"><b>Contact Us</b></a>

                </li>
            </ul>
        </div>
    </nav>
</section>
<section class="sec-3 mb-5">
    <div class="container-fluid register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <input type="submit" name="" value="Login"/><br/>
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                           aria-controls="home" aria-selected="true">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                           aria-controls="profile" aria-selected="false">Hirer</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Apply as a Employee</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" maxlength="20" placeholder="Password" value=""/>
<!--                                    <span toggle="#password-field" class="fa fa-fw field-icon toggle-password fa-eye-slash">-->
<!--                                    </span>-->
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" maxlength="20" placeholder="Confirm Password"
                                           value=""/>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" checked>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" maxlength="30" placeholder="Username" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="txtEmpPhone"
                                           class="form-control" placeholder="Phone No" value=""/>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select your Security Question
                                        </option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Answer" value=""/>
                                </div>
                                <input type="submit" class="btnRegister form-control" value="Register"/>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Apply as a Hirer</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name " value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name " value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" maxlength="30" placeholder="Username" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="11" minlength="11" class="form-control"
                                           placeholder="Phone" value=""/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control"  maxlength="20" placeholder="Password" value=""/>
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"  maxlength="20" placeholder="Confirm Password"
                                           value=""/>
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select your Security Question
                                        </option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Answer" value=""/>
                                </div>
                                <input type="submit" class="btnRegister" value="Register"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="mt-5">
    <section class="deneb_cta">
        <div class="container">
            <div class="cta_wrapper">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="cta_content">
                            <h3>Have Any Project in Mind ?</h3>
                            <p>Curabitur libero eros, efficitur sit amet sodales tincidunt, aliquet et leo sed ut nibh
                                feugiat, auctor enim quis.</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="button_box">
                            <a href="#" class="btn btn-warning">Hire Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="deneb_footer">
        <div class="widget_wrapper"
             style="background-image: url(http://demo.tortoizthemes.com/deneb-html/deneb-ltr/assets/images/footer_bg.png);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="widget widegt_about">
                            <div class="widget_title">
                                <img src="assets/images/logo_1.png" class="img-fluid" alt="">
                            </div>
                            <p>The vision
                                is to reduce unemployment and drive economic growth in Pakistan by increasing inflow
                                of foreign currency.</p>
                            <ul class="social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_link">
                            <div class="widget_title">
                                <h4>Links</h4>
                            </div>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget widget_contact">
                            <div class="widget_title">
                                <h4>Contact Us</h4>
                            </div>
                            <div class="contact_info">
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-phone-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="tel:+923219670105">+92 321-9670106</a></p>
                                        <p><a href="tel:+923040805587">+92 304-0805587</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-envelope"></i>
                                    </div>
                                    <div class="info">
                                        <p><a href="mailto:habibziabnw@gmail.com">habibziabwn@gmail.com</a></p>
                                        <p><a href="mailto:services@deneb.com">services@deneb.com</a></p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <div class="icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div class="info">
                                        <p>125, Park street Abu Bakar Hall, BahawalPur,<span>Pakistan.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <p>Copyright &copy; 2020 All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
</body>
</html>
