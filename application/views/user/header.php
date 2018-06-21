<?php session_start(); ?>

<head>
    <title>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/css/user/header.css") ?>">
</head>
<div class="header">
    <div class="fix">
        <div class="info">
            <div class="container">
                <p>Email : qwerty@gmail.com Điện thoại : 1234567890</p>
            </div>
        </div>
        <div class="menu">
            <div class="container">
                <ul>
                    <li><a href="<?php echo "http://localhost/doan1/index.php/user/Home" ?>"><i class="material-icons">home</i>
                            <span>Trang chủ </span></li>
                    </a></li>
                    <li> Page</li>
                    <li> Page</li>
                    <li> Page</li>
                </ul>
                <div class="search">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="material-icons">search</i></button>
                    </form>
                </div>
                <div class="profile">
                    <img class="img-circle" src="<?php echo base_url("public/img/icon/profile.png"); ?>" alt="">
                    <span class="name"><?php if (isset($_SESSION["name"])) echo $_SESSION["name"]; ?></span>
                </div>
            </div>
            <button class="logout">Log out</button>
        </div>
    </div>
</div>
