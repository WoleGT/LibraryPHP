<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<style>
    div{
        width: 25%;
        height: 120%;
        background-color: white;
        border-radius: 10px;
        border-color: aqua;
        margin-left: 38%;
        margin-top: 5%;
        padding-left: 2%;
    }
    h1{
        text-align: center;
        margin-top: 3%;
        color: white;
    }
    img{
        border-radius: 10px;
    }
    h4{
        padding-top: 5%;
        padding-bottom: 5%;
    }
    #pw{
        text-decoration:none;
        margin-left: 9em;
    }
    button{
        width: 90%;
    }
    .seperator{   
        display: flex;
        align-items: center;
        text-align: center;
        
    }
    .seperator::before,
    .seperator::after
    {
        content: '';
        flex: 1;
        border-bottom: 1px solid #000;
    }
    .seperator:not(empty)::before
    {
        margin-right: .10em;
    }
    .seperator:not(empty)::after
    {
        margin-left: .10em;
    }
    #newAcc{
        text-decoration:none;
    }
    footer {
    word-spacing: 2px;
    text-align: center;
    }
    input{
        
    }
    
</style>
<body class="bg-primary">
    <h1>Spicy Travels n Tour Ltd <br><img src="./img/spicy banner.jpg" width="5%", height="5%"></h1>
    <div>
        <h4>Consultation Booking </h4>
        <form action="loginprocess.php" method="post">
            <p>
                <label>Email Address</label>
                <input type="text" name="email" style="width: 90%;" placeholder="me@example.com">
            </p>
            
                Password <a href="forgotpassword.php" id="pw">Forgot?</a>
                <input type="password" name="password" style="width: 90%"; autocomplete="current-password" required="" id="id_password">
                <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                <br><input type="radio"> Remember Me
        
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

       
            <hr>
            <!-- <div class="seperator">or</div> -->
            <button class="btn-xs bg-info"><a href="https://facebook.com"></a><i class="bi bi-facebook"></i> Sign in with Facebook</button>
            
            <br>
            <br>
            <p>New here? <a href="newaccform.php" id="newAcc">Create an Account</a></p>

    </div>

    <footer style="color:black">All Right Reserved 2024 ©Spicy Travels n Tour Ltd RC: 1549808.     Developer email: contact@wolegt.dev</footer>
    
    </main>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#id_password');

        togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
    // toggle the eye slash icon
       this.classList.toggle('fa-eye-slash');
       });
    </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
























