<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="<?=base_url()?>public/css/materialize.min.css">
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css">

    <style>
        .navbar-fixed {
            position: absolute;
            z-index: 999999999;
        }

        #map {
            width: 100%;
            height: 550px;
        }

        body > div.container > div.row.white.center-align.serv > a > div > i {
            font-size: 7rem;
            color: black;
        }
        body > div.container > div.row.white.center-align.serv > a > div > i.large.material-icons:hover {
            color: rgb(156, 39, 176);
        }
        body > div.container > div.row.white.center-align.serv > a> div > h5{
            text-transform: uppercase;
            font-weight: 700;
            color: black;
        }
        body > div.container > div.row.white.center-align.serv > a> div > h5:hover {
            color: rgb(156, 39, 176);
        }
    </style>


</head>
<body class="#efebe9 brown lighten-5" >

<!--Nav Start-->
<!--Service Drop Down-->
<ul id="service-dropdown" class="dropdown-content">
    <li><a href="<?=base_url()?>lead-generation" class="purple-text">Lead Generation Market Research (MPO)</a></li>
    <li><a href="<?=base_url()?>lead-management"  class="purple-text">Lead Management Solutions</a></li>
    <li class="divider"></li>
    <li><a href="<?=base_url()?>hr"  class="purple-text">HR House (Recruitment, Training & Posting)</a></li>
    <li class="divider"></li>
    <li><a href="<?=base_url()?>logistics"  class="purple-text">Logistics</a></li>
</ul>
<!--Service Drop Down End-->
<div class="navbar-fixed">
    <nav id="nav" class="transparent  z-depth-1">
        <div class="nav-wrapper">
            <a href="<?=base_url()?>" class="brand-logo"><img src="<?=base_url()?>public/images/gb264.png"  class="responsive-img left"> <h5>Business Solutions</h5> </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="<?=base_url()?>"> <i class="material-icons left">home</i>Home</a></li>
                <li><a class="dropdown-button" data-beloworigin="true" href="#" data-activates="service-dropdown"
                       data-constrainwidth="false"><i
                                class="material-icons left">dashboard</i>Service <i class="material-icons right">arrow_drop_down</i></a>
                </li>
                <li><a href="<?=base_url()?>contact-us"> <i class="material-icons left">contacts</i> Contact Us</a></li>
            </ul>
        </div>
    </nav>
</div>
<!--Nav End-->
<!--Head Slider-->
<div class="row">
    <div class="m12 s12">
        <div class="slider">
            <ul class="slides">
                <li>

                    <img src="<?=base_url()?>public/images/business-solution.jpg">

                    <!-- random image -->
                    <div class="caption center-align ">
                        <h1 class="gold-text"><b>GOLDEN BRIDGE</b></h1>
                        <h3 class="gold-text z-depth-1"><b>BUSINESS SOLUTIONS</b></h3>
                    </div>
                </li>
                <li>
                    <img src="<?=base_url()?>public/images/lead-generation.jpg"> <!-- random image -->
                    <div class="caption left-align ">

                        <h1 class="left-align" ><b>LEAD </b></h1>
                        <h2 class="left-align"><b>GENERATION</b></h2>
                    </div>
                </li>
                <li>
                    <img src="<?=base_url()?>public/images/lead-management.jpg"> <!-- random image -->
                    <div class="caption right-align">
                        <h1 class="right-align"><b>LEAD </b></h1>
                        <h2 class="right-align"><b>MANAGEMENT</b></h2>
                    </div>
                </li>
                <li>
                    <img src="<?=base_url()?>public/images/hr.jpg"> <!-- random image -->
                    <div class="caption left-align">
                        <h1 ><b>HUMAN </b></h1>
                        <h2 ><b>RESOURCE </b></h2>
                    </div>
                </li>
                <li>
                    <img src="<?=base_url()?>public/images/logistics.jpg"> <!-- random image -->
                    <div class="caption right-align">
                        <h1 ><b>LOGISTICS </b></h1>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--Head Slider End-->

<!--Main Content Start-->
<div class="container">
    <!--About Us-->
    <div class="row">
        <div class="col s12 m12">
            <div class="card z-depth-2">
                <div class="card-content card-panel">
                    <div class="card-title center-align #00695c purple-text"><h3><b>About Us</b></h3></div>

                    <p class="text-justify">
                        Golden Bridge Business Solutions is a boutique provider of tailor
                        made services in Lead
                        Generation Services, Lead Management Services, HR Global Services &amp; Logistics.
                        Based out of Bangalore serving wide range of clients throughout India across various
                        industries.</p>
                    <br>

                    <p class="text-justify">
                        Golden Bridge has successfully built in-house expertise and professional capability to
                        handle diverse business needs of various clients. Our client&apos;s value is our commitment
                        to deliver high quality work with quick turnaround and strict confidentiality. There has
                        been significant thrust along with Management&apos;s thoughtful strategic guidance towards
                        continuous value creation for our clients. We believe in doing what is right for our
                        client&apos;s business in the long run.</p>

                </div>
            </div>
        </div>
    </div>
    <!--About Us End-->

    <!--vision-->
    <div class="row ">
        <div class="col s12 m12">
            <div class="card z-depth-2">
                <div class="card-content card-panel">
                    <div class="card-title center-align #00695c purple-text"><h3><b>Vision</b></h3></div>
                    <p style="text-align: justify">Golden Bridge wants to become a service provider of choice, offering
                        exemplary
                        services and solutions with unsurpassed quality at affordable costs, which is delivered
                        by our motivated employees.</p>
                </div>
            </div>
        </div>
    </div>
    <!--vision ends-->

    <!--mission start-->
    <div class="row  ">
        <div class="col s12 m12">
            <div class="card z-depth-2">
                <div class="card-content card-panel">
                    <div class="card-title center-align #00695c purple-text"><h3><b>Mission</b></h3></div>
                    <p style="text-align: justify">Golden Bridge endeavors to build a strong service provider in India
                        by 2025 offering
                        Lead Generation Services, HR Solutions and Logistics consulting Practices. Our sole
                        aim is to be a sought-after player known for reliability, efficiency, integrity, stability and
                        confidentiality.</p>
                </div>
            </div>
        </div>
    </div>
    <!--mission start ends-->
    <!--services-->
    <div class="row white center-align serv">
        <div class="co1 s12 ">
            <h3 class=" purple-text card-panel">
                <b>Services</b>
            </h3>
        </div>
        <a href="<?=base_url()?>lead-generation">  <div class="col s12 m3">
                <i class="large material-icons">equalizer</i><br>
                <h5>Lead Generation</h5>
            </div></a>
        <a href="<?=base_url()?>lead-management"><div class="col s12 m3"><i class="large material-icons">headset_mic</i><br>
                <h5>Lead Management</h5>
            </div></a>
        <a href="<?=base_url()?>hr"><div class="col s12 m3"><i class="large material-icons">group</i><br>
                <h5>HR</h5>
            </div></a>
        <a href="<?=base_url()?>logistics">        <div class="col s12 m3"><i class="large material-icons">local_shipping</i><br>
                <h5>Logistics</h5>
            </div></a>
    </div>
    <!--services ends-->
    <!--contact us -->
    <div class="row white z-depth-2">
        <h3 class="center purple-text card-panel ">
            <b class="#9c27b0 purple-text">Reach Us at</b>
        </h3>
        <div class="divider"></div>
        <div class="col s12 m4 purple-text">

            <?php $this->load->view("layout/layout_address");?>
        </div>
        <div class="col s12 m8">
            <?php $this->load->view("layout/layout_map");?>
        </div>
    </div>
    <!--contact us  ends-->

</div>
<!--Main Content End-->

<!--Contact us button starts-->
<?php $this->load->view("layout/layout_contact_us");?>
<!--Contact us button end-->
<!--footer starts-->
<?php $this->load->view("layout/layout_footer");?>


<!--footer ends-->
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>public/js/materialize.js"></script>
<script>
    $(document).ready(function () {
        $('.slider').slider();
        $('.slider').slider('start');
        $(".dropdown-button").dropdown();
    });

</script>
<script>
    $(window).scroll(function () {
        if ($(window).scrollTop() > 10) {
            $('#nav').addClass("#9c27b0 purple");
            $('#nav').removeClass("transparent");

        } else {
            $('#nav').addClass("transparent");
            $('#nav').removeClass("#9c27b0 purple");
        }
    });
</script>
</body>
</html>