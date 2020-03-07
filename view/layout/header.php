<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./public/css/style.css?v=<?=rand()?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../../public/css/materialize.min.css?v=<?=rand()?>"  media="screen,projection"/>
    <link rel="stylesheet" href="../../public/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <nav>
      <a href="#" data-target="slide-out" class="sidenav-trigger menupt"><i class="material-icons"><img id='menuimg' src="../../public/images/menu.png" alt="">
  </i></a> 
         <div id="bigpgdiv">
      <?php
      if (isset($_COOKIE["u_id"])) {
      ?>
      <li class="pagesbig " ><span id="sign_out"  class="header_word page">Sign out</span></li>
      <li class="pagesbig pgbighome" ><span id="home"  class="header_word">Home</span></li>
      

      <?php
      }
      else{
        ?>
        <li class="pagesbig"  ><span id="sign_in" class="header_word">Sign in</span></li>
      <li class="pagesbig" ><span id="sign_up" class="header_word">Sign up</span></li>
      <?
      }
      ?>
    </div>
  <ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
       
      </div>
    </li>
    <div class="pagesn">
     <?php
      if (isset($_COOKIE["u_id"])) {
      ?>
      <li class="pages" id="home_page" >Home</li>
      <li class="pages page" id="signout_page">Sign out</li>

       <?php
      }
      else{
        ?>
      <li class="pages" id="signin_page">Sign in</li>
      <li class="pages" id="signup_page">Sign up</li>
      <?
      }
      ?>
    </div>
  </ul>
      <div class='logotp'></div> 
      <div id="hide">
      </div>
 
  </nav>