<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rev'Up T-shirt Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="icon" href="img/logo/logo1.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  body{
    background-color:#eee;
  }
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .content-wrapper{
    padding:50px 20px 50px 20px;
  }

  .row{
    padding:10px 0px 10px 0px;
  }

  .load-more{
    text-align:center;
    width:100%;
    padding-top:10px;
  }

  #loadMore {
    padding: 10px;
    text-align: center;
    background-color: #007bff;
    color: #fff;
    border-width: 0 1px 1px 0;
    border-style: solid;
    border-color: #fff;
    box-shadow: 0 1px 1px #ccc;
    transition: all 600ms ease-in-out;
    -webkit-transition: all 600ms ease-in-out;
    -moz-transition: all 600ms ease-in-out;
    -o-transition: all 600ms ease-in-out;
  }
  
  #loadMore:hover {
      background-color: #fff;
      color: #33739E;
  }

  .totop {
    position: fixed;
    bottom: 10px;
    right: 20px;
    z-index:10;
  }

  .totop a {
      display: none;
  }

  .btn{
    border-radius:0px;
  }

  .btn.btn-danger{
    background-color:#e51b23;
  }

  .container-fluid {
    padding: 60px 50px;
  }

  .slideanim {visibility:hidden;}

  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

  @media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0 !important;
    top: 0 !important;
  }
}

  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0;background-color:white">
  <img src="img/logo/logo.png" width="50%"/>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
  <a class="navbar-brand" href="home.php"><i class="fa fa-home"></i> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home.php">Shop Now<sup><span class="badge badge-danger">New</span></sup></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="transactionlist.php">Find Transaction</a>
      </li>
    </ul>
  </div>  
</nav>