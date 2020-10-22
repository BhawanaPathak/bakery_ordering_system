@extends('layouts.backend')
@section('title','List Product')

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
                    <thead>
                    <tr>
                        <th>SN</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i=1)
                    @foreach($data['products'] as $product)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$product->category->name}}</td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td><img src="{{asset('image/product/' .$product->image )}}" width="100" alt=""></td>
                            <td>{{$product->quantity}}</td>
                            <td>
                                @if($product->status == 1)
                                    <label class="label label-success">Active</label>
                                @else
                                    <label class="label label-danger">De active</label>
                                @endif
                            </td>
                            <td>
                                <form action="{{route('product.destroy',$product->id)}}" method="post" onsubmit="return confirm('are you sure to delete')">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE"/>
                                    <button class="btn btn-danger"> <i class="fa fa-trash"></i> Delete</button>
                                </form>
                                <a href="{{route('product.edit',$product->id)}}" class="btn btn-warning"><i class="fa fa-pencil"></i>Edit </a>
                                <a href="{{route('product.show',$product->id)}}" class="btn btn-info"><i class="fa fa-eye"></i>View </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        {{-- <td colspan="6">{{$data['products']->links()}}</td> --}}
                    </tr>
                    </tfoot>

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
