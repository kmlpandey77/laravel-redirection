<?php

namespace Kmlpandey77\Redirection\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Kmlpandey77\Redirection\Models\Redirection;

class RedirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $redirections = Redirection::paginate(10);

        return view('redirection::index', compact('redirections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('redirection::create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'from_url' => 'required|unique:redirections',
            'to_url' => 'required',
        ]);

        $from_url = parse_url($request->from_url, PHP_URL_PATH);
        $to_url = parse_url($request->to_url, PHP_URL_PATH);

        $redirection = new Redirection();
        $redirection->from_url = ltrim($from_url, '/');
        $redirection->to_url = ltrim($to_url, '/');
        $redirection->save();

        return redirect()->route('redirection.index')->with('success', 'Redirect added.');
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Redirection $redirection)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Redirection $redirection)
    {
        return view('redirection::edit', compact('redirection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Redirection $redirection)
    {
        $request->validate([
            'from_url' => 'required',
            'to_url' => 'required',
        ]);

        $from_url = parse_url($request->from_url, PHP_URL_PATH);
        $to_url = parse_url($request->to_url, PHP_URL_PATH);

        $redirection->from_url = ltrim($from_url, '/');
        $redirection->to_url = ltrim($to_url, '/');
        $redirection->save();

        return redirect()->route('redirection.index')->with('success', 'Redirect saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Redirection $redirection)
    {
        $redirection->delete();

        return redirect()->route('redirection.index')->with('success', 'Redirect deleted.');
    }
}
