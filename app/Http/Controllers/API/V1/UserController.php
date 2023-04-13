<?php

namespace App\Http\Controllers\API\V1;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\Http\Resources\V1\UserCollection;
use App\Http\Requests\V1\StoreUserRequest;
use App\Http\Requests\V1\UpdateUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::where([]);

        $includeTasks = $request->query('includeTasks');

        if($includeTasks) {
            $users = $users->with('task');
        }
        return new UserCollection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(StoreUserRequest $request)
    {
        return new UserResource(User::create($request->all()));   
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {   
        $includeTasks = request()->query('includeTasks');

        if($includeTasks) {
            return new UserResource($user->loadMissing('task'));
        }
        return new UserResource($user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();

        return;
    }
}
