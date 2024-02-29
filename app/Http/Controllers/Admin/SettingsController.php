<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Casee;
use App\Models\Setting;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\SpladeTable;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.settings.index',[
            'settings' => SpladeTable::for(Setting::class)
                ->withGlobalSearch(columns:['title','description'])
                ->column('name',label: "Название компании", sortable:true)
                ->column('address',label: "Адресс")
                ->column('phone_number', label: "Номер телефона")
                ->column('email', label: "Электронный адрес")
                ->column('schedule',label: "График работы", canBeHidden: false)
                ->column('logo', label: "Лого")
                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        // Здесь у вас будет выполняться проверка на поля
        $validatedData = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|email',
            'schedule' => 'required|string',
            'logo' => 'nullable|image',
        ]);

        $company = Setting::findOrNew(1); //Укажем, что должна выбираться запись из модели Setting id которой равен = 1
        $company->fill($validatedData); //Заполняем поля

        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('public/logos');
            $company->logo = $logoPath;
        }

        $company->save();

        return redirect()->route('settings.index', $company->id)
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
