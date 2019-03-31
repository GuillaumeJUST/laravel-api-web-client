<?php

namespace App\Http\Controllers;

use App\Server;
use Illuminate\Support\Collection;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        /** @var Collection $lastServers */
        $lastServers = Server::take(6)->get();
        return view('home')
            ->with('servers', $lastServers);
    }
}
