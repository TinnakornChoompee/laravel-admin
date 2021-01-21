<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserCreateRequest;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function index()
    {
        return User::all();
    }

    public function store(UserCreateRequest $request)
    {
        $user = User::create($request->all());
        return response($user, Response::HTTP_CREATED);
    }

    public function show(User $user)
    {
        return response($user);
    }

    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response($user, Response::HTTP_ACCEPTED);
    }

    public function destroy(User $user)
    {
        $user->delete();
        return response(null, Response::HTTP_NO_CONTENT);
    }
}
