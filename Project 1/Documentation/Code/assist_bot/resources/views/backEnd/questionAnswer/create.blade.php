@extends('layouts.backend_master')

@section('content')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tag</a>
        </li>
        <li class="breadcrumb-item active">tags</li>
      </ol>
      <form enctype="multipart/form-data" action="{{ route('qa.store') }}" method='POST'> {{ csrf_field()}}
		      <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label>Question</label>
                <input name="question" type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label>Answer</label>
                <input name="answer" type="text" class="form-control" placeholder="">
              </div>
              <button class="btn btn-primary">Submit</button>
            </div>
          </div>
      </form>
		<!-- /pagination-->
@endsection