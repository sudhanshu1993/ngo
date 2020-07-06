<?php
include "functions.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <title>SABS - Let Them FLY!</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Metal+Mania&family=Oleo+Script&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="index.css" media="all">
        <link rel="stylesheet" href="app.css">
        <link href="homePage.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="our team2.css">
        <link href="our motivation.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="supporting Partners.css">
        <link rel="stylesheet"  type="text/css" href="footer.css">
        <link rel="icon" href="ngologo.jpg" type="image/icon type">


        <!-- Added 14June 2020 -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

        <link rel="icon" href="middle section/image222.jpg" type="image/icon type">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="">
        <link rel="shortcut icon" type="image/x-icon" href="img/shortcut.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&display=swap" rel="stylesheet">

        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/fevicon.png">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Metal+Mania&family=Oleo+Script&display=swap" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <style>
            #setotp{
                display:none;
            }
            #otptxt{
                display: none;
            }
            #popUpMain{
                height:110%;
            }
            #validation{
                color:white;
            }
            #validation2{
                color:white;
            }

            #popUpMain_2{
                position:fixed;
                width:100%;
                height:100%;
                z-index:1001;
                background:rgba(0,0,0,0.6);
            }
            #popUp_2{
                width:40%;
                height:50%;
                position:absolute;
                top:50%;
                left:50%;
                transform:translate(-50%,-50%);
                background-image:url("image18.jpg");
                background-size:cover;
                border-radius:5px;
                box-shadow:3px 3px 3px grey;
            }

             .dropdown-content {
                display: none;
                position: absolute;
                background-color: #f9f9f9;
                min-width: 100px;
                box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                /*padding: 8px*/
                z-index: 1;
                color: black;
                font-size: 1vw;
                top:19vh;
                left: 60;

                height: 100px;

            }
            .dropdown-content p{
                padding-bottom:10px;
                border-bottom: 1px solid #a6a6a6;
                padding-left: 20px;

            }

            .make_pay:hover .dropdown-content {
                display: block;
            }
            .dropdown-content p:hover{
                color:#e6005c;
            }
            .dropdown-content a:hover{color:#e6005c; }
            @media only screen and (max-width: 521px){
              #mission .fontText {    font-size: 30px;}
              #paragraph{font-size:18px;}
            }


        </style>
    </head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body onload="myfunction()">
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <div id="loading">
    </div>

    <div id="popUpMain" style="display:none">
        <div id="popUp">
            <center><h1 id="title">REGISTER HERE!!</h1>

                <p id="validation">we are here to help you...</p>
                &nbsp;&nbsp;&nbsp;<font size="5" color="white">Name:</font>&nbsp;<input type="text" placeholder="Enter name" id="name"><br><br>
                <font size="5" color="white">Contact:</font>&nbsp;<input type="text" placeholder="Enter contact" id="contact"><br>
                <font size="5" color="white" style="font-weight:bold;">OR</font><br>
                <font size="5" color="white">Email:</font>&nbsp;<input type="text" placeholder="Enter email" id="email"><br>
                <span id="otptxt"><font size="5" color="white">OTP:</font>&nbsp;<input type="text" placeholder="Enter OTP" id="otp"><br></span>
                <br>

                <button class="submitId" id="getotp">REGISTER</button> &nbsp;
                <button class="submitId" id="setotp">SUBMIT</button>&nbsp;
                <button class="submitId" id="nothanks">NO THANKS</button>
            </center>
        </div>
    </div>


    <div id="popUpMain_2" style="display:none">
        <div id="popUp_2">
            <center><h1 id="title">LOGIN HERE!!</h1>

                <p id="validation2">we are here to help you...</p>
                &nbsp;&nbsp;&nbsp;<font size="5" color="white">Name:</font>&nbsp;<input type="text" placeholder="Enter name" id="name2"><br><br>
                <font size="5" color="white">Contact:</font>&nbsp;<input type="text" placeholder="Enter number or email" id="contact2" value=""><br>
                <br>

                <button class="submitId" id="checklogin" onclick="pass();">LOGIN</button> &nbsp;
                <button class="submitId" id="nothanks2">NO THANKS</button>
            </center>
        </div>
    </div>



    <div id="header">
        <div class="logoTitle">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                   <img id="logo" src="img/ngologo.jpg" style="margin-left:20px; " alt="Image not Found">
                </div>

                 <div class="col-lg-9 col-md-9">
                   <center><font id="heading" style="margin-right: auto;text-align:justify;" >SAHAYOG APANG BAHUUDESHYA SANSTHA</font></center>
                </div>


            </div>
        </div>

    </div>


<br>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>



        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>


            <label class="logo">SABS</label>
            <ul>
                <li><a class="active" href="#home"><i class="fa fa-home"></i>&nbsp;<strong>Home</strong></a></li>
                <li><a href="#mission"><strong>Mission</strong></a></li>
                <li><a href="#initiatives"><strong>Initiatives</strong></a></li>
                <li><a href="#message1"><strong>Message</strong></a></li>
                <li><a href="#teamMembers"><strong>Team</strong></a></li>
                <li><a href="#motivation"><strong>Motivation</strong></a></li>
                <li><a href="contact.php"><strong>Contact Us</strong></a></li>
                <li class="make_pay"><a href="#popUpMain" ><strong>Make Payment</strong></a>
                    <div class="dropdown-content">
                    <p onclick="checkuser();" style="cursor: pointer;height: 40px;">WITH DETAILS</p>
                    <p><a href="donate2.php" style="text-decoration: none;height: 50px;background-color: #f9f9f9;">Direct Pay</a></p>

                    </div>
                </li>
                <?php if (isset($_SESSION['loggedin_user'])) : ?>
                    <li><a href="javascript: logOUT()"><strong>Logout</strong></a></li>
                    <?php else : ?>
                    <li><a href="javascript: pop()"><strong>Login</strong></a></li>
                <?php endif ?>
            </ul>

        </nav><br>

       <!--  Gallery -->

        <div id="home" >
            <div id="slider" class="container-fluid padNone">
                <div id="apnaCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">

                    <ul class="carousel-indicators">
                        <li data-target="#apnaCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#apnaCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#apnaCarousel" data-slide-to="2" class=""></li>
                    </ul>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/galleryimage1.jpg"  alt="" style="width:100%;height:472px;opacity:0.7; ">
                            <div class="carousel-caption">
                                <h2>We Care-The every aspect of your life</h2>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="img/galleryimage2.jpg"  alt="" style="width:100%;height:472px;opacity:0.7">
                            <div class="carousel-caption">
                                <h2>We Protect-The values of your life</h2>
                            </div>
                        </div>
                        <div class="item ">
                            <img src="img/galleryimage3.jpg"  alt="" style="width:100%;height:472px;opacity:0.7">
                            <div class="carousel-caption">
                                <h2>We Support-The challenges and difficulties in life</h2>
                            </div>
                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>


        <br>
        <br>

       <!--  Mission -->
        <div id="mission" class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-lg-11 col-md-9">
                        <font class="fontText"> Our Mission & Vision </font><br>
                        <hr id="rule"> <br>
                        <div id="paragraph">
                            Our mission is to work and setup methods that will help and benefit disabled & poor people and
                            help in improving their lives in the coming years by opening schools that will provide
                            quality education to every child in remote and backward areas.We also aim to establish hospital
                            and healthcare centres for disabled people to provide them intense medical care for their growth
                            and betterment.We also aim at setting-up of rehabilitation centres for needy & affected people
                            and help them live a better life.We also implement youth welfare schemes and arrange personality
                            development seminar for the youth welfare.Our objective is to establish an equipped blood and eye bank
                            for welfare of the needful.<br><br>
                            We here at Sahayog Apang Bahuudeshya Sanstha believe in equality and humanity.<br><br>

                             Our vision is to create a developed nation where one day, all children in this nation
                            will have the opportunity to attain an excellent education and have access to fully functioning and equipped medical system for the disabled ones where we all live gracefully, leading towards a better life.<br>
                        </div>


                    </div>

                    <div class="col-lg-1 col-md-3">

                        <br><br><br><br><br><br>
                        <img src="img/image2.jpg" class="imageDiv">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <!-- Initiatives -->
            <?php if (isset($_SESSION['loggedin_user'])) : ?>

        <div id="initiatives">

            <div id="box">
                <br>
                <center><img src="img/student.png" width="60px" height="60px"></img></center>
                <center><h3><a href="student_register.php" style="text-decoration:none";><b>As a Student</b></a></h3></center><br>
                <center><font size="4">Set your goals high, and don't stop <br>
                    till you get there.</font></center>
            </div>
            <div id="box">
                <br>
                <center><img src="img/volunteer.png" width="60px" height="60px"></img></center>
                <center><h3><a href="volunteer.php" style="text-decoration:none";><b>Become a Volunteer</b></a></h3></center><br>
                <center><font size="4">Join your hands towards a social cause<br>
                    and be the part of our campaign.</font></center>
            </div>
            <div id="box">
                <br>
                <center><img src="img/donation.png" width="60px" height="60px" ></img></center>
                <center><h3><a href="donate.php" style="text-decoration:none";><b>Donate Us</b></a></h3></center><br>
                <center><font size="4">Giving is not just about make donation,<br>
                    it's about making a difference.</font></center>
            </div>
            <div id="box">
                <br>
                <center><img src="img/solution.png" width="60px" height="60px"></img></center>
                <center><h3><a href="sponsor.php" style="text-decoration:none";><b>Sponsor</b></a></h3></center><br>
                <center><font size="4">Sponsor our children and be a safeguard<br>
                    to someone's education & livelihood.</font></center>
            </div>


        </div>
            <?php else : ?>

        <div id="initiatives">

            <div id="box">
                <br>
                <center><img src="img/student.png" width="60px" height="60px"></img></center>
                <center><h3><a href="javascript: pop()" style="text-decoration:none";><b>As a Student</b></a></h3></center><br>
                <center><font size="4">Set your goals high, and don't stop <br>
                    till you get there.</font></center>
            </div>
            <div id="box">
                <br>
                <center><img src="img/volunteer.png" width="60px" height="60px"></img></center>
                <center><h3><a href="javascript: pop()" style="text-decoration:none";><b>Become a Volunteer</b></a></h3></center><br>
                <center><font size="4">Join your hands towards a social cause<br>
                    and be the part of our campaign.</font></center>
            </div>
            <div id="box">
                <br>
                <center><img src="img/donation.png" width="60px" height="60px" ></img></center>
                <center><h3><a href="javascript: pop()" style="text-decoration:none";><b>Donate Us</b></a></h3></center><br>
                <center><font size="4">Giving is not just about make donation,<br>
                    it's about making a difference.</font></center>
            </div>
            <div id="box">
                <br>
                <center><img src="img/solution.png" width="60px" height="60px"></img></center>
                <center><h3><a href="javascript: pop()" style="text-decoration:none";><b>Sponsor</b></a></h3></center><br>
                <center><font size="4">Sponsor our children and be a safeguard<br>
                    to someone's education & livelihood.</font></center>
            </div>


        </div>
            <?php endif ?>

        <br>

        <!-- Messages-->
        <!-- Chairman's Message -->
        <div id="message1" class="container-fluid" >

            <div class="container" >
                <div class="row">
                    <div class="col-lg-9">
                        <font class="fontText" >Chairman's Message </font><br>
                        <hr id="rule" style="margin-left: 20px;"> <br>
                        <div id="paragraph1">
                            We are consistently working in educational and social fields since 1996 with the establishment
                            of Abhinav Balak Mandir for poor children.We are constantly lending our support and services to
                            the Specially abled people.Our NGO recieves funds from various domestic and foreign sources and
                            it is utilised in organising various programmes for the needy children.
                            It is therefore my humble request for you all to contribute some funds so that we carry on
                            to organize various health,educational and other sessions for these people and bring them
                            into the mainstream of the society.<br>
                        </div>
                    </div>

                    <div class="col-lg-3">

                        <br><br><br><br><br>
                        <img src="img/chairman.jpg" class="imageDiv">
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <!-- Secretary's Message  -->
         <div id="message1" class="container-fluid" >

            <div class="container" >
                <div class="row">

                     <div class="col-lg-3">

                        <br><br><br>
                        <img src="img/vice-chairman.jpg" class="imageDiv">
                        <br>
                        <br>
                    </div>

                    <div class="col-lg-9">
                        <font class="fontText" >Secretary's Message </font><br>
                        <hr id="rule" style="margin-left: 20px;"> <br>
                        <div id="paragraph1">
                           With the aim of development for Sahayog Apang Bahuuddeshya Sanstha, we believe that it’s our responsibility that we become a strength for all the disabled people and motivate them. Being a Vice Chairman of this NGO, we ensure a brighter future for them and try to increase our strength and reduce our flaws. It will be an amazing experience for you all to help us and be a part of this team!<br>
                        </div>
                    </div>


                </div>
            </div>
        </div>

        <br><br>





         <div id="message1" class="container-fluid city">

            <div class="container" >
                <div class="row">
                    <div class="col-lg-9">
                        <font class="fontText">Executive Chairman's Message </font><br>
                        <hr id="rule" style="margin-left: 20px;"> <br>
                        <div id="paragraph1">
                             We,at Sahayog Apang Bahuuddeshya Sanstha believe in dedication and hardwork,which helps us to achieve our goals.Our NGO was established in 2006.Here,I am,with my team running this NGO,which provides all kinds of support.This is a place that helps disabled people for their education. We want to provide education for all and help them achieve their rights! We believe that our country will prosper by encouraging these people to face challenges.This will help us in creating a pleasant environment for the disabled people and bring them into the mainstream of the society.<br>
                        </div>
                    </div>

                    <div class="col-lg-3">

                        <br><br><br><br><br>
                        <img src="img/ranjan.jpg" class="imageDiv">
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <br><br>



        <!-- Achievements -->

        <div id="achievement" class="container-fluid city">


            <div class="container">

                <div class="row">
                    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<h2 style="color: #6b5b95;">Our Achievements</h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src="medal.png" class="icon" width="100" height="100">
                    <div id="paragraph3">
                        The Sahayog Apang Bahuudeshya Sanstha(SABS) plays a significant role in the development of rehabilitation services for persons with disabilities. SABS aims to provide support and services to the physically challenged and disabled children. This would include contribution in the areas of health,education and other challenging areas ensuring a brighter future for them.
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <br><br>
                        <div id="paragraph3">
                            The Ramji Bodre Manav Kalyan of the Bahuudeshiye Seva Bhawi Sanstha Raji,Aaurangabad awarded the <strong style="color: #6b5b95;">Jagtika Mahila Dina Nimit Gaurav Puraskar </strong>
                            on <br>7 March 2011 in recognition to the various support and services to
                            the Specially abled people.

                            <br>
                        </div>
                    </div>

                    <div class="col-lg-3">


                        <img src="img/award1.jpg" class="rounded-circle" width="304" height="236" style="border: solid 1px"><br><br><br>
                    </div>
                </div>
            </div>
            <!-- </div> -->

          <script type="text/javascript" src="JQuery.js"></script>
            <script type="text/javascript">

    //Registration and Login Functions
    $(document).ready(function () {
        $('#nothanks2').click(function () {
            $('#popUpMain_2').css('display', 'none');
        });
         $('#nothanks').click(function () {
            $('#popUpMain').css('display', 'none');
        });
        //triggers when register button clicked
        $("#getotp").click(function () {
            var error = 0;
            var name = $('#name').val();
            var no = $('#contact').val();
            var email = $('#email').val();

            if (name == "") {
                disperror("Please enter name");
                error = 1;

            }
            if ((no == "") && (email == "")) {
                disperror("Please enter either number or email");
                error = 1;

            }
            if ((no != "") && (email != "")) {
                disperror("Please enter either number or email");
                error = 1;

            }

            if (error == 0) {
                if (email != "") {
                    var value = email;
                    var flag = 1;
                }
                if (no != "") {
                    var value = no;
                    var flag = 2;
                }
                $.ajax({
                    url: "functions.php",
                    type: "POST",
                    async: false,
                    data: {
                        "done": 1,
                        "name": name,
                        "value": value,
                        "flag": flag
                    },
                    success: function (data) {

                        if (data == "0") {
                            $("#validation").css("color", "red");
                            $("#validation").html("Email/contact already exits ! Please log in");
                        }
                        if (data == "1") {
                            $("#validation").css("color", "white");
                            //     $("#validation").html(data);
                            disableinputs();
                        }
                        if (data == "2") {
                            $("#validation").css("color", "red");
                            $("#validation").html("Error while sending the email");
                        }


                    }
                });
            }


        });

        //triggers when submit button clicked
        $("#setotp").click(function () {
            var otp = $('#otp').val();
            //  disableinputs();
            $.ajax({
                url: "functions.php",
                type: "POST",
                async: false,
                data: {
                    "checkotp": 1,
                    "otp": otp
                },
                success: function (data) {
                    $("#validation").css("color", "white");
                    if (data != 1) {
                        $("#validation").html(data);
                    }

                    if (data == "1") {
                        $("#popUpMain").css('display', 'none');
                        window.open("index.php");
                    }

                }
            });
        });

        $("#checklogin").click(function () {
            var name2 = $('#name2').val();
            var contact2 = $('#contact2').val();
            //  disableinputs();
            $.ajax({
                url: "functions.php",
                type: "POST",
                async: false,
                data: {
                    "checklogin": 1,
                    "login_name": name2,
                    "login_contact": contact2
                },
                success: function (data) {
                    //  alert(data);
                    if (data == "0") {
                        $("#validation2").css("color", "red");
                        $("#validation2").html("Invalid name/contact");
                    }
                    if (data == "1") {
                       location.reload();
                    }

                }
            });
        });


    });


    function disableinputs() {
        $("#validation").css("color", "white");
        $("#validation").html("We have sent an otp to your number and email !!");
        $("#otptxt").css("display", "block");
        $("#getotp").css("display", "none");
         $("#nothanks").css("display", "none");
        $("#setotp").css("display", "inline-block");
    }


    function disperror(txt) {
        $("#validation").css("color", "red");
        $("#validation").html(txt);
    }

    function checkuser() {
        $('#popUpMain').css('display', 'block');
    }

    function logOUT(){
        $.ajax({
            url:"functions.php",
            type:"POST",
            async:false,
            data:{
                "logout":1
            },
            success:function(data){
                location.reload();
            }
        })
    }
            </script>



            <br><br>
            <!--  <div id="achievement" class="container-fluid city"> -->
            <div class="container">
                <div class="row">
                    <div class="container">

                    </div>

                    <div class="row">

                        <div class="col-lg-3">


                            <img src="img/award2.jpg" class="rounded-circle" width="250" height="236"  style="border: solid 1px">
                        </div>
                        <div class="col-lg-9">
                            <div id="paragraph3">
                                The Abhinav Balak Mandir of the Sahas Society Garkheda Parisar awarded the <strong style="color: #6b5b95;">Mahila Gaurav Puraskar </strong>
                                on 3 Feb 2012 in recognition to the various support and services to
                                the Specially abled people.

                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- </div>  -->
            <br><br>



            <!-- <div id="achievement" class="container-fluid city"> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">

                        <div id="paragraph3">
                            <br><br>
                            The Prathamik Shala-Ulnakari,Aurangabad presented the <strong style="color: #6b5b95;">VidyaBalakMandir</strong> in recognition towards the various services towards the education of handicapped and disabled children <br>
                        </div>
                    </div>

                    <div class="col-lg-3">


                        <img src="img/award3.jpg" class="rounded-circle" width="304" height="236"  style="border: solid 1px"><br><br><br>
                    </div>
                </div>
            </div>

            <!--  </div>     -->
            <br><br>


            <!-- <div id="achievement" class="container-fluid city"> -->
            <div class="container">
                <div class="row">
                    <div class="container">

                    </div>

                    <div class="row">

                        <div class="col-lg-3">


                            <img src="img/award4.jpg" class="rounded-circle" width="250" height="236"  style="border: solid 1px">
                        </div>
                        <div class="col-lg-9">
                            <div id="paragraph3">
                                <br>
                                The <strong style="color: #6b5b95;"> MadhavBaug </strong> awarded a certificate of appreciation for providing various health services for the handicapped and disabled children.
                                <br>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!--  </div>  -->
            <br><br>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
    var preloader = document.getElementById("loading");
    function myfunction() {
        preloader.style.display = "none";
    }

<?php if (empty($_SESSION['loggedin_user'])) : ?>

    $(document).ready(function () {
        setTimeout(function () {
            $('#popUpMain').css('display', 'block');
        }, 5000);
    });

<?php endif ?>

    function pop(){
      $(document).ready(function () {
        setTimeout(function () {
            $('#popUpMain_2').css('display', 'block');
        }, 000);
    });
    }
function pass(){
    var email=document.getElementById("contact2").value;
    var name=document.getElementById("name2").value;
    localStorage.setItem("mail",email);
        localStorage.setItem("name",name);

    return false;
}

        </script>

        <div id="teamMembers"class="team">
            <h2>Our Team</h2>
            <div class="team-content">
                <div class="responsive1">
                    <div class="team-gallery">
                        <img src="img/chairman.jpg" >
                        <div class="des"><p><h3>Mrs Sangita Pramod Kulkarni</h3>
                            <h5>Chairman</h5></p>

                            <p>
                                H-8, Sahas society,
                                <br> Garkheda Aurangabad

                            </p></div>
                    </div>
                </div>
                <div class="responsive2">
                    <div class="team-gallery">
                        <img src="img/vice-chairman.jpg" >
                        <div class="des"><p><h3> Mr Pramod Govindrao Kulkarni </h3>
                            <h5>Secretary</h5></p>

                            <p>
                                H-8, Sahas society,
                                <br>Garkheda Aurangabad

                            </p></div>
                    </div>
                </div>
                <div class="responsive3">
                    <div class="team-gallery">
                        <img src="img/ranjan.jpg" >
                        <div class="des"><p><h3>Mr Ranjan Bhaskar</h3>
                            <h5>Executive Chairman</h5></p>

                            <p>
                                Royal Palms Estate,
                                <br>Goregao(E),Mumbai

                            </p></div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div id="motivation"></div>
        <div class="content">
            <div class="body-content">
                <div class="motivation-item" >
                    <center>
                        <h2>Our Motivations</h2>
                        <div class="motivation-border"></div>

                        <div class="motivation-content1"><br>
                            <p>
                            Every child is an artist.They have the potential to bring
                            incredible to our world.But first, we need to recognise their
                            value.These  about children encourage us to give them our
                            loving care and support.Children are more than we think they
                            are; they can do more than we think they can do. All they
                            need is a vote of confidence from grownups.Their dream
                            today will become the realities of tomorrow.
                            </p>
                        </div>
                    </center>
                </div>
                <div class="motivation-item">
                    <center><h2>Did You Know ?</h2>
                        <div class="motivation-border"></div></center>
                    <div class="motivation-content2">
                        <p>"Out of the 121 Cr population, about 2.68 Cr persons are‘disabled’ which is 2.21% of the total population."</p>
                        <p>"There are 78,64,636 children with disability in India 1.7 percent of the total child population."</p>
                        <p>"The precentage of disabled children attending school in India is 10%."</p>
                        <p>"Three-fourths of the children with disabilities at the age of five years and one-fourth between 5-19 years do not go to any educational institution"</p>
                    </div>


                </div>

            </div>


        </div>
        <br>


        <div class="box">
            <h2>Supporting Partners</h2>
            <div class="box-content">
                <div class="responsive1">
                    <div class="gallery">
                        < src="logo.png" >
                        <div class="des"><a href="https://www.innerworkindia.com" style="text-decoration:none";><h3>Innerwork Solution pvt. ltd.</h3></a></div>
                    </div>
                </div>
                <div class="responsive2">
                    <div class="gallery">
                        <img src="img/ashalogo.jpg" >
                        <div class="des"><a href="http://www.ashafoundation.org/" style="text-decoration:none";><h3>Asha For Education</h3></a></div>
                    </div>
                </div>
                <div class="responsive3">
                    <div class="gallery">
                        <img src="img/download.png" >
                        <div class="des"><a href="" style="text-decoration:none";><h3>Abhinav Balak Mandir</h3></a></div>
                    </div>
                </div>
            </div>
        </div>
        <br>


        <div class="footer">
            <div class="inner-footer">
                <div class="footer-items">
                    <h1>Sahyog Apang Bahuuddeshiya Sanstha</h1>
                    <p>A ray of hope to the new world. </p>
                    <p>Our mission is to bestow the light of education on the Physically challenged children.</p>
                </div>
                <div class="footer-items">
                    <h2>Quick links</h2>
                    <div class="border"></div>
                    <ul>
                        <a href=""style="text-decoration:none;"><li>Home</li></a>
                        <a href=""style="text-decoration:none;"><li>Mission</li></a>
                        <a href=""style="text-decoration:none;"><li>Initiatives</li></a>
                        <a href=""style="text-decoration:none;"><li>Message</li></a>
                    </ul></div>
                <div class="footer-items">
                    <ul>
                        <a href=""style="text-decoration:none;"><li></li></a>
                        <a href=""style="text-decoration:none;"><li>Team</li></a>
                        <a href=""style="text-decoration:none;"><li>Motivation</li></a>
                        <a href=""style="text-decoration:none;"><li>Contact Us</li></a>
                    </ul>
                </div>


                <div class="footer-items">
                    <h2>Contact Us</h2>
                    <div class="border"></div>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>H-8,Sahas Society,Garkheda</li>
                        <li>Parisar,Aurangabad-431005</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>9876435678</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href=""style="text-decoration:none;">info@sabsngo.org</a></li>
                    </ul>
                    <div class="social-media">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                Copyright@2006 Sahyog Apang Bahuuddeshiya Sanstha NGO.All Right Reserved. Designed by <a href="https://www.innerworkindia.com/"style="text-decoration:none;">Innerworkindia Solution</a>
            </div>
        </div>
</body>
</html>
