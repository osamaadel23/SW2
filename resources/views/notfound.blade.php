<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <style>
       
              
  body {
    background-color: #345;
    background-image: linear-gradient(to left, #0009, transparent);
    color: #eee;
    font-family: 'Lato', sans-serif;
    padding: 0 20px;
    box-sizing: border-box;
  }
        
        a:link, a:visited {
          background-color: #346;
          color: white;
          padding: 20px 25px;
          text-align: center;
          text-decoration: none;
          display: inline-block;
          width:200px;
          margin:50px 90px;
          
        }
        
        a:hover, a:active {
          background-color: #333;
        }
        </style>

</head>
<body>
    
</body>
</html>

<strong style="color:tomato;width:200px;height:50px">You're already logged in !!</strong>

</br></br>
<a href="{{url('admin/index')}}">Dashboard</a>
<a href="{{ action('loginController@checklogout') }}">Logout</a>
<a href="{{url('admin/table')}}">Table</a>