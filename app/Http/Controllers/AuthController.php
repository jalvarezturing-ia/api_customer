<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Traits\HttpResponses;

use App\Models\User;
use App\Models\UserInfo;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\LogoutRequest;
use App\Http\Requests\SingupRequest;


class AuthController extends Controller
{
    use HttpResponses;


    public function index()
    {
        $users = User::all();

        return $this->success($users, '');
    }

    public function login(LoginRequest $request)
    {

        try {
            $request->validated($request->all());

            if (!Auth::attempt($request->only('email', 'password'))) {
                return $this->error('', 'Credentias do not match', 401);
            }

            // encuentra el primer usuario que coincida con el Email
            $user = User::where('email', $request['email'])->firstOrFail();

            if ($user->isActive === 0) {
                return $this->error('', 'La cuenta esta dada de baja', 401);
            }

            $token = $user->createToken('auth_token')->plainTextToken;

            return $this->success([
                'user' => $user,
                'access_token' => $token,
            ]);
        } catch (\Throwable $th) {
            return $this->error(['', 'Internal server error, comunicate with the admin'], 500);
        }
    }

    public function singup(SingupRequest $request)
    {
        try {
            $request->validated($request->all());

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'rol' => $request->rol,
                'password' => Hash::make($request->password),
                'isActive' => TRUE,
            ]);

            $token = $user->createToken('auth_token')->plainTextToken;

            // create user info

            $userinfo = UserInfo::create([
                'phone_number' => null,
                'country' => null,
                'city' => null,
                'company' => null,
                'user_id' => $user->id,
                'plan_id' => 0,
                'eLearning_plan' => 0,
            ]);

            return $this->success([
                'user' => $user,
                'user_info' => $userinfo,
                'token' => $token
            ]);
        } catch (\Throwable $th) {
            return $this->error(['Internal server error, comunicate with the admin'], $th, 500);
        }
    }

    public function logout()
    {
        try {

            Auth::user()->currentAccessToken()->delete();

            return $this->success([
                'message' => 'You have been successfully logout'
            ]);
        } catch (\Throwable $th) {
            return $this->error(['', 'Internal server error, comunicate with the admin'], 500);
        }
    }

    public function update(Request $request, String $id)
    {
        try {

            $user = User::where('id', $id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'rol' => $request->rol,
                'isActive' => $request->isActive,
            ]);

            return $this->success($user, 'User updated successfully');
        } catch (\Throwable $th) {
            return $this->error('', 'Internal server error, comunicate with the admin', 500);
        }
    }

    public function show(String $id)
    {
        try {

            $user = User::where('id', $id)->first();

            return $this->success($user, 'User selected successfully');
        } catch (\Throwable $th) {
            return $this->error('', 'Internal server error, comunicate with the admin', 500);
        }
    }

    public function updatePassword(Request $request, String $id)
    {
        try {

            $user = User::where('id', $id)->update([
                'password' => Hash::make($request->password),
            ]);

            return $this->success($user, 'Password updated successfully');
        } catch (\Throwable $th) {
            return $this->error('', 'Internal server error, comunicate with the admin', 500);
        }
    }

    public function destroy(String $id)
    {

        $user = User::firstWhere("id", $id);
        $user->isActive = FALSE;
        $user->save();

        return $this->success($user, 'Course deleted successfully');
    }

    public function session()
    {
        try {
            $user = Auth::user();

            return $this->success($user);
        } catch (\Throwable $th) {
            return $this->error('', 'Internal server error, comunicate with the admin', 500);
        }
    }
}
