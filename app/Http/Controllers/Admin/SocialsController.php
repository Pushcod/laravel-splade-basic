<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Social;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class SocialsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.socials.index',[
            'socials' => SpladeTable::for(Social::class)
                ->withGlobalSearch(columns:['name'])
                ->column('name',label: "Название социалки", sortable:true)
                ->column('link',label: "Ссылка")
                ->column('icon',label: "иконка", canBeHidden: false)


                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.socials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $social = new Social();
        $social->name = $request->input('name');
        $social->link = $request->input('link');
        $social->isActive = $request->input('isActive');
        $social->icon = $request->file('icon')->store('public/socials');
        $social->save();
        Toast::title('Социалка добавлена',);
        return redirect()->route('socials.index');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
