<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="/js/script.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <title>Registration</title>
</head>
<body>
<!--
<div class="container">
    <div class="flat-design-form">
        <ul class="tabs">
            <li><a class="active" href="#login" id="login-tab" name="login-tab"><span id="login_icon"></span> Login</a></li>
            <li><a href="#register" id="register-tab" name="register-tab"><span id="signup_icon"></span> Register</a></li>
        </ul>
    </div>
</div>
-->
<div class="container form">
    <ul class="nav nav-tabs nav-justified id="myTab" role="tablist"">
        <li class="nav-item">
            <a class="nav-link active" id="registration-tab" data-toggle="tab" href="#registration" role="tab" aria-controls="registration" aria-selected="true">Registration</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true">Login</a>
        </li>
    </ul>
    <div class="tab-content pt-4" id="myTabContent">
        <div class="tab-pane fade show active" id="registration" role="tabpanel" aria-labelledby="registration-tab"><?php include('login/reg.php');?></div>
        <div class="tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab"><?php include("login/login.php") ?></div>
    </div>

</div>
</body>
</html>