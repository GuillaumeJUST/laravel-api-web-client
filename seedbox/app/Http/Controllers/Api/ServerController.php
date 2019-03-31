<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\ServerRequest;
use App\Server;
use Illuminate\Http\Request;

class ServerController extends ApiController
{
    /**
     *
     * @OA\Get(
     *      path="/servers",
     *      operationId="getServersList",
     *      tags={"Servers"},
     *      security={
     *         {"Authorization": {}}
     *      },
     *      summary="Get list of servers",
     *      description="Returns list of servers",
     *      @OA\Response(response=200, description="successful operation", @OA\JsonContent()),
     *      @OA\Response(response=400, description="Bad request"),
     * )
     *
     * @param Request $request
     *
     * @return
     */
    public function index(Request $request)
    {
        return Server::paginate($request->get('limit', 15));
    }

    /**
     *
     * @OA\Get(
     *      path="/servers/{server}",
     *      operationId="getServerById",
     *      tags={"Servers"},
     *      security={
     *         {"Authorization": {}}
     *      },
     *      summary="Get server information",
     *      description="Returns server data",
     *      @OA\Parameter(
     *          name="id",
     *          description="Server id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(response=200, description="successful operation", @OA\JsonContent()),
     *      @OA\Response(response=400, description="Bad request"),
     * )
     *
     * @param Server $server
     *
     * @return Server
     */
    public function show(Server $server): Server
    {
        return $server;
    }
    /**
     *
     * @OA\Post(
     *      path="/servers",
     *      operationId="postServer",
     *      tags={"Servers"},
     *      summary="Store server",
     *      description="Create new server",
     *      security={
     *         {"Authorization": {}}
     *      },
     *      @OA\RequestBody(
     *         description="server object",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/x-www-form-urlencoded",
     *             @OA\Schema(ref="#/components/schemas/Server")
     *         )
     *      ),
     *      @OA\Response(response=200, description="successful operation", @OA\JsonContent()),
     *      @OA\Response(response=400, description="Bad request"),
     * )
     *
     * @param ServerRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(ServerRequest $request): \Illuminate\Http\JsonResponse
    {
        $server = Server::create($request->all());
        return response()->json($server, 201);
    }


    /**
     *
     * @OA\Put(
     *      path="/servers/{server}",
     *      operationId="putServer",
     *      tags={"Servers"},
     *      summary="Update server",
     *      description="update an server",
     *      security={{"Bearer": {}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Server id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\RequestBody(
     *         description="server object",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(ref="#/components/schemas/Server")
     *         )
     *      ),
     *      @OA\Response(response=200, description="successful operation", @OA\JsonContent()),
     *      @OA\Response(response=400, description="Bad request"),
     * )
     *
     * @param Request $request
     * @param Server $server
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ServerRequest $request, Server $server): \Illuminate\Http\JsonResponse
    {
        $server->update($request->all());
        return response()->json($server, 200);
    }
    /**
     *
     * @OA\Delete(
     *      path="/servers/{server}",
     *      operationId="deleteServer",
     *      tags={"Servers"},
     *      summary="Delete server",
     *      description="delete an server",
     *      security={{"Bearer": {}}},
     *      @OA\Parameter(
     *          name="id",
     *          description="Server id",
     *          required=true,
     *          in="path",
     *          @OA\Schema(
     *              type="integer"
     *          )
     *      ),
     *      @OA\Response(response=200, description="successful operation", @OA\JsonContent()),
     *      @OA\Response(response=400, description="Bad request"),
     * )
     *
     * @param Server $server
     *
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delete(Server $server): \Illuminate\Http\JsonResponse
    {
        $server->delete();
        return response()->json(null, 204);
    }
}
