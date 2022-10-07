<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <header id="hero" style="background-image: url(<?php echo get_theme_file_uri('/img/VO-Hero-Image.jpg') ?>;">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <div class="logo-circle center-text">TS</div>
                    <p class="strap-line">TIM SHOESMITH Voiceover Artist</p>
                </div>
                
                <ul class="nav-menu">
                    <!-- Replace http://localhost:8080/ with echo ABSPATH -->
                    <li class="nav-items"><a href="http://localhost:8080/vodatabase/">HOME</a></li>
                    <li class="nav-items"><a href="http://localhost:8080/vodatabase/index.php#clients">CLIENTS</a></li>
                    <li class="nav-items"><a href="http://localhost:8080/vodatabase/index.php#about">ABOUT</a></li>
                    <li class="nav-items"><a href="http://localhost:8080/vodatabase/studio/">STUDIO</a></li>
                    <li class="nav-items"><a href="#">BLOG</a></li>
                    <li class="nav-items"><a href="contact.php" class="btn-signup">CONTACT</a></li>
                </ul>
                <div class="hamburger">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>

            <div class="hero-box">
                <h1 class="hero-heading">CREATING GREAT AUDIO FROM SCRIPT TO FINAL PROJECT</h1>
                <P class="hero-description">WARM, CLEAR, ENGAGING &AMP; ARTICULATE</P>

                <div class="btn-box">
                    <a href="#demos" class="cta-btn demo">Demos</a>
                </div>
            </div>
        </div>
</header>
    
    