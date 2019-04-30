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
                                    Team Members
                                </div>
                                 <div class="actions">
                                <a class="btn red btn-outline sbold " data-toggle="modal" href="#basic"> Add Member </a>
                                 </div>


                                <!-- /.panel-heading -->

                                
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                               
                                               <tr>
                                                    <th>Name</th>
                                                    <th>job</th>
                                                    <th>description</th>
                                                    <th>image</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                         
			                                 @foreach($teammembers as $teammember)
			                                  <tr>
			                                    <td aria-required="true"> {{$teammember->name}} </td>
			                                    <td aria-required="true"> {{$teammember->job}} </td>
			                                    <td aria-required="true"> {{$teammember->description}} </td>
			                                    <td aria-required="true"> {{$teammember->image}} </td>
                                                <td>
                                                    <a class="btn green btn-outline sbold edit_member" member_id="{{$teammember->id}}" data-toggle="modal" href="#exampleModalCenter"> Edit Member </a>
                                                </td>

                                                <td> 
                                                    <a href="{{'/admin/delete/member/'.$teammember->id}}">delete </a>  
                                                </td>
                                                
                                                 
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
                </div>  
</div>          
<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Add Member</h4>
                </div>
                <form id="addMember" >
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="Name" id="Name" class="form-control" placeholder="enter name here"> </div>
                        </div>
                        <div class="form-group">
                            <label>job</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="job" id="job" class="form-control" placeholder="enter job here"> </div>
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="description" id="description" class="form-control" placeholder="enter description here"> </div>
                        </div>
                        <div class="form-group">
                            <label>image</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="file" name="image" id="image" class="form-control"> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn green">Save changes</button>
                    </div>
                </form>

            </div>
            
        </div><!-- /.modal-content -->
 </div>


 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Edit Member</h4>
                </div>
                <form id="editMember">
                    {{ csrf_field() }}
                    <input type="hidden" id="Member_id_edit" name="Member_id_edit">
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="name_edit" id="name_edit" class="form-control" placeholder="enter name here"> </div>
                        </div>
                        <div class="form-group">
                            <label>job</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="job_edit" id="job_edit" class="form-control" placeholder="enter job here"> </div>
                        </div>
                        <div class="form-group">
                            <label>description</label>
                            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                                <input type="text" name="description_edit" id="description_edit" class="form-control" placeholder="enter description here"> </div>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                        <button type="submit" id="edit_member" class="btn green">Save changes</button>
                    </div>
                </form>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
<script src="{{asset('adminStyle/js/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('adminStyle/js/bootstrap.min.js')}}" type="text/javascript"></script>

<script>
    $("#addMember").submit(function(m) {
        
        $.ajax({
            type: "POST",
            url: '/admin/add/member',
            data: new FormData( this ),
            processData: false,
            contentType: false,
            success: function(response)
            {
                if(response=="done"){
                    alert("sssss");
                }
                else{
                    alert(response);
                }
            }
        });
        m.preventDefault(); // avoid to execute the actual submit of the form.
    });

</script>
<script>
        $(document).on('click', '.edit_member', function(){
            var id=$(this).attr('member_id');

            $.ajax({
                type: "GET",
                url: "/admin/get/member/" + id,
                processData: false,
                contentType: false,

                success: function(response) {

                    $("#name_edit").val(response.name);
                    $("#job_edit").val(response.job);
                    $("#description_edit").val(response.description);
                    $("#Member_id_edit").val(response.id);



                }
            });
        });
    </script>

    <script>
        $("#editMember").submit(function(m) {
            $.ajax({
                type: "POST",
                url: '/admin/edit/member',
                data: new FormData( this ),
                processData: false,
                contentType: false,
                success: function(response)
                {
                    if(response=="done"){
                        alert("done");
                    }
                    else{
                        alert(response);
                    }
                }
            });
            m.preventDefault(); // avoid to execute the actual submit of the form.
        });

    </script>

 <script>
    $(document).on('click', '.delete_member', function(){
        var id=$(this).attr('member_id');
        alert(id);
        $.ajax({
            type: "GET",
            url: "/admin/delete/member/" + id,
            processData: false,
            contentType: false,

            success: function(response) {
                alert("deleted");

            }
        });
    });
</script>  




@endsection

