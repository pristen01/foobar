<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Foo;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foos = Foo::latest()->paginate(50);
        return view('foos.index', compact('foos'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate input data
        $request->validate([
            'name' => 'required',
            'thud' => 'required',
            'wombat' => 'required'
        ]);
        //create new Foo
        $newFoo = Foo::create($request->all());
        return redirect(route('foos.show', $newFoo))->with('success', 'foo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Foo $foo)
    {
        return view('foos.show', compact('foo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Foo $foo)
    {
        return view('foos.edit', compact('foo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foo $foo)
    {
        //validate input data
        $request->validate([
            'name' => 'required',
            'thud' => 'required',
            'wombat' => 'required'
        ]);
        //create new Foo
        $foo ->update($request->all());
        return redirect(route('foos.index'))
            ->with('success', 'foo updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foo $foo)
    {
        $foo->delete();
        return redirect()->route('foos.index')
            ->with('success', 'Foo deleted successfully');
    }
}
