<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('css/login.css')}}" rel="stylesheet"/>
    
    <script src="{{asset('js/jquery-3.1.1.js')}}"></script>
    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>


</head>
<body>

        <div class="form-style-5">
                <form method='post' action='/checklogin' name="form_login">
                
                {{csrf_field()}}
                

                <fieldset>
                <legend><span class="number">-</span> Login</legend>
                <input id='f1' type="text" name="field1" placeholder="Your Username *" required><br/>
                <input id='f2' type="password" name="field2" placeholder="Your Password *" required>
                <div class="dvpass" id="hd" onmouseover="showpass()" onmouseout="hidepass()">show</div>
                </fieldset>
                
            <div class="wrap">
                <button class='btn1' id='btn' type='submit' value='submit' disabled><span>Submit</span></button>
            </div>


                @if(isset($error))
                    <p style="color:red;font-family: 'Franklin Gothic Medium';font-style: italic;font-size:13px" id='hidden' name ='error'>
                    incorrect username or password
                    </p>
                @endif
                
                @if(isset($attempt))
                    <p style="color:red;font-family: 'Franklin Gothic Medium';font-style: italic;font-size:13px" id='hidden' name ='error'>
                    {{$attempt}}
                    </p>
                @endif

                </form>
        </div>
       
<script>

    
        var btn = document.getElementById('btn');
        var field1 = document.getElementById('f1');
        var field2 = document.getElementById('f2');
        
        

    

    function button_state()
    {


        if(field1.value!='' && field2.value!='')
        {
            btn.style.background='#5ab9c5';
            btn.style.color='#FFF';
            btn.disabled=false;
        }
        else{
            btn.style.background='#1abc9c';
            btn.style.color='#1abc9c';
            btn.disabled=true;
        }

    }

    function fields()
    {
        
        if(field1.value=='')
        {
            f1.style.background='rgba(244, 92, 66,0.5)';
        }else if(field1.value!='')
        {
            f1.style.background='rgba(244, 92, 66,0)';
        }
        
        if(field2.value=='')
        {
            f2.style.background='rgba(244, 92, 66,0.5)';
        }else if(field2.value!='')
        {
            f2.style.background='rgba(244, 92, 66,0)';
        }
    }

    function showpass()
    {
            field2.setAttribute('type','text');

    }

    function hidepass()
    {
            field2.setAttribute('type','password');

    }

    function error(){
        
    }

    setInterval(fields,1);
    setInterval(button_state,1);






    
//----------------jquery-------------------------


    $(document).ready(function(){
	
    $(".form-style-5").animate({top:'100'},500,function(){

        $(field1).animate({
            width:'95%'
        },350);

        $(field2).animate({
            width:'100%'
        },350,function(){
            $(field2).animate({
                width:'90%'
        },250,function(){
            $('.dvpass').css('display','inline-block');
            $('.dvpass').hide();
            $('.dvpass').slideDown(300);
        });
    });

        $("button").animate({
            opacity:'1'
        },600);
            
    });
});




</script>
        

</body>
</html>