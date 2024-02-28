<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use League\CommonMark\Extension\Footnote\Node\FootnoteBackref;
use ProtoneMedia\Splade\Facades\Toast;

class FotbackController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $application= new Application();
        $application->title = $request->input('title');
        $application->phone = $request->input('phone');
        $application->email = $request->input('email');
        $application->date_call = $request->input('date_call');
        $application->room_type = $request->input('room_type');
        $application->time_create = now();
        $application->status_id = '1';

        $application->save();
        Toast::title('заявка принята');
        return redirect()->route('client.fotback');

    }


}
