<?php

namespace App\Repositories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository
{
    public function __construct(Product $product)
    {
        parent::__construct($product);
    }

    public function delete($id)
    {
        $product = Product::query()->findOrFail($id);
        $product->delete();
    }
    public function create($request)
    {
        $data = $request->only('name', 'category');
        $image = $request->file('file');
        $data['image'] = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path('img');
        $image->move($path, $data['image']);
        $product = Product::query()->create($data);
        return $product;
    }


//    public function create($request)
//    {
//        $data = $request->only('name','category');
//        return Product::query()->create($data);
//    }

    public function update($request, $id)
    {
        Product::query()->findOrFail($id);
        $data = $request->only('name','category','image');
        return Product::query()->where("id","=",$id)->update($data);

    }

}
