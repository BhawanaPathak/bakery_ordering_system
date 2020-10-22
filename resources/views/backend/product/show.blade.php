@extends('layouts.backend')
@section('title','Show Product')

@section('content')
    <section class="content-header">
        <h1>
            Product Management
            <small>it all about tad data</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Product</a></li>
            <li class="active">Create page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Lists product</h3>
                <a href="{{route('product.create')}}" class="btn btn-info"><i class="fa fa-plus"></i>Create</a>

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
                <table class="table table-border">
                    <tr>
                        <th>Category Id</th>
                        <td>{{$data['product']->category->name}}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{$data['product']->name}}</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>{{$data['product']->price}}</td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td>{{$data['product']->image}}</td>
                        <div class="img-wrap">
                            <span class="close">&times;</span>
                            <img class="image" src="{{asset('image/product/'. $data['product']->image )}}" alt={{$data['product']->image}} height="100px" width="100px" style="cursor:pointer">
                        </div>

                    </tr>
                    <tr>
                        <th>Quantity</th>
                        <td>{{$data['product']->quantity}}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>
                            @if($data['product']->status == 1)
                                <label class="label label-success">Active</label>
                            @else
                                <label class="label label-danger">De Active</label>
                            @endif
                        </td>

                    </tr>
                    <tr>
                        <th>Created By</th>
                        <td>{{\App\User::find($data['product']->created_by)->name}}</td>
                    </tr>
                    <tr>
                        <th>Updated By</th>
                        <td>
                            @if(!empty($data['product']->updatd_by))
                                {{\App\User::find($data['product']->updated_by)->name}}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <td>{{$data['product']->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <td>{{$data['product']->updated_at}}</td>
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
    <!-- /.content --

@endsection
