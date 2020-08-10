<?php

namespace App\Contracts;

interface UserInterface
{
	/**
     * Display a listing of the resource.
     */
    public function index();
    
    /**
     * Store a newly created resource in database.
     */
    public function store($request);

    /**
     * Display the specified resource.
     */
    public function show($user_id);

    /**
     * Update the specified resource in database.
     */
    public function update($request, $user_id);

    /**
     * Remove the specified resource from database.
     */
    public function destroy($user_id);
}
