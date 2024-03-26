
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
            <li class="breadcrumb-item active">Slider Option</li>
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
              <h3 class="card-title">Slider Option</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('slider.store')}}" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="subheading"> Slider Sub Heading</label>
                  <input type="text" class="form-control" id="subheading" name="subheading">
                  {{-- <input type="text" class="form-control" id="subheading" name="subheading" value="{{$sliderData->subheading}}"> --}}
                </div>

                <div class="form-group">
                  <label for="heading">Slider Heading</label>
                  <input type="text" class="form-control" id="heading" name="heading">
                </div>

                  <div class="form-group">
                    <label for="paragraph">Slider Paragraph</label>
                    <input type="text" class="form-control" id="paragraph" name="paragraph" >
                  </div>
                  <div class="form-group">
                    <label for="button_text">Slider Button</label>
                    <input type="text" class="form-control" id="button_text" name="button_text" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Slide Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="slideimage" name="slideimage">
                        <label class="custom-file-label" for="slideimage" >Choose file</label>
                      </div>
                    </div>
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
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->


  @endsection
