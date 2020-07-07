<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemModel;

class ItemController extends Controller
{
    public function create(){
        return view('items.form');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        $new_item = ItemModel::save($request->all());
        return redirect('/items');
    }

    public function index(){
        $items = ItemModel::get_all();
        //dd($items);
        return view('items.index', compact('items'));
    }

    public function show($id){
        $item = ItemModel::find_by_id($id);

        return view('items.show', compact('item'));
    }

    public function edit($id){
        $item = ItemModel::find_by_id($id);

        return view('items.edit', compact('item'));
    }

    public function update($id, Request $request){
        //dd($request->all());
        $item = ItemModel::update($id, $request->all());
        return redirect('/items');
    }

    public function destroy($id){
        $item = ItemModel::destroy($id);
        return redirect('/items');

    }
}

