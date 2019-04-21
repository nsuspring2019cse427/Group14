@extends('layouts.backend_master')

@section('content')
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Tags</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fa fa-table"></i> All Tags</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
          <tr>
            <th>#</th>
            <th>Title</th>
            {{--<th>Action</th>--}}
          </tr>
          </thead>
          <tbody>
          @foreach($tags as $tag)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $tag->name }}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /tables-->
@endsection
