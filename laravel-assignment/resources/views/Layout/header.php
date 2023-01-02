<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
.navbar{
  background:white;
}
.nav-link{
  color:red;
  font-weight: bold;
}
  </style>
</head>
<body>

<nav class="navbar navbar-expand-md ">
  <a class="navbar-brand" href="#"><img src="https://miro.medium.com/max/1400/1*m0s2io11J82PR7miqan92w.png" height="150px" width="150px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="/">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employees/create">ADD EMPLOYEE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/employees">SHOW EMPLOYEES</a>
      </li>    
    </ul>
  </div>  
</nav>


