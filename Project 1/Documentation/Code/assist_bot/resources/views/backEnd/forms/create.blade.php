@extends('layouts.backend_master')

@section('content')
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Tag</a>
        </li>
        <li class="breadcrumb-item active">tags</li>
      </ol>
      <form enctype="multipart/form-data" action="{{ route('forms.store') }}" method='POST'> {{ csrf_field()}}
		      <div class="row">
            <div class="col-md-10">
              <div class="form-group">
                <label>Title</label>
                <input name="title" type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label>Description</label>
                <input name="description" type="text" class="form-control" placeholder="">
              </div>
              <div class="form-group">
                <label>File</label>
                <input name="file" type="file" class="form-control-file" placeholder="" />
              </div>
              <div class="form-group">
                <label>Tags</label>
                <select name="tags[]" class="form-control" multiple>
                  @foreach($tags as $value)
                    <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
              </div>
              <button class="btn btn-primary">Submit</button>
            </div>
          </div>
      </form>
		<!-- /pagination-->
@endsection