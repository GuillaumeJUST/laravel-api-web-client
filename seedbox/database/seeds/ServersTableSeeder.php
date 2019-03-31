<?php

use App\Server;
use Illuminate\Database\Seeder;

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
            'url' => 'https://www.seedbox.com',
            'status' => Server::STATUS_NEW,
        ]);

        Server::create([
            'name' => 'Server seedbox 2',
            'url' => 'https://www.seedbox.com',
            'status' => Server::STATUS_UP,
        ]);
    }
}
