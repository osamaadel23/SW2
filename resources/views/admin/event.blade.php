@extends('admin.app')

@section('content')
    <div id="page-wrapper">
        <br>
<form id="addSlider" action="/act">
    {{ csrf_field() }}
    <div class="modal-body">
        <div class="form-group">
            <label>Kind</label>
            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                    <input aria-required="true" type="text" name="title_1" id="title_1" class="form-control" placeholder="enter title one here"> </div>
        </div>
        <div class="form-group">
            <label>Title</label>
            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                <input aria-required="true" type="text" name="title_2" id="title_2" class="form-control" placeholder="enter title one here"> </div>
        </div>
        <div class="form-group">
            <label>Description</label>
            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                <input aria-required="true" type="text" name="link" id="link" class="form-control" placeholder="enter link here"> </div>
        </div>
        <div class="form-group">
            <label>Photo</label>
            <div class="input-group">
                            <span class="input-group-addon">
                                <i class="fa fa-envelope"></i>
                            </span>
                <input aria-required="true" type="file" name="photo" id="photo" class="form-control"> </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn green">Save changes</button>
    </div>
</form>
    </div>
@endsection