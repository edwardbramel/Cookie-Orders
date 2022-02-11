<?php require './inc/db_connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Cookie Orders</title>
</head>

<body>
    <?php require 'inc/create.php' ?>
    <div class="container header">
        <div class="row ">
            <div class="col">
                <h1 class="text-center">Cookie Form</h1>
            </div>
        </div>
    </div>
    <div class="container main">
        <div class="row1 mt-3 d-flex justify-content-center">
            <div class="col-8 ">
                <h2>Hello neighbor,</h2>
                <br>
                <p>You're probably craving a cookie or maybe just visting my website. Pick what flavor you want. I will be making them at home my self. I will take covid seriously in order to make you feel comfortable about eating them. I have made this website to test some skills that I have learned at Clark College. I'm a web design student and thought this project might help me develop proffesional skills that i can use in delpoying a website.</p>
            </div>
        </div>
        <div class="row2 mt-3 ">
            <div class="col-12 d-flex justify-content-center">
                <figure>
                    <img src="https://media.istockphoto.com/photos/blue-green-gold-cookies-2-picture-id537616999?b=1&k=20&m=537616999&s=170667a&w=0&h=TBKXGqawVYhUjyMEN5iCXpKMJs6rcyDagjhA8gYKxus=" alt="m&m">
                    <figcaption>M&M</figcaption>
                </figure>
                <figure>
                    <img src="https://images.unsplash.com/photo-1509460711270-4affad6eef6a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fGNob2NvbGF0ZSUyMGNoaXAlMjBjb29raWVzfGVufDB8MHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="chocolate">
                    <figcaption>Chocolate</figcaption>
                </figure>
                <figure>
                    <img src="https://media.istockphoto.com/photos/homemade-oat-and-raisin-cookies-on-a-wire-cooling-rack-on-a-rough-picture-id1292747092?b=1&k=20&m=1292747092&s=170667a&w=0&h=GkuLgMEAYJLwJCIFmSFNstIdfkKw6c_KGCNbJrGEVgE=" alt="oatmeal">
                    <figcaption>Oatmeal</figcaption>
                </figure>
            </div>
        </div>
        <div class="row3 mt-3 d-flex justify-content-center">
            <div class="col-8 ">
                <h3>How does this work?</h3>
                <br>
                <p>When you order a cookie on the form it is sending your form information to my database. I will wait about 2 days to gather all info from everyone and then i will personally deliver the cookies to each house. If you do not want any cookies please select *None. (already selected).</p>
                <ul>
                    <li>You fill out the form</li>
                    <li>I see who selected what</li>
                    <li>I will deliver them once they are ready</li>
                    <li>You can select no if you want</li>
                    <li>I will take safty and health precautions</li>
                </ul>
            </div>
        </div>
        <div class="row5 mt-3 mb-20">
            <div class="col d-flex justify-content-center">
                <?php require 'inc/form.php'; ?>
            </div>
        </div>
    </div>
    <div class="container footer">
        <div class="row ">
            <div class="col">
                <p><a href="policy.html">Eddy LaMel</a></p>
            </div>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>