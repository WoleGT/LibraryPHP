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

  #date-time-Str{
    color: red;
  }
</style>
<body>

    <form action="bookingformprocess.php" method="post" id="my-form">
        <h2>Consultation Appointment Booking</h2>
        <p>
            <label>firstname</label>
            <input type="text" name="firstname" class="form-control">
        </p>
        <p>
            <label>lastname</label>
            <input type="text" name="lastname" class="form-control">
        </p>
        <p>
            <label>email</label>
            <input type="text" name="email" class="form-control">
        </p>
        <p>
            <label>Phone Number</label>
            <input type="text" name="phone_number" class="form-control" >
        </p>
        <p>
            <label>
            Password:<input type="password" name="password" class="form-control" >
            </label>
           
        </p>
        <p>
        <label>
        Date:
        <!-- <input name="inDate" type="date" name="date"> -->
        <input name="date" type="date">
        </label>
        </p>
        <label>
        Time: 
        <!-- <input name="inTime" type="time" name="time"> -->
        <input name='time' type="time">
        </label>
        <br><br>
        <button type="submit" class="btn btn-danger">Click to Reconfirm Date & Time before submission</button>
        <p id="date-time-Str">d=??? t=???</p>
        </p>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>

    <!-- <script type="text/javaScript">

const 
  myForm = document.querySelector('#my-form')
, dtStr  = document.querySelector('#date-time-Str')  
, localDt_now =_=>
    {
    let now = new Date()
    now.setMinutes(now.getMinutes() - now.getTimezoneOffset())
    now.setSeconds(0)       // remove seconds
    now.setMilliseconds(0) // remove milliseconds
    return now
    }

/* ------------------------------------------- *\
*      set date & time  !                       *
\* ------------------------------------------- */

myForm.inDate.valueAsDate = localDt_now()   // current date
myForm.inTime.valueAsDate = localDt_now()   // current time

/*----------------------------------- Bonus -*\
*     some Intl methods to use...             *
\*-------------------------------------------*/
const
  fxD = // dates Formats
    { ymd : Intl.DateTimeFormat( 0, { year: 'numeric', month: '2-digit', day: '2-digit' })
    , hm  : Intl.DateTimeFormat( 0, { hour12: false, hour: '2-digit', minute: '2-digit' })
    }
, fxD_parts = (d,fx) => fx.formatToParts(d).reduce((o,{type,value})=>(o[type]=value,o),{})
  ;

/*------------------------------------ Bonus -*\
*  reverse action = get date & time values !   *
\*--------------------------------------------*/
// add TZ offset to get locale values
const getLocalDt = dt => dt.setMinutes(dt.getMinutes() + dt.getTimezoneOffset())


/*----------------------------------- Bonus -*\
*  demo...                                    *
\*-------------------------------------------*/
myForm.onsubmit = e =>
  {
  e.preventDefault()

  let
    dt_D = fxD_parts( getLocalDt( myForm.inDate.valueAsDate), fxD.ymd )
  , dt_T = fxD_parts( getLocalDt( myForm.inTime.valueAsDate), fxD.hm )
    ;
  dtStr.innerHTML = ` date = ${dt_D.year} - ${dt_D.month} - ${dt_D.day} <br>`
                  + ` time = ${dt_T.hour} : ${dt_T.minute}` 
  }

    </script>

     -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
