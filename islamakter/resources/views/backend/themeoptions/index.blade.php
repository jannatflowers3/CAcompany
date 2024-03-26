
@extends('backend.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Theme Option</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item active">Theme Option</li>
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
        <div class=" col-lx-10 col-lg-10 col-md-10">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Theme Option</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('themeoptions.update')}}" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="sitename">Site Name</label>
                  <input type="text" class="form-control" id="sitename" name="sitename" value="{{$seeting->sitename}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="logo" name="logo">
                        <label class="custom-file-label" for="logo" >Choose file</label>
                      </div>
                    </div>
                  </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$seeting->email}}">
                  </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" class="form-control" id="phone" name="phone" value="{{$seeting->phone}}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" value="{{$seeting->address}}">
                  </div>

                  <div class="form-group">
                    <label for="paragraph">Footer Paragraph</label>
                    <input type="text" class="form-control" id="paragraph" name="paragraph" value="{{$seeting->paragraph}}">
                  </div>
                  <div class="form-group">
                    <label for="opening">Opening Hour</label>
                    <input type="text" class="form-control" id="opening" name="opening" value="{{$seeting->opening}}">
                  </div>
                  <div class="form-group">
                    <label for="facebook">Facebook</label>
                    <input type="text" class="form-control" id="facebook" name="facebook" value="{{$seeting->facebook}}">
                  </div>
                  <div class="form-group">
                    <label for="linkedin">Linkedin</label>
                    <input type="text" class="form-control" id="linkedin" name="linkedin" value="{{$seeting->linkedin}}">
                  </div>
                  <div class="form-group">
                    <label for="twitter">Twitter</label>
                    <input type="text" class="form-control" id="twitter" name="twitter" value="{{$seeting->twitter}}">
                  </div>
                  <div class="form-group">
                    <label for="googleplus">Google Plus</label>
                    <input type="text" class="form-control" id="googleplus" name="googleplus" value="{{$seeting->googleplus}}">
                  </div>
                  <div class="form-group">
                    <label for="youtube">Youtube</label>
                    <input type="text" class="form-control" id="youtube" name="youtube" value="{{$seeting->youtube}}">
                  </div>

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        {{-- <div class="col-md-6">
          <!-- Form Element sizes -->
          <div class="card card-success">
            <div class="card-header">
              <h3 class="card-title">Different Height</h3>
            </div>
            <div class="card-body">
              <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
              <br>
              <input class="form-control" type="text" placeholder="Default input">
              <br>
              <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div> --}}
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->


  @endsection
