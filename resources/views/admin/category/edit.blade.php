@extends('admin.layouts.app')
@section('main-content')
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
     @include('admin.layouts.pagehead')
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
		 <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Write an category</h3>
            </div>
            <!-- /.box-header -->
			
            <!-- form start -->
            <form role="form" action="{{ route('category.update', $category->id) }}" method="post"> 
              {{ csrf_field() }}         
              {{ method_field('PUT') }} 

              <div class="box-body">
              	<div class="col-md-6 col-md-offset-3">
	                <div class="form-group {{  $errors->has('name') ? 'has-error' : '' }}">
	                  <label for="name">Category Title</label>
	                  <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="name" placeholder="Enter category name here">
                    <label>{{ $errors->first('name') }}</label>
	                </div> 
	                <div class="form-group {{  $errors->has('slug') ? 'has-error' : '' }}">   
	                  <label for="slug">Category Slug</label>
	                  <input type="text" name="slug" value="{{ $category->slug }}" class="form-control" id="slug" placeholder="Enter category slug here">
                     <label>{{ $errors->first('slug') }}</label>
	                </div>

		              <div class="form-group">
		                <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
		              </div>
	                
              	</div>
              </div>
       

            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection