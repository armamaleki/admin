<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mafia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'بازی های مورد نظر ';
        return view('admin.game', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());\
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'status' => 'required',
            'price' => 'required',
            'avatar' => 'required|dimensions:min_width=100,min_height=200',
            'member' => 'required',
            'time' => 'required',
            'movie' => 'required',
        ]);
        $validated['user_id'] = Auth::user()->id;
        $validated['slug'] = str_replace(' ', '-', $request['title']);
//        -----------------avatar---------------
        $image = $request->file('avatar');
        $name = $image->getClientOriginalName();
        $exploade = explode('.', $name);
        $end = end($exploade);
        $username = Auth::user()->name;
        $new_name = $username.' '. $validated['title'] . time() . '.' . $end;
        $str = str_replace(' ', '-', $new_name);
        $image->move(public_path('images'), $str);
        $validated['avatar'] = $str;
//        ---------------------end avatar---------------
//        dd($str);

//        -----------------video-----------------------
        $movie = $request->file('movie');
        $name_movie = $movie->getClientOriginalName();
        $new_movie =Auth::user()->name.' '.$validated['title']. time() . $name_movie;
        $str_v = str_replace(' ', '-', $new_movie);
        $movie->move(public_path('movie'), $str_v);

//        dd($str_v);
        $validated['movie'] = $str_v;
//        -----------------end video-----------------------
        Mafia::create($validated);
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
