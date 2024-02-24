<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.reviews.index',[
            'reviews' => SpladeTable::for(Review::class)
                ->withGlobalSearch(columns:['name','text'])
                ->column('image',label: "Фото клиента")
                ->column('name',label: "Имя клиента", sortable:true)
                ->column('text',label: "Отзыв клиента")
                ->column('rating',label: "Оценка от клиента")
                ->column('isActive',label: "Активность отзыва")
                ->column('action',label: "Действие")
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reviews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $review = new Review();
        $review->name = $request->input('name');
        $review->text = $request->input('text');
        $review->rating = $request->input('rating');
        $review->isActive = $request->input('isActive');
        $review->image = $request->file('image')->store('public/reviews');
        $review->save();
        Toast::title('Новый отзыв успешно добавлен',);
        return redirect()->route('reviews.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        return view('admin.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        $review->name = $request->input('name');
        $review->text = $request->input('text');
        $review->rating = $request->input('rating');
        $review->isActive = $request->input('isActive');
        $review->image = $request->file('image')->store('public/reviews');


        $review->save();
        Toast::title('Новый отзыв успешно добавлен',);
        return redirect()->route('reviews.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        $review->delete();
        Toast::title('Товар удалена');
        return redirect()->route('reviews.index');
    }
}
