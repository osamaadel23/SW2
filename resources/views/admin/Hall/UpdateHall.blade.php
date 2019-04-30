<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>UpdateHall</title>
</head>


<body>
        <!--Display Validation Error -->
        @if (count($errors) > 0)
        <ul><li>{{ $error }}</li></ul>
        @endif

    <form action="/UpdateHall/{{$Hall->Id}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
         Id : <input type="text" name="Id" placeholder="Id:" value="{{$Hall->Id}}" require > <br><br>
         HallName : <input type="text" name="HallName" placeholder="HallName:" value="{{$Hall->HallName}}" > <br><br>
        Admin : <input type="text" name="Admin" placeholder="Admin:" value="{{$Hall->Admin}}"> <br><br>
        Contact : <input type="text" name="Contact" placeholder="Contact:" value="{{$Hall->Contact}}"> <br><br>
        Space : <input type="text" name="Space" placeholder="Space:" value="{{$Hall->Space}}"> <br><br>
        Address : <input type="text" name="Address" placeholder="Address:" value="{{$Hall->Address}}"> <br><br>
        Description : <input type="text" name="Description" placeholder="Description:" value="{{$Hall->Description}}"> <br><br>
        Email : <input type="text" name="Email" placeholder="Email:" value="{{$Hall->Email}}"> <br><br>
        Branch : <input type="text" name="Branch" placeholder="Branch:" value="{{$Hall->Branch}}"> <br><br>
        Paths : <input type="text" name="Paths" placeholder="Paths:" value="{{$Hall->Paths}}"> <br><br> 
       <input multiple="multiple" name="photos[]" type="file"> 

        <input type="submit" value="Update"></button> 
    </form>
</body>

</html>