<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServerRequest;
use App\Server;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class ServerController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): \Illuminate\Contracts\View\View
    {
        $servers = Server::all();

        return View::make('servers.index')->with('servers', $servers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): \Illuminate\Contracts\View\View
    {
        return View::make('servers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServerRequest $request
     *
     * @return RedirectResponse
     */
    public function store(ServerRequest $request): RedirectResponse
    {
        $server = new Server;
        $server->name = $request->get('name');
        $server->url = $request->get('url');
        $server->save();

        Session::flash('message', 'Successfully created server '.$server->name.' !');

        return Redirect::to('servers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Server  $server
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function show(Server $server): \Illuminate\Contracts\View\View
    {
        return View::make('servers.show')->with('server', $server);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Server  $server
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Server $server): \Illuminate\Contracts\View\View
    {
        return View::make('servers.edit')->with('server', $server);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServerRequest $request
     * @param  \App\Server  $server
     *
     * @return RedirectResponse
     */
    public function update(ServerRequest $request, Server $server): RedirectResponse
    {
        $server->name = $request->get('name');
        $server->url = $request->get('url');
        $server->save();

        Session::flash('message', 'Successfully updated server '.$server->name.' !');

        return Redirect::to('servers');
    }

    /**
     * Show the form for deleting the specified resource.
     *
     * @param  \App\Server  $server
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function delete(Server $server): \Illuminate\Contracts\View\View
    {
        return View::make('servers.delete')->with('server', $server);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Server $server
     *
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Server $server): RedirectResponse
    {
        $server->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the server!');
        return Redirect::to('servers');
    }
}
