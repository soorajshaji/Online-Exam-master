<html>
<head>
    <title>welcome</title>
    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box;}
input[type=submit]
 {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
.class
{
    font-style:italic;
}

img{
    width:200px;
    height:200px;
}
.pos{
    position:absolute;
    top:30%;
    left:50%;
    transform:translate(-50%,-50%);
    padding: 20px;
    border-radius: 10px;
    background-color: white;
}
.cen{
    text-align:center;
}
.btn-success {
    color: #fff;
    background: linear-gradient(145deg, rgba(31,50,208,1) 0%, rgba(166,65,175,1) 60%, rgba(188,67,169,1) 71%, rgba(252,70,107,1) 100%);
}
</style>
</head>
<body style="background-color: black;">

<div class="pos" style="margin-top:100px;box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;" >

<h1>MOTOR VEHICLE DEPARTMENT</h1>

<div class="cen">
    <img src="{{asset('logo.png')}}">
<h2 class="class">WELCOME</h2>
   <h2> LEARNER'S LICENSE TEST</h2>


    <a href="{{url('home')}}"><input class="btn-success" type="submit" value="login"></a>

</div>
</div>
</body>
</html>
