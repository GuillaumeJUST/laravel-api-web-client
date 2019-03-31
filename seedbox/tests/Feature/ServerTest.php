<?php

namespace Tests\Feature;

use App\Server;
use App\User;
use Faker\Factory;
use Tests\TestCase;

class ServerTest extends TestCase
{

    public function testServersAreCreatedCorrectly()
    {
        $faker = Factory::create();
        $serverData = [
            'name' => $faker->name,
            'url' => $faker->url,
        ];

        $this->json('POST', '/api/v1/servers', $serverData, $this->getHeaders())
            ->assertStatus(201)
            ->assertJson([
                'name' => $serverData['name'],
                'url' => $serverData['url'],
            ]);
    }

    public function testServersTryToCreate()
    {
        $faker = Factory::create();
        $serverData = [
            'url' => $faker->url,
        ];

        $this->json('POST', '/api/v1/servers', $serverData, $this->getHeaders())
            ->assertStatus(400)
            ->assertJson([
                'success' => false,
            ])
            ->assertJsonStructure(['success', 'status', 'message']);
    }

    public function testServersAreUpdatedCorrectly()
    {
        $server = factory(Server::class)->create();

        $faker = Factory::create();
        $serverData = [
            'name' => $faker->name,
            'url' => $faker->url,
        ];

        $this->json('PUT', '/api/v1/servers/' . $server->id, $serverData, $this->getHeaders())
            ->assertStatus(200)
            ->assertJson([
                'name' => $serverData['name'],
                'url' => $serverData['url'],
            ]);
    }

    public function testServersAreDeletedCorrectly()
    {
        $server = factory(Server::class)->create();

        $this->json('DELETE', '/api/v1/servers/' . $server->id, [], $this->getHeaders())
            ->assertStatus(204);
    }


    public function testServersAreListedCorrectly()
    {
        $server1 = factory(Server::class)->create();
        $server2 = factory(Server::class)->create();
        $server3 = factory(Server::class)->create();

        $this->json('GET', '/api/v1/servers', [], $this->getHeaders())
            ->assertStatus(200)
            ->assertJson(['data' => [
                [ 'name' => $server1->name, 'url' => $server1->url],
                [ 'name' => $server2->name, 'url' => $server2->url],
                [ 'name' => $server3->name, 'url' => $server3->url]
            ]])
            ->assertJsonStructure(['data' => [
                '*' => ['id', 'name', 'url', 'status', 'created_at', 'updated_at', 'deleted_at'],
            ]]);
    }
}
