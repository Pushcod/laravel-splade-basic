<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Status;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.statuses.index',[
            'statuses' => SpladeTable::for(Status::class)
                ->withGlobalSearch(columns:['name'])
                ->column('name', label: "Название")
                ->column('action', label: "Действие")

                ->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statuses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = new Status();
        $status->name = $request->input('name');

        $status->save();
        Toast::title('Статус добавлен');
        return redirect()->route('statuses.index');
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
    public function edit(Status $status)
    {
        return view('admin.statuses.edit',compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $status->name = $request->input('name');
        $status->save();
        Toast::title('Статус добавлен');
        return redirect()->route('statuses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status->delete();
        Toast::title('Заказ удален');
        return redirect()->route('statuses.index');
    }
}
