
@extends('layouts.index')
@include('backend.header')
<div class="wrapper">
  <!-- Navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form  enctype="multipart/form-data" method="post" id="myform" >
                <input type = "hidden" name = "_token" id="csrf" value = "<?php echo csrf_token(); ?>">
                <!--  @csrf -->
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Title" >
                  </div>

                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Short Discription</label>
                        <textarea type="text" class="form-control" rows="3" name="discription" id="discription" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-3">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Price</label>
                        <input type="text" class="form-control" rows="3" name="price" id="price" placeholder="Enter Price">
                      </div>
                    </div>
                  </div>

                   <input type="file" name="image" id="image"> 

                  <div class="form-check">

                    <div class="card-footer">
                      <button type="button" class="btn btn-primary" id="butsave" name="submit">Submit</button>
                    </div>

                  </div>



                </div>
              </form>
              <!--/.col (left) -->
              <!-- right column -->

            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->



      </section>

      <!-- /.content -->
    </div>
  </div>

<script>
$(document).ready(function() {
$('#butsave').on('click', function() {

var fd = new FormData();
var files = $('#image')[0].files[0];
fd.append('image',files);

var formData = new FormData(document.getElementById("myform"));

$.ajax({
url: "{{url('addcategory') }}",
type: "POST",
data: formData,
contentType: false,
processData: false,
cache: false,
success:function(response)
{

if(response.success==1){
$('#success').show();
$('#myform')[0].reset();
}else{
alert("Error");
}
},
error:function(error)
{

alert('something get wrong');
}
});

});
});
</script>
