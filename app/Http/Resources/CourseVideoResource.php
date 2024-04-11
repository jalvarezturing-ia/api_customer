<?php

namespace App\Http\Resources;

use App\Models\Video;

use Illuminate\Http\Resources\Json\JsonResource;

class CourseVideoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        return [
            'course' => [
                'course_id' => (string)$this->id,
                'title' => $this->title,
                'description' => $this->description,
                'topic' => $this->topic,
                'isActive' => $this->isActive,
                'plan_id' => $this->plan_id,
            ],
            'videos' => Video::where('course_id', $this->id)->get()
        ];
    }
}
