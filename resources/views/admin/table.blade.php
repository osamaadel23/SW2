<link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<script src="{{asset('js/jquery-3.1.1.js')}}"></script>
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>


<style type="text/css">
body
{height:1000px;

}
.form-style-10{
	width:800px;
	padding:30px;
	margin:40px auto;
	background: #FFF;
	border-radius: 10px;
	-webkit-border-radius:10px;
	-moz-border-radius: 10px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
	-webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    display: none;
    background-image:url("{{ asset('adminStyle/img/plexus-background-1.jpg') }}");
}
.form-style-10 .inner-wrap{
	padding: 30px;
	background: #F8F8F8;
	border-radius: 6px;
	margin-bottom: 15px;
}
.form-style-10 h1{
	background:#222;
	padding: 20px 30px 15px 30px;
	margin: -30px -30px 30px -30px;
	border-radius: 10px 10px 0 0;
	-webkit-border-radius: 10px 10px 0 0;
	-moz-border-radius: 10px 10px 0 0;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
	display: block;
	margin-top: 2px;
	font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
	display: block;
	font: 13px Arial, Helvetica, sans-serif;
	color: #888;
	margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
	display: block;
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	width: 100%;
    height:50px;
	padding: 8px;
	border-radius: 6px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border: 2px solid #fff;
	box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
	-webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    background:lightsteelblue;
}

.form-style-10 .section{
	font: normal 20px 'Bitter', serif;
	color:mintcream;
	margin-bottom: 5px;
}
.form-style-10 .section span {
	background: #222;
	padding: 5px 10px 5px 10px;
	position: absolute;
	border-radius: 50%;
	-webkit-border-radius: 50%;
	-moz-border-radius: 50%;
	border: 4px solid #fff;
	font-size: 14px;
	margin-left: -45px;
	color: #fff;
	margin-top: -3px;
}
.form-style-10 input[type="button"], 
.form-style-10 input[type="submit"]{
	background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
    width:200px;
    height:50px;
}
.form-style-10 input[type="button"]:hover,
.pure-button:hover,
.form-style-10 input[type="submit"]:hover{
	background: #2A6881;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}


.pure-button
{
    
    background: #2A88AD;
	padding: 8px 20px 8px 20px;
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	color: #fff;
	text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
	font: normal 30px 'Bitter', serif;
	-moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	-webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
	border: 1px solid #257C9E;
	font-size: 15px;
    width:100px;
    height:50px;
    
}





.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Select image';
  color: black;
  display: inline-block;
  background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}

body {
  padding: 20px;
}


::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
</style>


@extends('admin.app')
@section('content')


<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Tables</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    FeedBack
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                         
                         @foreach($contact as $one)
                                <tr>
                                    <td aria-required="true"> {{$one->name}} </td>
                                    <td aria-required="true"> {{$one->email}} </td>
                                    <td aria-required="true"> {{$one->phone}} </td>
                                    <td aria-required="true"> {{$one->message}} </td>
                                </tr>
                        @endforeach
                         
                         
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.table-responsive -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-6 -->
                       
                <!-- /.container-fluid -->
            </div>
            
    <!-- Update button -->
    <button class="pure-button" onclick="show_update()">
           <i class="fas fa-bars"></i>
    </button>

    <!-- End Update button -->
            
         <!-- Add-speaker form -->   
            <div class="form-style-10">
                    <h1>Add new speaker!<span>Make our site looks better!</span></h1>
                    <form method="get" action="/submit">
                    {{csrf_field()}}
                        <div class="section"><span>I</span>First Name & Address</div>
                        <div class="inner-wrap">
                            <label>Your Full Name <input id="f1" type="text" name="field1" /></label>
                            <label>Address <input id="f2" type="text" name="field2"></label>
                        </div>
                    
                        <div class="section"><span>II</span>Email</div>
                        <div class="inner-wrap">
                            <label>Email Address <input id="f3" type="email" name="field3" /></label>
                        </div>
                    
                        <div class="section"><span>III</span>Description</div>
                            <div class="inner-wrap">
                            <label>Description<textarea id="f4" type="text" name="field4" style="height:100px"></textarea></label>

                        </div>

                        <div class="section"><span>IV</span>Image</div>
                            <div class="inner-wrap">
                            <label>image<input id="f5" type="file" class="custom-file-input" name="field5">
                            <span id="span-file" style="float:right"></span>
                            </label>

                        </div>
                        <div class="button-section">
                         <input id="submitbtn" type="submit" class="custom-file-input" name="add-btn" disabled/>
                        </div>
                    </form>
                    </div>
                    

        <!-- End Add-speaker form --> 

@endsection




<script>

    var update_from = document.getElementsByClassName("form-style-10");
    var count = 0;

    //var btn = document.getElementById('submit-btn');


    function fields()
    {
        
        
        //field1-name
        if(f1.value=='')
        {
            f1.style.background='rgba(244, 92, 66,0.5)';
        }else if(f1.value!='')
        {
            f1.style.background='rgba(244, 92, 66,0)';
        }
        
        //field2-address
        if(f2.value=='')
        {
            f2.style.background='rgba(244, 92, 66,0.5)';
        }else if(f2.value!='')
        {
            f2.style.background='rgba(244, 92, 66,0)';
        }

        //field3-email
        if(f3.value=='')
        {
            f3.style.background='rgba(244, 92, 66,0.5)';
        }else if(f3.value!='')
        {
            f3.style.background='rgba(244, 92, 66,0)';
        }

        //field4-description
        if(f4.value=='')
        {
            f4.style.background='rgba(244, 92, 66,0.5)';
        }else if(f4.value!='')
        {
            f4.style.background='rgba(244, 92, 66,0)';
        }

        //field5-image
        if(f5.value=='')
        {
            f5.style.background='rgba(244, 92, 66,0.5)';
            document.getElementById("span-file").innerHTML="";
            
        }else if(f5.value!='')
        {
            f5.style.background='rgba(244, 92, 66,0)';
            document.getElementById("span-file").innerHTML=f5.value;
        }
        
    }

    
    function button_state()
    {
        if(f1.value!='' && f2.value!='' && f3.value!='' && f4.value!='' && f5.value!='')
        {
            submitbtn.style.background='#123';
            submitbtn.style.color='black';
            submitbtn.disabled=false;
        }
        else{
            submitbtn.style.background='#123';
            submitbtn.style.color='#999';
            submitbtn.disabled=true;
        }

    }

    setInterval(button_state,1);
    setInterval(fields,1);


  
  /* ----------------------------------- Jquery --------------------------------------------*/

    $(document).ready(function(){
        
        $(".pure-button").click(function(){
            $(update_from).slideToggle(800);
            count+=1;
            if(count %2 == 0){
                $("span").hide(800);
                
            }else{
                $("span").show(800);
                
            }
            });

    });






    
    
</script>