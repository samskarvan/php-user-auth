<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>PHP usesr Auth Demo</title>
</head>
<body>
    <header class="container">
    <h1 class="center">More professinal bc Androw called me out</h1>
    <h2 class="center">Ahora con AJAX</h2>
    <h3 id="auth-error"class="center red-text darken-2"><?=isset($_GET['auth_error']) ? 'Username and Password do not match': ''?></h3>
    <div class="row">
    <form method="post" class"col s12">
        <div class="row">
            <div class="input-field col s6">
                <input type="text" name="username" id="username">
                <label for="username">Username</label>
            </div>
            <div class="input-field col s6">
                <input type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>
    </div>
    <div class="row center">
        <button type="button" id="sign-in" class="btn">Sign In</button>
    </div>
    </form>
    </div>
    </header>
    <script>
    $('#sign-in').click(()=>{
        const dataToSend={
            username:$('#username').val(),
            password:$('#password').val()
        };

        console.log('sign-in clicked', dataToSend);

        $.ajax({
            url:'./db_auth_ajax.php',
            data: dataToSend,
            method: 'POST',
            dataType: 'json',
            success: res=>{
                console.log('server res:', res);
                if(res.success){
                    window.location.href='/profile.php';
                }else{
                    $('#auth-error').text(res.error);
                }
            }
        })

    });
    </script>
</body>
</html>