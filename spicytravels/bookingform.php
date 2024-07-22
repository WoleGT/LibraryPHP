<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>

form {
  padding       : 1em 2em;
  }
label {
  display       : inline-block;
  line-height   : 1.3em;
  margin        : 1em .6em;
  font-size     : .8em;
  }
input {
  display       : block;
  margin-bottom : .6em;
  }

  </style>
<body>

    <form action="bookingformprocess.php" method="post">
          Holiday<input type="radio" name='Holiday' value="1">
          Visa<input type="radio" name='Visa' value="2">
          Migration<input type="radio" name='Migration' value="3">
          Tour<input type="radio" name='Tour' value="4">
        Date:
        <input name="date" type="date">
        </label>
        
        <label>
        Time: 
        <input name='time' type="time">
        </label>
        <p>
        <button type="submit" class="btn btn-success">Submit</button>
        </p>
    </form>

    <footer style="color:black">All Right Reserved 2024 ©Spicy Travels n Tour Ltd RC: 1549808.     Developer email: contact@wolegt.dev</footer>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
