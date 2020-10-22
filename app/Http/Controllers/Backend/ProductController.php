<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products']= Product::paginate(10);
        return view('backend.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories']= Category::all();
        return view('backend.product.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {

        if(!empty($request->file('product_image'))){
            $path = base_path().'/public/image/product';
            $image =$request->file('product_image');
            $name =uniqid().'_'.$image->getClientOriginalName();

            if($image->move($path,$name)){
                $request->request->add(['image' => $name]);
            }
        }
        //store data into database
        //dd($request->all());
        $request->request->add(['created_by'=>Auth::user()->id]);
        //send data into tag model
        $id= Product::create($request->all());
        if($id){
            $request->session()->flash('success_message','Product Created Successfully!');
            //redirect back to tag index page
            return redirect()->route('product.index');
        }else{
            $request->session()->flash('error_message','Product Created Failed!');
            return redirect()->route('product.create');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['product']=Product::find($id);
        //dd($data);
        return view('backend.product.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['categories'] = Category::all();
        $data['product']=Product::find($id);

        //dd($data);
        return view('backend.product.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        $product = Product::find($id);
        //add Updated_by to request
        $request->request->add(['updated_by'=>Auth::user()->id]);

        if(!empty($request->file('product_image'))){
            $path = public_path().'/image/product/';
            $image =$request->file('product_image');
            $name =uniqid().'_'.$image->getClientOriginalName();
            if($image->move($path,$name)){
                if (file_exists($path.$product->image))
                    unlink($path .$product->image);

                $request->request->add(['image' => $name]);
            }
        }

        // $request->request->add(['updated_by' => Auth::user()->id]);

        $status = $product->update($request->all());
        if($status){
            $request->session()->flash('success_message','Product Updated Successfully!');
        }else{
            $request->session()->flash('error_message','Product Updated Failed!');
        }
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //get news by id
        $product= Product::find($id);
        //delete
        if($product->delete()){
            $request->session()->flash('success_message','Product Delete Successfully!');
        }else{
            $request->session()->flash('error_message','Product Delete Failed!');
        }
        return redirect()->route('product.index');
    }

}
