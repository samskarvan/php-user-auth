<?php
session_start();

if(empty($_SESSION['user'])){
    header('location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <title>PHP usesr Auth Demo</title>
</head>
<body>
    <header class="container">
    <h1 class="center">Welcome back, <?php echo $_SESSION['user']['name'] ?></h1>
    <div class="row center">
    <a class="btn" href="./sign_out.php">Sign Out</a>
    </div>
    </div>
    
    </form>
    </div>
    </header>
</body>
</html>