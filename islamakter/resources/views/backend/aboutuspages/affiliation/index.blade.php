
@extends('backend.layouts.master')
@section('content')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Affiliation</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
            <li class="breadcrumb-item active">Affiliation</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Affiliation Table</h3>

    </div>

    <!-- /.card-header -->
    <div class="card-body">
        <a href="{{route('affiliation.create')}}" class="btn btn-info mb-3">Add affiliation</a>
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Affiliation Title</th>
          <th>Affiliation SubHeading</th>
          <th>Affiliation Heading</th>
          <th>Affiliation Paragraph</th>
          <th>Affiliation Paragraph 2</th>
          <th>Affiliation Image</th>

          <th>Action</th>

        @foreach ($affiliation  as $key =>$row)
        <tr>
          <td>{{$row->affiliation_title}}</td>
          <td>{{$row->affiliation_subheading}}</td>
          <td>{{$row->affiliation_heading}}</td>
          <td>{{$row->affiliation_paragraph1}}</td>
          <td>{{$row->affiliation_paragraph2}}</td>

          <td>
            <img src="{{asset('backendsite/images/aboutus/'.$row->affiliation_image)}}" width="200px"alt="Slider Image">

        </td>
        <td>
            <a href="{{route('affiliation.edit',$row->id)}}" class="btn btn-success">Edit</a>
            <a href="{{route('affiliation.delete',$row->id)}}" class="btn btn-danger">Delete</a>
        </td>
        </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  @endsection
