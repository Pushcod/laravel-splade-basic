<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Setting;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.abouts.index',[
            'abouts'=>SpladeTable::for(About::class)
                ->withGlobalSearch(columns:['name'])
                ->column('name',label: 'Имя')
                ->column('text',label: 'Описание')
                ->column('number_phone',label: 'Номер телефона')
                ->column('profile',label: 'Фото')
                ->column('title', label: 'Название баннера')
                ->column('description', label: 'Описание баннера')
                ->column('image', label: 'Картинка баннера')
                ->column('action', label: 'Действие')
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'text' => 'required|string',
            'number_phone' => 'required|string',
            'title' => 'required|string',
            'description' => 'required|string',
            'profile' => 'nullable|image',
            'image' => 'nullable|image',

        ]);

        $company = About::findOrNew(1); //Укажем, что должна выбираться запись из модели Setting id которой равен = 1
        $company->fill($validatedData); //Заполняем поля

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/images');
            $company->image = $imagePath;
        }
        if ($request->hasFile('profile')) {
            $profilePath = $request->file('profile')->store('public/profiles');
            $company->profile = $profilePath;
        }

        $company->save();

        return redirect()->route('abouts.index', $company->id)
            ->with('success', 'Company information updated successfully.');
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
    public function edit(About $abouts)
    {
        return view('admin.abouts.edit',compact('abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        Toast::title('Товар удалена');
        return redirect()->route('abouts.index');
    }
}
