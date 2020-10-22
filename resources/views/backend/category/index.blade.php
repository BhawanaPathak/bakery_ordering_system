@extends('layouts.backend')
@section('title','List Category')
@section('content')

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

@section('js')
@endsection
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
        <li class="active">Create page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">List Category
                <a href="{{route('category.create')}}"class="btn btn-info"><i class="fa fa-plus"></i>create</a>
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
            <table class="table table-bordered" id="category_table">
                <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i=1)
                @foreach($data['categories'] as $category)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$category->name}}</td>
                        <td>
                            @if($category->status===1)
                                <label class="label label-success">Active</label>
                            @else
                                <label class="label label-danger">De Active</label>
                            @endif
                        </td>
                        <td>
                            <form action="{{route('category.destroy',$category->id)}}" method="post" onsubmit="return confirm('Are you sure to delete')">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger"><i class="fa fa-trash"></i>Delete</button>
                            </form>
                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit</a>
                            <a href="{{route('category.show',$category->id)}}" class="btn btn-info"><i class="fa fa-eye"></i>View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
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
