<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>AddHall</title>
</head>

<body>
    <form action="AddHall" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        Id : <input type="text" name="Id" placeholder="Id:"> <br><br>
        HallName : <input type="text" name="HallName" placeholder="HallName:"> <br><br>
        Admin : <input type="text" name="Admin" placeholder="Admin:"> <br><br>
        Contact : <input type="text" name="Contact" placeholder="Contact:"> <br><br>
        Space : <input type="text" name="Space" placeholder="Space:"> <br><br>
        Address : <input type="text" name="Address" placeholder="Address:"> <br><br>
        Description : <input type="text" name="Description" placeholder="Description:"> <br><br>
        Email : <input type="text" name="Email" placeholder="Email:"> <br><br>
        Branch : <input type="text" name="Branch" placeholder="Branch:"> <br><br>
        Paths : <input type="text" name="Paths" placeholder="Paths:"> <br><br>
         <input multiple="multiple" name="photos[]" type="file"> 

        <input type="submit" value="Add"></button>
    </form>
</body>

</html>