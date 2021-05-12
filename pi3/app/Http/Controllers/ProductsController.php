<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        return view('product.index')->with('products', Product::all());
    }
    public function create(){
        return view('product.create');
    }
    public function store(Request $request) {
        if($request->image){
            $image = $request->file('image')->store('product');
            $image = "storage/".$image;
        }else{
            $image = "storage/product/image.jpg";
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' =>$request->price,
            'category_id' => $request->category_id,
            'image' => $image
        ]);
        session()->flash('success', 'Produto foi cadastrado com sucesso');
        return redirect(route('product.index'));
  //insert into products ('name','description','price') values ($request->name, $request->description, $request->price);
        }

        public function edit(Product $product){
         return view('product.edit')->with('product',$product);
        }
        public function update(Request $request, Product $product){
            if($request->image){
                $image = $request->file('image')->store('product');
                $image = "storage/".$image;
                if($product->image != "storage/product/imagem.jpg"){
                Storage::delete(str_replace('storage/','',($product->image)));
                }
            }else{
                $image = $product->image;
            }

            $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' =>$request->price,
            'category_id' => $request->category_id,
            'image' => $image
            ]);
                session()->flash('success','Produto foi alterado com sucesso');
            return redirect(route('product.index'));
        }
        public function destroy(Product $product){
            $product->delete();
            session()->flash('success','Produto foi apagado com sucesso');
            return redirect(route('product.index'));
        }
        public function trash(){
            return view('product.trash')->with('products', Product::onlyTrashed()->get());
        }
        public function restore( $id){
            $product =Product::onlyTrashed()->where('id',$id)->firstOrFail();
           
            $product->restore();
            session()->flash('success, Produto foi restaurado com sucesso! ');
            return redirect(route('product.trash'));
        }
        }