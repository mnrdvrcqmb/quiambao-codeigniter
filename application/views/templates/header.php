<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <title>Post App</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary " data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog Post</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url();?>"><b>Home</b></a>
        </li>  

        <li class="nav-item">
          <a class="nav-link" href="add"><b>Add New Posts</b></a>
        </li>

        <?php if($this->session->logged_in){?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>logout"><b>Logout</b></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"><b><?= $this->session->fullname;?></b></a>
          </li>
        <?php } else {?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>login"><b>Login</b></a>
          </li>
        <?php }?>
      </div>

      <div class="ms-auto">
        <form class="d-flex" role="search" method="post" action="<?= base_url();?>search">
          <input class="form-control p-2" type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-success p-2" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>


<div class="container mt-5">