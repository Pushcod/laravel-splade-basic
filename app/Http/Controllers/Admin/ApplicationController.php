<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Category;
use App\Models\Product;
use App\Models\Status;
use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use ProtoneMedia\Splade\SpladeTable;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statuses = Status::pluck('name', 'id')->toArray();
        return view('admin.applications.index', [

            'applications' => SpladeTable::for(Application::class)
                ->withGlobalSearch(columns:['title','content'])
                ->selectFilter('status_id', $statuses, label:'Статус')
                ->column('title',label: "ФИО", sortable:true)
                ->column('phone',label: "Номер телефона")
                ->column('email',label: "Электронный адрес")
                ->column('date_call',label: "Дата вызова")
                ->column('room_type',label: "Тип помещения")
                ->column('time_create',label: "Дата создания")

                ->column('action',label: "Действие")
                ->paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $statuses = Status::pluck('name', 'id')->toArray();
        return view('admin.applications.create',compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $application = new Application();
        $application->title = $request->input('title');
        $application->phone = $request->input('phone');
        $application->status_id = $request->input('status_id');
        $application->email = $request->input('email');
        $application->date_call = $request->date('date_call');
        $application->room_type = $request->input('room_type');
        $application->time_create = $request->date('time_create');
        $application->save();
        Toast::title('Заказ добавлен');
        return redirect()->route('applications.index');
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
    public function edit(Application $application)
    {
        $statuses = Status::pluck('name', 'id')->toArray();
        return view('admin.applications.edit',compact('application'), compact('statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Application $application)
    {
        $application->title = $request->input('title');
        $application->phone = $request->input('phone');
        $application->email = $request->input('email');
        $application->status_id = $request->input('status_id');
        $application->date_call = $request->date('date_call');
        $application->room_type = $request->input('room_type');
        $application->time_create = $request->date('time_create');
        $application->save();
        Toast::title('Заказ обновлен');
        return redirect()->route('applications.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->delete();
        Toast::title('Заказ удален');
        return redirect()->route('applications.index');
    }
}
