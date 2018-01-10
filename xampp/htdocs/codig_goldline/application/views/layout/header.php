<!DOCTYPE html>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="<?=base_url()?>public/css/materialize.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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

        body > div.container > div.row.white.center-align.serv > a > div > h5 {
            text-transform: uppercase;
            font-weight: 700;
            color: black;
        }

        body > div.container > div.row.white.center-align.serv > a > div > h5:hover {
            color: rgb(156, 39, 176);
        }

        .parallax-container {
            height: 375px;
        }
    </style>
    <title><?=$title?></title>

</head>
<body class="#efebe9 brown lighten-5">
<!--Nav Start-->
<!--Service Drop Down-->
<?php $this->load->view("layout/layout_navigation");?>
<!--Nav End-->
