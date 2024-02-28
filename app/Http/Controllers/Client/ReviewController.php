<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        $reviews = new Review();
        $reviews->name = $request->input('name');
        $reviews->text = $request->input('text');
        $reviews->rating = $request->input('rating');
        $reviews->isActive = '0';
        $reviews->image = $request->file('image')->store('public/reviews');
        $reviews->save();
        Toast::title('Новый отзыв успешно добавлен',);
        return redirect()->route('client.review');
    }
}
