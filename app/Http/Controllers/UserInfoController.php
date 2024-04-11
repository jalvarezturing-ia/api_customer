<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;

use Illuminate\Support\Facades\Auth;

use App\Models\UserInfo;
use Illuminate\Http\Request;

use App\Http\Resources\UserInfoResource;

use App\Models\User;

class UserInfoController extends Controller
{
    use HttpResponses;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users_info = UserInfoResource::collection(
            User::all()
        );

        return $this->success($users_info);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_info = UserInfo::create([
            'phone_number' => $request->phone_number,
            'country' => $request->country,
            'city' => $request->city,
            'company' => $request->company,
            'user_id' => $request->user_id,
            'plan_id' => $request->plan_id,
            'eLearning_plan' => $request->eLearning_plan,
        ]);

        // Funcion que recibe 3 parametros success( data, message y status code)
        return $this->success(
            ['user' => $user_info],
            'User information saved successfully'
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function show(String $id)
    {

        try {

            $user_info = UserInfo::where('user_id', $id)->first();

            return $this->success($user_info);

        } catch (\Throwable $th) {
            return $this->error($th, 'Internal server error, comunicate with the admin', 500);
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try {

            $valid = UserInfo::where('user_id', $request->user_id)->update([
                'phone_number' => $request->phone_number,
                'country' => $request->country,
                'city' => $request->city,
                'company' => $request->company,
                'user_id' => $request->user_id,
                'plan_id' => $request->plan_id,
                'eLearning_plan' => $request->eLearning_plan,
            ]);

            if ($valid) {
                return $this->success($valid, 'Course updated successfully');
            }
            return $this->error(null,'Usuario no encontrado',404);

        } catch (\Throwable $th) {
            return $this->error($th, 'Internal server error, comunicate with the admin', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserInfo  $userInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserInfo $userInfo)
    {
        return $this->success(null, '');
    }
}
