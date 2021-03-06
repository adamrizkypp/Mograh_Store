<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- Custom fonts for this template-->
        <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">        

        <style>
            .judul{
                padding-top: 15px;
                padding-bottom: 5px;
                text-align: center;
            }
            .navbar{
                height: 100px;
                background: transparent;
                font-size: 14px;
            }

            .navbar ul{
                padding: 1em 0;
                margin: 0;
                display: flex;
                justify-content: flex-end;
                align-items: center;
                list-style: none;
            }

            .navbar li a{
                position: relative;
                text-decoration: none;
                transition: all ease-in-out 250ms;
            }
            .navbar li a::after{
                content: ' ';
                position: absolute;
                display: block;
                height: 0.2em;
                width: 0%;
                background-color: black;
                transition: all ease-in-out 250ms;
            }

            .navbar li a:hover::after{
                width: 85%;
            }
            .navbar li:first-child{
                margin-right: auto;
                margin-left: 3em;
            }

            .navbar-brand img {
                width: 120px;
                height: auto;
                margin-left: 0;
            }

            @keyframes show {
                0%{
                    opacity: 0;
                    transform: scale(0.9);
                }
                100%{
                    opacity: 0;
                    transform: scale(1);
                }
            }
            .arrival img {
                width: 300px;
                height: 150px;
                margin-top: 10px;
                margin-left: 40%;
            }
            .container{
                padding-top: 10px;
            }
            .card-text{
                text-align: justify;
            }
            .card{
                border-color:darkgray;
                border-radius: 20px;
            }
            .btn{
                border-radius: 20px;
                border-color: black;
            }
            body {
                background-color: rgb(255, 255, 255);
            }
        </style>

        <title>Mograh Store</title>
    </head>
    <body>

             <nav class="navbar navbar-expand-lg" id="mainNav">
                  <div class="container">
                    <div class="navbar-brand">
                      <img src="<?php echo base_url('assets/img/logo.png') ?>">
                    </div>
                      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                    <li class="nav-item active">
                        <a class="nav-link  text-dark ml-2" href="<?php echo base_url('home') ?>">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-dark ml-2" href="about.html">About</a>
                    </li>

                    <li>
                       <?php $keranjang = 'Keranjang Belanja: ' .$this->cart->total_items(). ' items' ?>
                       <?php echo anchor('home/detail_keranjang', $keranjang)  ?>
                    </li>
                </ul>
              </div>
              </div>
            </nav>