@extends('layouts.backend')
@section('title','View Category')
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
            <li class="active">View page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">View Category
                    <a href="{{route('category.create')}}"class="btn btn-info"><i class="fa fa-plus"></i>create</a>
                    <a href="{{route('category.index')}}"class="btn btn-success"><i class="fa fa-list"></i>List</a>
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
                @include('layouts.includes.flash')
                <table class="table table-bordered">
                    <tr>
                        <th>Name</th>
                        <td>{{$data['category']->name}}</td>
                    </tr>

                    <tr>
                        <th>Status</th>
                        <td>@if($data['category']->status===1)
                                <label class="label label-success">Active</label>
                            @else
                                <label class="label label-danger">De Active</label>
                            @endif
                        </td>
                    </tr>

                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['category']->created_by)->name}}</td>
                    </tr>

                    <tr>
                        <th>Updated By</th>
                        <td>
                            @if(!empty($data['category']->updated_by))
                                {{--                                {{\App\User::find($data['category']->updated_by)->name}}--}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{$data['category']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['category']->updated_at}}</td>
                    </tr>
                </table>

            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                Footer
            </div>
            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
@endsection
