<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->getAll();
        return view("backend.product.list",compact("products"));
    }

    public function destroy($id)
    {
        $this->productRepository->delete($id);
        return redirect()->route("products.list");
    }

    public function show($id)
    {
        $product = $this->productRepository->getById($id);
//        dd($product);
        return view("backend.product.detail",compact("product"));

    }

    public function edit($id)
    {
        $product = $this->productRepository->getById($id);
        return view("backend.product.update",compact("product"));
    }

    public function update(Request $request, $id)
    {
        $this->productRepository->update($request,$id);
        return redirect()->route("products.list");
    }

    public function create()
    {
        return view("backend.product.create");
    }

    public function store(Request $request)
    {
        $this->productRepository->create($request);
        return redirect()->route('products.list');
    }
}
