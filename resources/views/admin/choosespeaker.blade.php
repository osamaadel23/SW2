
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
        
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
  
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
img{
    width:60px;
    height:60px;
    margin-left:100px
}

select{
    width: 150px;
    height:35px;
}

.soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   margin: 20px;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 300px;
}

.soflow-color{
   color: #fff;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(left, #345, #347);
   background-color: #234;
   -webkit-border-radius: 20px;
   -moz-border-radius: 20px;
   border-radius: 20px;
   padding-left: 15px;
}
label{
    color:lightblue;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-style: italic
}

#btn{
    background: transparent; 
    border: 2px solid #0099CC;
    color: #0099CC;
    border-radius: 6px;
    border: none;
      color: white;
      padding: 16px 32px;
      text-align: center;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      -webkit-transition-duration: 0.4s; /* Safari */
      transition-duration: 0.4s;
      cursor: pointer;
      text-decoration: none;
      text-transform: uppercase; 
}

#btn:hover{
    background-color: #008CBA;
      color: black;
}


@import url('https://fonts.googleapis.com/css?family=Inconsolata|Lato:300,400,700');
html, body, h1, h2, h3, h4, h5, h6, p, li, ol, ul, pre {
	margin: 0;
	padding: 0;
}
html, body { min-height: 100%; }

body {
	background-color: #345;
	background-image: linear-gradient(to bottom, #0009, transparent);
	color: #eee;
	font-family: 'Lato', sans-serif;
	padding: 0 20px;
	box-sizing: border-box;
}
code {
	background: #fff1;
	font-family: 'Inconsolata', monospace;
	padding: .2em .4em;
}

.content {
	background-color: #fff;
	border-radius: 8px;
	box-sizing: border-box;
	color: #666;
	font-size: 1.6em;
	line-height: 1.4em;
	margin: 20px auto;
	margin-top: 80px;
	padding: 20px;
	width: 100%;
  max-width: 800px;

}
.content ul {
	margin: .5em 2em;
	padding: 0;
}

#footer {
	background-color: #246c;
	background-image: linear-gradient(to bottom, transparent, #0009);
	border-top: 1px solid #fff3;
	box-shadow: inset 0 1px 0 #fff3, 0 0 32px #000;
	overflow: hidden;
	padding: 8px;
	position: fixed;
	left: 0;
	right: 0;
	bottom: 0;
	z-index: 9001;
}
#footer a {
	color: #85c6f6;
	padding: 1em 0;
	text-decoration: none;
}
#footer ul {
	display: flex;
	list-style: none;
	justify-content: center;
	font-size: 2em;
	font-weight: 300;
}
#footer ul li {
	padding: 0 .5em;
}

/* Appearance */
.links {
	background-color: #123;
	background-image: linear-gradient(to bottom, #0003, transparent);
	border-bottom: 1px solid #0003;
	box-shadow: 0 0 32px #0003;
	font-size: 2em;
	font-weight: 300;
}
.links > a {
	color: #9ab;
	padding: .75em;
	text-align: center;
	text-decoration: none;
	transition: all .5s;
}
.links > a:hover {
	background: #ffffff06;
	color: #adf;
}
.links > .line {
	background: #68a;
	height: 1px;
	pointer-events: none;
}

/* The Magic */
#header {
	position: fixed;
	top: 0;
	left: 0;
  right: 0;
}
.links {
	display: grid;
	grid-template-columns: repeat(var(--items), 1fr);
  position: relative;
  font-size:15px;
}
.links > .line {
	opacity: 0;
	transition: all .5s;
	position: absolute; 
	bottom: 0;
	left: var(--left, calc(100% / var(--items) * (var(--index) - 1)));
	width: var(--width, calc(100% / var(--items)));
	--index: 0;
}
.links > a:hover ~ .line {
	opacity: 1;
}

.links > a:nth-of-type(1):hover ~ .line { --index: 1; }
.links > a:nth-of-type(2):hover ~ .line { --index: 2; }
.links > a:nth-of-type(3):hover ~ .line { --index: 3; }
.links > a:nth-of-type(4):hover ~ .line { --index: 4; }
.links > a:nth-of-type(5):hover ~ .line { --index: 5; }
.links > a:nth-of-type(6):hover ~ .line { --index: 6; }
.links > a:nth-of-type(7):hover ~ .line { --index: 7; }
.links > a:nth-of-type(8):hover ~ .line { --index: 8; }
.links > a:nth-of-type(9):hover ~ .line { --index: 9; }
.links > a:nth-of-type(10):hover ~ .line { --index: 10; }
.links > a:last-of-type:hover ~ .line { --index: var(--items); }

</style>


</head>
<body>
    
<header id="header">
	<nav class="links" style="--items: 5;">
		<a href="{{url('/admin/index')}}">Dashboard</a>
		<a href="{{url('/admin/table')}}">Tables</a>
    <a href="#">Team</a>
    <a href="#">Events</a>
		<a href="{{ action('loginController@checklogout') }}">Logout</a>
		<span class="line"></span>
	</nav>
</header>

	

<section>

  <h1>Current speakers </h1>
  <div class="tbl-header">
    <table id="mytable" cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Address</th>
          <th>Email</th>
          <th>Image</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
            @foreach($speakers as $speaker)
            <tr>
                <td aria-required="true">{{$speaker->id}}</td>
                <td aria-required="true">{{$speaker->name}}</td>
                <td aria-required="true">{{$speaker->address}}</td>
                <td aria-required="true">{{$speaker->email}}</td>
                <td>
                    
                <img class="img-responsive g-width-100-percent--xs" src="{{asset('adminStyle/img/speakers/'.$speaker->image)}}" alt="Image">

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</section>

</br>




<label>Speaker I</label>&nbsp;&nbsp;&nbsp;
<select id="fc1" class="soflow-color" name="speaker1">
        <option>Select speaker</option>
        @foreach($speakers as $speaker)
        <option>{{$speaker->name}}</option>
        @endforeach
</select>

</br>
<label>Speaker II</label>&nbsp;
<select id="fc2"  class="soflow-color" name="speaker2" disabled >
        <option>Select speaker</option>
        @foreach($speakers as $speaker)
        <option>{{$speaker->name}}</option>
        @endforeach
</select>

</br>

<label>Speaker III</label>
<select id="fc3"  class="soflow-color" name="speaker3" disabled>
        <option>Select speaker</option>
        @foreach($speakers as $speaker)
        <option>{{$speaker->name}}</option>
        @endforeach
</select>

</br>
<label>Speaker IV</label>
<select id="fc4"  class="soflow-color" name="speaker4" disabled>
        <option>Select speaker</option>
        @foreach($speakers as $speaker)
        <option>{{$speaker->name}}</option>
        @endforeach
</select>

</br>



<form method="get" action="/shownspeakers" name="actualform">
    <button id="btn" type="submit" disabled>Go</button>

    <input id="f1" type="text" name="speaker1" hidden/>
    <input id="f2" type="text" name="speaker2" hidden/>
    <input id="f3" type="text" name="speaker3" hidden />
    <input id="f4" type="text" name="speaker4" hidden/>
</form>

</body>
</html>


<script>
  
    var arr=[];
    for (var i=0; i<fc1.length; i++)
    {
        arr.push(fc1[i].value);
    }

    arr.shift();


function select_manage()
{
    
    var op1 = fc1.value;
    var op2 = fc2.value;
    var op3 = fc3.value;
    var op4 = fc4.value;

        if(fc1.value !="Select speaker")
            {
                fc2.disabled = false;
                fc1.disabled = true;

                for (var i=0; i<fc2.length; i++)
                {
                    if (fc2.options[i].value == fc1.value )
                        fc2.remove(i);
                }
            }
            if(fc2.value !="Select speaker")
            {
                fc3.disabled = false;
                fc2.disabled = true;

                for (var i=0; i<fc3.length; i++)
                {
                    if (fc3.options[i].value == fc2.value || fc3.options[i].value == fc1.value)
                        fc3.remove(i);
                }
            }

            if(fc3.value !="Select speaker")
            {
                fc4.disabled = false;
                fc3.disabled = true;

                for (var i=0; i<fc4.length; i++)
                {
                    if (fc4.options[i].value == fc3.value || fc4.options[i].value == fc2.value || fc4.options[i].value == fc1.value)
                        fc4.remove(i);
                }
            }
}

function checkfields()
{
    if(fc1.value !="Select speaker" && fc2.value !="Select speaker" && fc3.value !="Select speaker" && fc4.value !="Select speaker" )
        {

            btn.disabled = false;
            btn.style.background = 'transparent';

        }else{

            btn.disabled = true;
            btn.style.background = '#337';

        }
    
        


    f1.value=fc1.value;
    f2.value=fc2.value;
    f3.value=fc3.value;
    f4.value=fc4.value;
}



setInterval(checkfields,1);
setInterval(select_manage,1);


    

    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

</script>