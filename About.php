<?php
	include_once 'header.php';
?>


<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8" />
    <title>About Page</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #e6e4e4;
            padding:0px;
        }

        html {
            box-sizing: border-box;
        }

        *, *:before, *:after {
            box-sizing: inherit;
            
        }

        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }

        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #aec0e6;;
            color: black;
        }

        .container {
            padding: 0 16px;
        }

        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }

        .title {
            color: grey;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }

        .button:hover {
            background-color: #555;
        }

        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }

        .copyright {
            background-color: #e6e4e4;
            text-align: center;
            margin: auto;
            position: fixed;
            bottom: 0;
            width: 100%;
            +-
        }
        
    </style>

</head>

<body>
<section class="home-section">
    <div class="about-section">

        <h1>About Us</h1>
        <p>This app is a class project designed by three college students. It was developed for our System Development class, semester August - December of 2021.</p>
        <p>Bellow is our information. Feel free to contact us if you have any questions about our app!</p>

    </div>

    <h2 style="text-align:center">Our Team</h2>

    <div class="row">

        <div class="column">
            <div class="card">
                <div class="container">
                    <br>
                    <h2>Ian Espinell</h2>
                    <p class="title">Backend Developer</p>
                    <p>Student coursing their 4th year in college in Computer Science major.</p>
                    <p>espinell.kira69@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <br>
                    <h2>Kevin Santiago</h2>
                    <p class="title">Frontend Developer</p>
                    <p>Student coursing their 5th year in college in Computer Science major.</p>
                    <p>kevinstg51@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <br>
                    <h2>Yarnellimar Cedeño</h2>
                    <p class="title">Frontend Developer</p>
                    <p>Student coursing their 4th year in college in Computer Science major.</p>
                    <p>ycc05202641@gmail.com</p>
                    <p><button class="button">Contact</button></p>
                </div>
            </div>
        </div>

    </div>

    <div class="container copyright">
        <p>&copy;2021 BeeHive Community</p>
    </div>
    </section>
</body>
</html>