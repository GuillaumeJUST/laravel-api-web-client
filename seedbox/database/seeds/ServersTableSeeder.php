<?php

use App\Server;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ServersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Server::truncate();

        Server::create([
            'name' => 'Server seedbox 1',
            'url' => 'www.seedbox.org',
            'status' => Server::STATUS_UP,
        ]);

        Server::create([
            'name' => 'Server seedbox 2',
            'url' => 'www.seedbox.org',
            'status' => Server::STATUS_UP,
        ]);

        Server::create([
            'name' => 'Server seedbox 3',
            'url' => 'www.seedbox.org',
            'status' => Server::STATUS_WARNING,
        ]);

        Server::create([
            'name' => 'Server seedbox 4',
            'url' => 'www.seedbox.org',
            'status' => Server::STATUS_UP,
        ]);

        Server::create([
            'name' => 'Server seedbox 5',
            'url' => 'www.seedbox.org',
            'status' => Server::STATUS_UP,
        ]);

        Server::create([
            'name' => 'Server seedbox 6',
            'url' => 'www.seedbox.org',
            'status' => Server::STATUS_DOWN,
        ]);
    }
}
