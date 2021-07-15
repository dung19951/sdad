<?php
require '../../vendor/autoload.php';
use App\Controller\UserController;
if ($_SERVER['REQUEST_METHOD']=='POST'){
    $userController= new UserController();
    $userController->singupp();}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<form class="form-signin" style="text-align: center;background: #2e6e9e"method="post" >
    <img class="mb-4" src="https://ae01.alicdn.com/kf/H41c60f56dfd9458884b83ae39307a63b0/Hello-LED-n-Neon-K-Ch-Neon-K-B-ng-Ng-y-L-Ti-c-H.jpg_Q90.jpg_.webp" alt="" width="300" height="250">
    <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
    <input type="text" id="inputEmail" class="form-control-lg" placeholder="Username" required="" autofocus=""name="un"><br>
    <input type="password" id="inputPassword" class="form-control-lg" placeholder="Password" required=""name="pw"><br>
    <button class="btn btn-primary" type="submit" name="btn-submit">Sign in</button>

</form>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>

