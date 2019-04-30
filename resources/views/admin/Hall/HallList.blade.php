<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Page Title</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' href="{{URL::to('css/Hall/HallStyle/ListHall/ListHall.css')}}">

  <script type="text/javascript" src="{{URL::to('css/Hall/HallStyle/ListHall/ListHall.js')}}"></script>
</head>

<body>


  <br>

  <h1> Old Work</h1>
  <!-- Editable table -->
  <div class="card">
    <h3 class="card-header text-center font-weight-bold text-uppercase py-4"></h3>
    <div class="card-body">
      <div id="table" class="table-editable">
        <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i class="fas fa-plus fa-2x"
              aria-hidden="true"></i></a></span>
        <table class="table table-bordered table-responsive-md table-striped text-center"
          style="background-color:  brown">
          <tr>
            <?php
           $Data=  $Content[1]['Attr'];
          
           $NumberOfHalls=sizeof($Content[0]['ListHall']);
          $NumberOfAttributes=count($Data);
          ?>

            @for($i=0;$i< $NumberOfAttributes-3;$i++) <th class="text-center" style="background-color:blue ">
              {{$Data[$i]}}</th>

              @endfor

              <!-- <th class=" text-center">Sort</th> -->
              <th class="text-center">Remove</th>
          </tr>


          </tr>
          <!-- This is our clonable table line -->
          @for ($i=0;$i<$NumberOfHalls ;$i++ ) <tr class="hide">

            @for($j=0;$j<$NumberOfAttributes-3;$j++) <?php $Attribute=$Data[$j] ?> <td class="pt-3-half"
              contenteditable="true">

              {{ $Content[0]['ListHall'][$i]->$Attribute   }}
              </td>
              <td class="pt-3-half">
                <span class="table-up"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-up"
                      aria-hidden="true"></i></a></span>
                <span class="table-down"><a href="#!" class="indigo-text"><i class="fas fa-long-arrow-alt-down"
                      aria-hidden="true"></i></a></span>
              </td>


              @endfor
              <td>
                <?php $Id="";  if($i==$NumberOfHalls) $i=$i-1;else {$Id=$Content[0]['ListHall'][$i]->Id;} ?>
                <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><a
                      href="AddHall/{{$Id}}">Delete</a></button></span>
              </td>
              <td>
                <?php $Id="";  if($i==$NumberOfHalls) $i=$i-1;else {$Id=$Content[0]['ListHall'][$i]->Id;} ?>
                <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0"><a
                      href="UpdateHall/{{$Id}}">Update</a></button></span>
              </td>
              </tr>

              @endfor

        </table>
      </div>
    </div>
  </div>


</body>

</html>