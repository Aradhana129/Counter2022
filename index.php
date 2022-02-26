<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
  body {

    padding: 50px;
    position: absolute;
    left:20%;
    text-align: center;
    background-color: #6c757d;
  }



  p {
  color: black;
  margin: 0 50px;
  font-size:45px;
  border: 5px solid black;
  padding:10px;
  border-radius: 50px ;
  }
  .container {
    font-size:45px;
    padding:0px;
    margin:50px;

    }
  .name{
  font-size:40px;
  color: solid black;
  margin-top:50px;
  margin-left:40px;
  margin-Right:40px;
  border-radius:5px;
  background-color:#008080;
  box-shadow: 3px 3px;

  }
    .start {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;

        }
.base {
            color: #ffff;
            margin-right: 20px;
            font-size: bold;
            text-align: end;

          }
#count{
  color: #ffff;
  opacity: 0.7;
}


    </style>
    <title>Counter </title>
</head>

<body>
    <script>
        var sum = 0;
        document.getElementById("count").innerHTML = sum;
        function myincrement() {
            sum = sum + 1;
            document.getElementById("count").innerHTML = sum;

        }

        function myreset() {
            sum = 0;
            document.getElementById("count").innerHTML = sum;
        }

        function mydecrement() {
            sum = sum - 1;
            document.getElementById("count").innerHTML = sum;

        }
    </script>
    <h1>Count Number</h1>
    <p id="count">0</p>
    <div="container">
        <button class="name" onclick="myincrement()">+</button>
        <button class="name" onclick="myreset()">Reset</button>
        <button class="name" onclick="mydecrement()">-</button>
        </div>
        <div class="start">

            <h3 class="base"><u>Developed By:- Aradhana Patel </h3>
        </div>
</body>

</html>
