<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>

    div{
        width: 50%;
        margin: 10px
    }

    i{
        color:blue;
    }

</style>

<body>
<div>

    <form action="newaccformprocess.php" method="post" id="my-form">
        <h5>Please fill form below to create an Account</h5>
        <p>
            <label>Firstname</label>
            <input type="text" name="firstname" class="form-control" style="width: 50%;">
        </p>
        <p>
            <label>Lastname</label>
            <input type="text" name="lastname" class="form-control" style="width: 50%;">
        </p>
        <p>
            <label>Email</label>
            <input type="text" name="email" class="form-control" style="width: 50%;">
        </p>
        <p>
            <label>Phone Number</label>
            <input type="text" name="phone_number" class="form-control" style="width: 50%;">
        </p>
        <p>
            <label>
            Facebook url<input type="text" name="facebook" class="form-control" style="width: 160%;">
            <i>Optional</i>
            </label>
        <p>
            <label>
            Password<input type="password" name="password" class="form-control" style="width: 160%;">
            </label>
           
        </p>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>
