<?php

namespace App\Http\Controllers;

use UserCrud;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;
use App\Http\Requests\UserValidateRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = UserCrud::index();

        return UserResource::collection($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserValidateRequest $request)
    {
        $user = UserCrud::store($request);

        return UserResource::make($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  id  $user_id
     * @return \Illuminate\Http\Response
     */
    public function show($user_id)
    {
        $user = UserCrud::show($user_id);

        return UserResource::make($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  id  $user_id
     * @return \Illuminate\Http\Response
     */
    public function update(UserValidateRequest $request, $user_id)
    {
        $user = UserCrud::update($request, $user_id);

        return UserResource::make($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  id  $user_id
     * @return \Illuminate\Http\Response
     */
    public function destroy($user_id)
    {
        UserCrud::destroy();
    }
}
