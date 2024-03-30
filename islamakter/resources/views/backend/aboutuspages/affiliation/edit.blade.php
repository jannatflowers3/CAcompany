
@extends('backend.layouts.master')
@section('content')
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Affiliation Edit Option</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item active">  Affiliation Edit Option</li>
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
              <h3 class="card-title">Affiliation  Option</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="POST" action="{{route('affiliation.update', $affiliationedite->id )}}" enctype="multipart/form-data">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="affiliation_title"> Affiliation Title</label>
                  <input type="text" class="form-control" id="affiliation_title" name="affiliation_title" value="{{$affiliationedite->affiliation_title}}">

                </div>

                <div class="form-group">
                  <label for="affiliation_subheading">Affiliation Sub Heading</label>
                  <input type="text" class="form-control" id="affiliation_subheading" name="affiliation_subheading"  value="{{$affiliationedite->affiliation_subheading}}">
                </div>
                  <div class="form-group">
                    <label for="affiliation_heading">Affiliation Heading</label>
                    <input type="text" class="form-control" id="affiliation_heading" name="affiliation_heading"  value="{{$affiliationedite->affiliation_heading}}">
                  </div>
                  <div class="form-group">
                    <label for="affiliation_paragraph1">Affiliation Paragraph</label>
                    <input type="text" class="form-control" id="affiliation_paragraph1" name="affiliation_paragraph1" value="{{$affiliationedite->affiliation_paragraph1}}" >
                  </div>
                  <div class="form-group">
                    <label for="affiliation_paragraph2">Affiliation Paragraph 2</label>
                    <input type="text" class="form-control" id="affiliation_paragraph2" name="affiliation_paragraph2"  value="{{$affiliationedite->affiliation_paragraph2}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Affiliation Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="affiliation_image" name="affiliation_image">
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
