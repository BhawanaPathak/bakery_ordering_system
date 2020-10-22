@extends('layouts.backend')
@section('title','Edit Product')

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
                <h3 class="box-title">Title</h3>
                <a href="{{route('product.index')}}" class="btn btn-success"><i class="fa fa-list"></i>List</a>
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
                @include('layouts.includes.error')
                <form action="{{route('product.update',$data['product']->id)}}" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT"/>
                    @csrf

                    <div class="form-group">
                        <label for="category_id">Category Id</label>
                        <select name="category_id" class="form-control">
                            <option>Select Category</option>
                            @foreach($data['categories'] as $category)
                                @if($category->id == $data['product']->category_id)
                                    <option value="{{$category->id}}"selected>{{$category->name}}</option>
                                @else
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endif
                            @endforeach
                        </select>
                        @include('layouts.includes.single_field_validation', ['field' => 'category_id'])
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$data['product']->name}}"/>
                        @include('layouts.includes.single_field_validation', ['field' => 'name'])
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" name="price" class="form-control" id="price" value="{{$data['product']->price}}"/>
                        @include('layouts.includes.single_field_validation', ['field' => 'price'])
                    </div>
                    <div class="forms-group">
                        <label for="product_image">Image</label>
                        <input type="file" name="product_image" class="form-control" value="{{$data['product']->image}}">
                        @include('layouts.includes.single_field_validation',['field'=>'product_image'])
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" value="{{$data['product']->quantity}}"/>
                        @include('layouts.includes.single_field_validation', ['field' => 'quantity'])
                    </div>
                    <div class="form-group">
                        <label for="active">Status</label>
                        @if($data['product']->status ==1)
                            <input type="radio" name="status"  value="1" id="active" checked/>Active
                            <input type="radio" name="status"  value="0" id="deactive" />DeActive
                        @else
                            <input type="radio" name="status"  value="1" id="active"/>Active
                            <input type="radio" name="status"  value="0" id="deactive" checked />DeActive
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="submit" name="save" value="Update Product" class="btn btn-success"/>
                        <input type="submit" name="clear" value="Clear" class="btn btn-danger"/>
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
    <!-- /.content --

@endsection
