@extends('layouts.backend')
@section('title','Edit Category')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Category Management
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Category</a></li>
            <li class="active">Edit page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Edit Category
                    <a href="{{route('category.index')}}"class="btn btn-success"><i class="fa fa-list"></i>List</a>
                    <a href="{{route('category.create')}}"class="btn btn-info"><i class="fa fa-plus"></i>Create</a>
                </h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                            title="Collapse">
                        <i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                @include('layouts.includes.error')
                @include('layouts.includes.flash')

                <form action="{{route('category.update',$data['category']->id)}}" method="post">
                    <input type="hidden" name="_method" value="PUT"/>
                    @csrf
                    <div class="forms-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" value="{{$data['category']->name}}">
                        @include('layouts.includes.single_field_validation',['field'=>'name'])
                    </div>
                    <div class="form-group">
                        <label for="active">Status</label>
                        @if($data['category']->status===1)
                            <input type="radio" id="active" name="status"  value="1" checked>Active
                            <input type="radio" id="deactive" name="status" value="0">De Active
                        @else
                            <input type="radio" id="active" name="status"  value="1">Active
                            <input type="radio" id="deactive" name="status" value="0"checked>De Active
                        @endif
                    </div>

                    <div class="form-group">
                        <input type="submit" name="save" value="Update Category" class="btn btn-success">
                        <input type="reset" name="reset" value="Clear" class="btn btn-danger">
                    </div>

                </form>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>

@endsection
