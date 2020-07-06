<html>
    <head>
        <title>SABS - Let Them FLY!</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="homePage.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&amp;display=swap" rel="stylesheet">
        <link rel="icon" href="middle section/image222.jpg" type="image/icon type">
        <link href="our motivation.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="footer.css">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="">
        <link rel="shortcut icon" type="image/x-icon" href="img/shortcut.png">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&amp;display=swap" rel="stylesheet">
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/fevicon.png">
        <link rel="stylesheet" type="text/css" href="index.css" media="all">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" type="text/css" href="about.css" media="all">
        <link href="https://fonts.googleapis.com/css2?family=Oswald&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Piedra&amp;display=swap" rel="stylesheet">

    </head>
    <style>


        .container{
            text-align: center;

        }

        input[type='text']{
            margin-top: 5%;
            height: 40px;
            text-align: center;
            border: 1px solid;
            outline: none;
            width: 15%;
            border-color: #0000cc;
            border-radius: 40px;
            transition: .25s;
        }
        input[type='text']:hover{
            width: 25%;
            border-color: red;

        }
        button{
            margin-top: 5%;
        }
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
                padding: 8px;
                z-index: 1;
                color: black;
                font-size: 1vw;
                top:19vh;
                text-align: center;
                height: 100px;

            }
            .dropdown-content p{
                padding-bottom:10px;
                border-bottom: 1px solid #a6a6a6;


            }

            .make_pay:hover .dropdown-content {
                display: block;
            }
            .dropdown-content p:hover{
                color:#e6005c;
            }
            .dropdown-content a:hover{color:#e6005c; }


    </style>
    <body>
<?php
if(isset($_POST['donate'])){
session_start();
$_SESSION['amount']=$_POST['amt'];
             echo ("<script>window.location='razorpay.php';</script>");
}
?>



        <div class="header" id="myheader">
            <div class="logoTitle">
                <div class="row">
                    <div class=" col-md-3">
                        <img id="logo" src="img/ngologo.jpg" alt="Image not Found">
                    </div>
                    <div class="col" style="text-align:left;margin-top:40px;margin-bottom: 20px;">
                        <center><font id="heading">SAHAYOG APANG BAHUUDESHYA SANSTHA</font></center>
                    </div>
                </div>
            </div>
            <nav>
                <input type="checkbox" id="check">
                <label for="check" class="checkbtn">
                    <i class="fas fa-bars"></i>
                </label>

                <label class="logo">SABS</label>
                <ul>
                    <li><a class="active" href="index.php"><i class="fa fa-home"></i>&nbsp;Home</a></li>
                    <li><a href="index.php#mission">Mission</a></li>
                    <li> <a href="index.php#initiatives">Initiatives</a></li>
                    <li><a href="index.php#message1">Message</a></li>
                    <li><a href="index.php#teamMembers">Team</a></li>
                    <li><a href="index.php#motivation">Motivation</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li class="make_pay"><a href="#popUpMain" >Make Payment</a>
                    <div class="dropdown-content">
                    <p onclick="checkuser();" style="cursor: pointer;height: 40px;">WITH DETAILS</p>
                    <p><a href="donate2.php" style="text-decoration: none;height: 50px;background-color: #f9f9f9;">Direct Pay</a></p>
                    </div>
                </li>
                    <li><a href="#popUpMain">Log in</a></li>
                </ul>

            </nav>
            <div class="container" style=" margin-top: 5%; height: 50%;  ">
                <form action="razorpay2.php" method="post">
                    <h1><b><i>DONATE US</i></b></h1>
                                <p>  <input type="text" value="" name="amt"  placeholder="Enter amount (in INR)">
                    </p>
                    <button type="submit" name="donate" class="btn btn-primary" data-toggle="button" aria-pressed="false">
Proceed</button>                </form>

            </div>
            <div id="base" style="margin-top: 5%;">
                <div class="content">

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
                        <a href="index.php"style="text-decoration:none;"><li>Home</li></a>
                        <a href="index.php#mission"style="text-decoration:none;"><li>Mission</li></a>
                        <a href="index.php#initiatives"style="text-decoration:none;"><li>Initiatives</li></a>
                        <a href="index.php#message1"style="text-decoration:none;"><li>Message</li></a>
                    </ul></div>
                <div class="footer-items">
                    <ul>
                        <a href=""style="text-decoration:none;"><li></li></a>
                        <a href="index.php#teamMembers"style="text-decoration:none;"><li>Team</li></a>
                        <a href="index.php#motivation"style="text-decoration:none;"><li>Motivation</li></a>
                        <a href="contact.html"style="text-decoration:none;"><li>Contact Us</li></a>
                    </ul>
                </div>


                <div class="footer-items">
                    <h2>Contact Us</h2>
                    <div class="border"></div>
                    <ul>
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i>H-8,Sahas Society,Garkheda</li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Parisar,Aurangabad-431005</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i>9876435678</li>
                        <li><i class="fa fa-envelope" aria-hidden="true"></i><a href=""style="text-decoration:none;">info@sabsngo.org</a></li>
                    </ul>
                    <div class="social-media">
                        <a href="https://www.facebook.com/sabs.ngo.org"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/Sahyog_Apang_Sanstha/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href=" https://twitter.com/home"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/channel/UCV1y_6glcUEt3eeRJkk83pw"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                Copyright@2006 Sahyog Apang Bahuuddeshiya Sanstha NGO.All Right Reserved. Designed by <a href="https://www.innerworkindia.com/"style="text-decoration:none;">Innerworkindia Solution</a>
            </div>
        </div>


       <!----- <script>
            window.onscroll = function() {myFunction()};
            var header = document.getElementById("myheader");
            var sticky = header.offsetTop;
            function myFunction() {
           if (window.pageYOffset > sticky) {
              header.classList.add("sticky");
          } else {
              header.classList.remove("sticky");
                  }
              }
        </script>-->


                </div></div>
            <script type="text/javascript">
                function vanish(anonymous) {
                    var non = document.getElementById("non");
                    var pancard = document.getElementById("pancard");
                    var adhaar = document.getElementById("adhaar");
                    pancard.required = "";
                    adhaar.required = "";
                    non.style.display = anonymous.checked ? "none" : "block";
                }

            </script>
    </body>
</html>
