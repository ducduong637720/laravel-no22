@extends('backend.layouts.master')
@section('title')
  List user
@endsection
@section('content-header')
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0">Tạo bài viết</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection
@section('content')
<div class="container-fluid">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
            <h3>Tiêu đề</h3>
            <input type="text" placeholder="Nhập tên...." style="width:100%">
        </div>
        @include('backend.components.summernote')
        <!-- /.card-header -->
        <button type="button" class="btn btn-success" style="width:10%;">Lưu</button>
      </div>
      <!-- /.card -->
    </div>
  </div>
  
</div><!-- /.container-fluid -->
@endsection
