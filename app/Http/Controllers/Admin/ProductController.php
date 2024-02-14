<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.index', [
            'products' => SpladeTable::for(Product::class)
                ->withGlobalSearch(columns:['title','content'])
                ->selectFilter('category_id', $categories, label:'Категории')
                ->column('title',label: "Название продукта", sortable:true)
                ->column('content',label: "Описание продукта")
                ->column('price',label: "Цена продукта")
                ->column('isActive',label: "Активность продукта")
                ->column('isPopular',label: "Популярность продукта")
                ->column('isNew',label: "Новизна продукта")
                ->column('action',label: "Действие", canBeHidden: false)
                ->column('show',label: "Карточка")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->input('title');
        $product->content = $request->input('content');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->isActive = $request->input('isActive');
        $product->isPopular = $request->input('isPopular');
        $product->isNew = $request->input('isNew');
        $product->image = $request->file('image')->store('public/products');
        $product->save();
        Toast::title('Новый товар успешно добавлен',);
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.show', compact('product'), compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::pluck('title', 'id')->toArray();
        return view('admin.products.edit',compact('product'), compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->title = $request->input('title');
        $product->content = $request->input('content');
        $product->category_id = $request->input('category_id');
        $product->price = $request->input('price');
        $product->isActive = $request->input('isActive');
        $product->isPopular = $request->input('isPopular');
        $product->isNew = $request->input('isNew');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/products', $filename);
            $product->image = $filename;
        }
        $product->save();
        Toast::title('Товар обновлен');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Toast::title('Товар удалена');
        return redirect()->route('products.index');
    }
}
