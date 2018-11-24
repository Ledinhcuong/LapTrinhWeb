
<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Software</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <LINK REL="SHORTCUT ICON" href="public/images/mylogo.ico">
    <link rel="stylesheet" href="public/font/OpenSansCondensed-Light.ttf">
    <link rel="stylesheet" href="public/bootstrap-3.3.7-dist/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="public/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" type="text/css" href="public/css/slider.css">
    <script type="text/javascript" src="public/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="public/js/sitecripts.js" ></script>

    <!-- Font Icon -->
    <link rel="stylesheet" href="public/font/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="public/css/register.css">

    
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index"><img src="public/images/mylogo.ico" alt="">
                        <b>Software</b></a>

                    </div>

                   
                </div>
                <div class="menu-account">
                    <div class="background-menu">

                        <div class="logo-menu" style="margin-bottom: 10px; text-align: center;">
                            <img src="public/images/mylogo.ico" alt="">
                        </div>

                        <ul>
                            <li><i style="color: #5751D9" class="fa fa-user-o" aria-hidden="true"></i> Tên tài khoản</li>
                            <li><i style="color: #5751D9"  class="fa fa-info-circle" aria-hidden="true"></i><a href="#">   Thông tin tài khoản</a></li>
                            <li><i style="color: #5751D9"   class="fa fa-sign-out" aria-hidden="true"></i><a href="#"> Đăng xuất</a> </li>
                        </ul>
                    </div>

                </div>

            </nav>
        </header>

        <!-- Blance -->
        <div class="blance" style="padding: 30px 0; position: static;" > </div>

        <!-- Nội dung của form -->

        <div class="main">

            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container">
                    <div class="signup-content">
                        <form method="POST" id="signup-form" class="signup-form">
                            <h2 class="form-title">Create account</h2>
                            <div class="form-group">
                                <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                            </div>
                        </form>
                        <p class="loginhere">
                            Have already an account ? <a href="#" class="loginhere-link">Login here</a>
                        </p>
                    </div>
                </div>
            </section>

        </div>


        <!-- footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="title-footer">
                            About Us
                        </div>

                        <ul style="list-style: none; padding-left: 0px">
                            <li><a href="#">Thông tin về chúng tôi</a></li>
                            <li><a href="#">Bản quyền</a></li>
                            <li><a href="#">Tin tức công ty</a></li>

                        </ul>

                    </div>

                    <div class="col-md-4">
                        <div class="title-footer">
                            Thông tin liên hệ
                        </div>

                        <ul style="list-style: none; padding-left: 0px">
                            <li><a href="#">Email: softwareworld@ldc.com</a></li>
                            <li><a href="#">SĐT: 012 444 4444</a></li>
                            <li><a href="#">Facebook: software</a></li>
                        </ul>

                    </div>

                    <div class="col-md-4">
                        <div class="title-footer">
                            Trang web
                        </div>

                        <ul style="list-style: none; padding-left: 0px">
                            <li><a href="#">Báo cáo lỗi </a></li>
                            <li><a href="#">Hỗ trợ</a></li>
                            <li><a href="#">Hồ sơ tài khoản </a></li>
                        </ul>

                    </div>

                </div>
            </div>

        </footer>



        <script type="text/javascript" src="public/js/slider.js"></script>
        <script>
        var indexCurrent = 1;      // Chỉ số hình đầu tiên hiển thị ở slide
        var loop = true;  // Bật lặp slide 
        var showbutton =true;  // Hiện 2 button điều hướng
        var duration = 4000;   // Thời gian chờ chuyển hình (tính theo đơn vị milisecond)

        initSlider();
    </script>
    <!-- JS -->
    <script src="public/js/register.js"></script>

</body>

</html>

