<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseRequest;
use App\Models\Casee;
use http\Env\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class CaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.casees.index',[
            'casees' => SpladeTable::for(Casee::class)
                ->withGlobalSearch(columns:['title','description'])
                ->column('title',label: "Название услуги", sortable:true)
                ->column('description',label: "Описание услуги")
                ->column('image', label: "Изображение")
                ->column('price', label: "Цена")
                ->column('action',label: "Действие", canBeHidden: false)
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.casees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CaseRequest $request)
    {
        $casee = new Casee();
        $casee->title = $request->input('title');
        $casee->description = $request->input('description');
        $casee->price = $request->input('price');
        $casee->isActive = $request->input('isActive');
        $casee->image = $request->file('image')->store('public/casees');
        $casee->save();
        Toast::title('Работа добавлена',);
        return redirect()->route('casees.index');
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
    public function edit(Casee $casee)
    {
        return view('admin.casees.edit', compact('casee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(\Illuminate\Http\Request $request, Casee $casee)
    {
        $casee->title = $request->input('title');
        $casee->description = $request->input('description');
        $casee->price = $request->input('price');
        $casee->isActive = $request->input('isActive');
        if($request->hasFile('image')){
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->storeAs('public/casees', $filename);
            $casee->image = $filename;
        }
        $casee->save();
        Toast::title('Работа обновлена');
        return redirect()->route('casees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Casee $casee)
    {
        $casee->delete();
        Toast::title('Работа удалена');
        return redirect()->route('casees.index');
    }
}
