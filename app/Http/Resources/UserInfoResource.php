<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\InfoResource;

use App\Models\UserInfo;

class UserInfoResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $id = $this->id;
        return [
            'user' => [
                'name' => $this->name,
                'email' => $this->email,
                'info' => InfoResource::collection(UserInfo::where('user_id', $this->id)->get()),
            ],
        ];
    }
}
