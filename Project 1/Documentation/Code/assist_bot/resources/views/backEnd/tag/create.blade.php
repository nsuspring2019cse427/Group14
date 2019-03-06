@extends('layouts.backend_master')

@section('content')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tag</a>
        </li>
        <li class="breadcrumb-item active">tags</li>
      </ol>
      <form enctype="multipart/form-data" action="{{ route('tag.store') }}" method='POST'> {{ csrf_field()}}
          <div class="row">
              <div class="col-md-10">
                  <div class="form-group">
                      <label>Tag Name</label>
                      <input name="name" type="text" class="form-control" placeholder="Tag name">
                  </div>
                  <button class="btn btn-primary">Submit</button>
              </div>
          </div>
      </form>
		<!-- /pagination-->
@endsection