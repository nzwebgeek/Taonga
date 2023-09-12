<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Read Our Info</title>
</head>
<body>
    <div class="backdrop"></div> 
   <header class="hero info">
       <div id="navbar" class="navbar top">
        <button class="toggle-button">
            <span class="toggle-button__bar"></span>
            <span class="toggle-button__bar"></span>
            <span class="toggle-button__bar"></span>
        </button>
           <h1 class="logo">
               <span class="text-primary"><i class="fas fa-leaf"></i>
                Aotearoa</span> Aquaponics
           </h1>
        <!--nav desktop start-->
        <nav class="desktop-nav">
            <ul>
                <li> <div class="dropdown">
                 <button class="dropbtn"><a  href="index.php#home">Aqua Home</a></button>
                 
             </div></li>
         <li><div class="dropdown">
             <button class="dropbtn"><a  href="company.php">
                Aqua Company</a></button>
             <div class="dropdown-content">
                <a href="#people">The People</a>
                <a href="#mission">The Mission</a>
                <a href="#goals">The Goals</a>
                 <a href="#vision">The Vision</a>
                 <a href="#donation">Donation Support</a>
                 <a href="#video">Aqua Video</a>
                 <a href="#audio">Aqua Audio</a>
                 <a href="#powerpoint">Aqua PowerPoint Presentation</a>
             </div>
         </div></li>
         <li><div class="dropdown">
             <button class="dropbtn"><a  href="index.php#aqua">
                Aqua Farming</a></button>
             <div class="dropdown-content">
                 <a href="index.php#what">What Is Aquaponics</a>
                 <a href="index.php#benefits">What Are The Benefits Of Aquaponic Farming</a>
                <a href="index.php#aims">What Are the Aims & Objectives Of Aquaponic Farming</a>
             </div>
         </div></li>
         <li>  <div class="dropdown">
             <button class="dropbtn"><a  href="social.php">
                 Social Benefits</a></button>
             <div class="dropdown-content">
                <a href="#what">Health Benefits</a>
                <a href="#aqua">Education Benefits</a>
                <a href="#aims">Employment Benefits</a>
                 <a href="#benefits">Climate and Environmental Benefits</a>
             </div>
         </div></li>
         <li><div class="dropdown">
             <button class="dropbtn"><a  href="index.php#abm">Aqua
                 Business Model</a></button>
             <div class="dropdown-content">
                <a href="index.html#financial">What are the financial benefits</a>
                <a href="index.html#franchise">Franchise Options</a>
                <a href="index.html#pilot">Aqua Pilot Projects</a>
             </div>
         </div></li>
         <li>  <div class="dropdown">
             <button class="dropbtn"><a href="services.php">Aqua Services</a></button>
             <div class="dropdown-content">
                <a href="services.php#services">Onsite Research Laboratory</a>
                <a href="services.php#education">Onsite Education Centre</a>
                <a href="services.php#medicinal">Onsite Health Centre</a>
                 <a href="services.php#accomodation">Onsite Accomodation</a>
                 <a href="services.php#retail">Onsite Market Retail Store</a>
                 <a href="services.php#cafe">Onsite Cafe and Restaurant</a>
                 <a href="services.php#shop">Online Shopping - Shopping Cart</a>
                 <a href="services.php#webinar">Online Webinar </a>
                 <a href="services.php#app">Mobile App</a>
             </div>
         </div></li>
         
            </ul>
        </nav>
        <!--nav desktop end-->
       </div>

       <div class="content">
           <h2 class="title">Aqua Company<br/></h2>
           <p id="research"></p>
       </div>
   </header> 

 <!--hamburger-->
 <nav class="mobile-nav">
    <ul class="mobile-nav__items">
        <li class="mobile-nav__item"><a href="index.php">Home</a></li>
        <li class="mobile-nav__item"><a href="company.php">Aqua Company</a></li>
        <li class="mobile-nav__item"><a href="company.php#people">The People</a></li>
        <li class="mobile-nav__item"><a href="company.php#mission">The Mission</a></li>
        <li class="mobile-nav__item"><a href="company.php#goals">The Goals</a></li>
        <li class="mobile-nav__item"><a href="company.php#vision">The Vision</a></li>
        <li class="mobile-nav__item"><a href="company.php#video">Aqua Video</a></li>
        <li class="mobile-nav__item"><a href="company.php#audio">Aqua Audio</a></li>
        <li class="mobile-nav__item"><a href="company.php#powerpoint">Aqua PowerPoint Presentation</a></li>
       <li class="mobile-nav__item"><a href="index.php#contact">Contact</a></li>
    </ul>
</nav>

<main>
    <article class="flex-columns flex-reverse" id="people">
        <div class="row">
            <?php 
            
            include('connect.php');
            $sql="SELECT * FROM content where id=1";
            $results=$conn->query($sql);
            while($final=$results->fetch_assoc()){?>
            <div class="column">
                <div class="column-2 bg-dark">
                    <h3><?php echo $final['name'] ?></h3>
                <p><?php echo $final['description'] ?></p>                  
                </div>
            </div>
            <div class="column">
                <div class="column-1">
                    <img src="../resources/uploads/<?php echo $final['picture'] ?>" alt="no image">
                </div>
            </div>
            <?php }?>
        </div>
    </article>
    <article class="flex-columns flex-reverse" id="mission">
        <div class="row">
            <?php 
            include('connect.php');
            $sql="SELECT * FROM content where id=2";
             $results=$conn->query($sql);
             while($final=$results->fetch_assoc()){?>
            <div class="column">
                <div class="column-2">
                <img src="../resources/uploads/<?php echo $final['picture'] ?>" alt="no image">
                </div>
            </div>
            <div class="column">
             <div class="column-2 bg-light">
             <h3><?php echo $final['name'] ?></h3>
                <p><?php echo $final['description'] ?></p> 
             </div>
         </div>
         <?php }?>
        </div>
    </article>
    <article class="flex-columns flex-reverse" id="goals">
        <div class="row">
            <?php

            include('connect.php');
            $sql="SELECT * FROM content where id=3";
                $results=$conn->query($sql);
                while($final=$results->fetch_assoc()){?>
            <div class="column">
                <div class="column-2 bg-dark">
                <h3><?php echo $final['name'] ?></h3>
                <p><?php echo $final['description'] ?></p> 
                </div>
            </div>
            <div class="column">
                <div class="column-1">
                <img src="../resources/uploads/<?php echo $final['picture'] ?>" alt="no image">
                </div>
            </div>
           <?php }?>
        </div>
    </article>
    <article class="flex-columns flex-reverse" id="vision">
        <div class="row">
        <?php
            include('connect.php');
            $sql="SELECT * FROM content where id=4";
            $results=$conn->query($sql);
            while($final=$results->fetch_assoc()){?>

            <div class="column" id="market">
                <div class="column-1">
                <img src="../resources/uploads/<?php echo $final['picture'] ?>" alt="no image">
                </div>
            </div>
            <div class="column">
             <div class="column-2 bg-light">
             <h3><?php echo $final['name'] ?></h3>
                <p><?php echo $final['description'] ?></p> 
             </div>
         </div>
         <?php }?>
        </div>
    </article>
    <article class="flex-columns flex-reverse" id="donation">
    <?php
            include('connect.php');
            $sql="SELECT * FROM content where id=5";
            $results=$conn->query($sql);
            while($final=$results->fetch_assoc()){?>
            <div class="column" id="medicinal">
                <div class="column-2 bg-dark">
           
        <div class="row">
           <h3><?php echo $final['name'] ?></h3>
                <i class="fas fa-donate fa-2x"></i>
                <p><?php echo $final['description'] ?></p> 
             </div>
                </div>
            </div>
           
        <?php }?>

    </article>
    <article class="flex-columns flex-reverse">
        <div class="row" id="video">
        <?php
            include('connect.php');
            $sql="SELECT * FROM content where id=6";
            $results=$conn->query($sql);
            while($final=$results->fetch_assoc()){?>
            <div class="column">
                <div class="column-1">
                <img src="../resources/uploads/<?php echo $final['picture'] ?>" alt="no image">
                </div>
            </div>
            <div class="column">
             <div class="column-2 bg-light">
             <div class="column-2 bg-dark">
                <h3><?php echo $final['name'] ?></h3>
                <p><?php echo $final['description'] ?></p> 
             </div>
         </div>
         <?php }?>
        </div>
    </article>
    <article class="flex-columns flex-reverse" id="audio">
        <div class="row">
        <?php
            include('connect.php');
            $sql="SELECT * FROM content where id=7";
            $results=$conn->query($sql);
            while($final=$results->fetch_assoc()){?>
            <div class="column">
                <div class="column-2 bg-dark">
                <h3><?php echo $final['name'] ?></h3>
                <p><?php echo $final['description'] ?></p> 
                </div>
            </div>
            <div class="column">
                <div class="column-1">
                   <!-- <img src="./images/audio.jpg" alt="">-->
                   <img src="../resources/uploads/<?php echo $final['picture'] ?>" alt="no image">
                </div>
            </div>
            <?php }?>
        </div>
    </article>
    <article class="flex-columns flex-reverse" id="powerpoint">
        <div class="row">
        <?php
            include('connect.php');
            $sql="SELECT * FROM content where id=8";
            $results=$conn->query($sql);
            while($final=$results->fetch_assoc()){?>
            <div class="column">
                <div class="column-1">
                <img src="../resources/uploads/<?php echo $final['picture'] ?>" alt="no image">
                </div>
            </div>
            <div class="column">
             <div class="column-2 bg-light">
             <h3><?php echo $final['name'] ?></h3>
                <p><?php echo $final['description'] ?></p> 
             </div>
         </div>
         <?php }?>
        </div>
    </article>

   </main>


   <footer class="footer bg-dark">
       <div class="social">
           <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
           <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
           <a href="#"><i class="fab fa-youtube fa-2x"></i></a>
           <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
           <a href="#"><i class="fab fa-linkedin fa-2x"></i></a>
           <a href="#"><i class="fab fa-telegram fa-2x"></i></a>
       </div>
       <p>Copyright &copy; 2021 NZWebGeek</p>
   </footer>
   <script src="script.js"></script>

   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

   <script>
       const navbar = document.getElementById('navbar');
       let scrolled = false;

       window.onscroll = function(){
           if(window.pageYOffset > 100){
                navbar.classList.remove('top');
                if(!scrolled){
                    navbar.style.transform = 'translateY(-70px)';
                }
                setTimeout(function(){
                    navbar.style.transform ='translateY(0)';
                    scrolled = true;
                }, 200);
           }
           else{
               navbar.classList.add('top');
               scrolled = false;
           }
       }

   </script>
</body>
</html>