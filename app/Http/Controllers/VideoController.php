<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;

use App\Models\Video;
use App\Models\Course;
use App\Models\UserInfo;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class VideoController extends Controller
{

    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //// $videos = Video::query()->where('course_id', 1)->get();
        // $videos = Video::where('course_id', 1)->get();
        // $videos = Video::find(1)->course()->get();
        $videos = Video::all();

        return $this->success($videos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $video = Video::create([
            'title' => $request->title,
            'description' => $request->description,
            'duration' => $request->duration,
            'file_path' => $request->file_path,
            'session_url' => $request->session_url,
            'index' => $request->index,
            'course_id' => (int)$request->course_id,
        ]);

        // Guardamos en la base de datos
        $video->save();

        return $this->success($video, 'Video created successfully');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        return $this->success($video);
    }

    public function videosByCourse(String $course_id)
    {
        $id = Auth::id();
        // Buscamos al usuario con su información
        $user = UserInfo::where('user_id', $id)->first();
        // Traemos el id de su plan
        $user_plan_id = $user->plan_id;

        $course = Course::where('id', $course_id)->first();

        $course_plan_id = $course->plan_id;

        // Comprueba si el plan del usuario corresponde al del curso
        if($course_plan_id > $user_plan_id ){
            return $this->error('', 'Ups, you are not able to see this', 403);
        }

        $videoByCourse = Video::where('course_id', $course_id)->orderBy('index', 'asc')->get();

        $data = [
            'course' => $course,
            'videos' => $videoByCourse,
        ];

        return $this->success($data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        try 
        {
            $video->title = $request->title;
            $video->description = $request->description;
            $video->duration = $request->duration;
            $video->file_path = $request->file_path;
            $video->course_id = (int)$request->course_id;

            // Guardamos en la base de datos
            $video->save();

            return $this->success($video, 'Video updated successfully');
            
        } catch (\Throwable $th) {
            return $this->error([$th, 'Internal server error, comunicate with the admin'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
