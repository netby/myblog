@extends('admin.layouts.app_admin')
@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Count Category 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Count Pages 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Count Registered Ssers 0</span></p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="jumbotron">
          <p><span class="label label-primary">Count Users today 0</span></p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Create Category</a>
        <a class="list-group-item" href="{{route('admin.category.index')}}">
          <h4 class="list-group-item-heading">Fearst Category</h4>
          <p class="list-group-item-text">Count pages</p>
        </a>
      </div>
      <div class="col-sm-6">
        <a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Create Page</a>
        <a class="list-group-item" href="{{route('admin.article.index')}}">
          <h4 class="list-group-item-heading">Fearst Pages</h4>
          <p class="list-group-item-text">Category</p>
        </a>
      </div>
    </div>
  </div>

@endsection
