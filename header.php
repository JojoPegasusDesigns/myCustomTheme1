<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>MY PORTFOLIO HOME</title>
    <style>

    .page {
      background-image: url("images/mountainnight.jpg");
      background-size: cover;
      background-attachment: fixed;
    }

    #myNavBar ul {
     display: flex;
     padding: 0px;
    }
    #myNavBar li {
      list-style-type: none;
      display: inline-block;
      text-align: center;
      flex: 1;
      padding: 20px;
    }

     #myNavBar li:first-child a {
       color: white;
     }
     #myNavBar li:nth-child(2) a {
       color: white;
     }
     #myNavBar li:nth-child(3) a {
       color: white;
     }
     #myNavBar li:nth-child(4) a {
       color: white;
     }

     #myNavBar ul li:hover {
       background: black;
     }

     #myNavBar ul li:active {
      background: linear-gradient(to left, lightblue, darkblue, black);
    }
     #block {
       padding: 80px;
       text-align: center;
       font-size: 35px;
       color: white;
     }
     #p1 {
       text-align: center;
       color: white;
       font-size: 28px;
     }
     #imgContainer {
       display: flex;
       flex-wrap: wrap;
       justify-content: center;
     }
     #imgContainer {
       background-color: white;
       opacity: 90%;
     }
     img {
       height: 400px;
       padding: 30px;
     }
     #foot {
       color: lightblue;
       opacity: 70%;
       bottom: 0;
       width: 100vw;
       text-align: center;
       margin-top: 190px;
     }
     #p2 {
       text-align: center;
       color: white;
       font-size: 30px;
     }
     #p3 {
       text-align: center;
       color: white;
       font-size: 20px;
       margin-top: 70px;
     }
     #countdown {
       color: white;
       text-align: center;
       opacity: 80%;
     }

    </style>

  <?php wp_head(); ?>

  </head>
  <body <?php ?> class="page">
