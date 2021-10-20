<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    public function trash()
    {
        $comics = Comic::onlyTrashed()->get();
        return view('comics.trash', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comic = new Comic();
        return view('comics.create', compact('comic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:comics|min:3',
            'description' => 'required|string|min:10',
            'price' => 'required|numeric|min:0',
            'sale_date' => 'required|date',
            'series' => 'required|min:3',
            'thumb' => 'required',
            'type' => 'required|string|min:3'
        ]);
        $data = $request->all();
        $comic = Comic::create($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        if (!$comic) {
            $comic = Comic::withTrashed()->findOrFail($id);
            $alert = [
                "msg" => "Item located in the trash",
                "type" => "danger"
            ];
            return view('comics.show', compact('comic', 'alert'));
        }
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::find($id);
        if (!$comic) {
            $comic = Comic::withTrashed()->findOrFail($id);
            $alert = [
                "msg" => "Item located in the trash",
                "type" => "danger"
            ];
            return view('comics.edit', compact('comic', 'alert'));
        }
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'string', Rule::unique('comics')->ignore($id), 'min:3'],
            'description' => 'required|string|min:10',
            'price' => 'required|numeric|min:0',
            'sale_date' => 'required|date',
            'series' => 'required|min:3',
            'thumb' => 'required',
            'type' => 'required|string|min:3'
        ]);
        $data = $request->all();
        $comic = Comic::find($id);
        if (!$comic) {
            $comic = Comic::withTrashed()->findOrFail($id);
        }
        $comic->update($data);
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::find($id);
        if ($comic) {
            $comic->delete();
            return redirect()->route('comics.index')->with('alert', "$comic->title successfully deleted")->with('alert_type', 'danger');
        } else {
            $comic = Comic::withTrashed()->findOrFail($id);
            $comic->forceDelete();
            return redirect()->route('comics.trash')->with('alert', "$comic->title successfully deleted permanently")->with('alert_type', 'danger');
        }
    }

    public function restore($id)
    {
        $comic = Comic::withTrashed()->find($id);
        $comic->restore();
        return redirect()->route('comics.index')->with('alert', "$comic->title successfully restored")->with('alert_type', 'success');
    }
}
