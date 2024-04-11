<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Traits\HttpResponses;

use App\Http\Resources\CourseVideoResource;

use App\Models\Course;
use App\Models\Video;
use App\Models\UserInfo;

class CourseVideoController extends Controller
{

    use HttpResponses;
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        // Dentro de la carpeta use App\Http\Resources\CourseVideoResource
        // se carga como se vera el array de objetos y se llama en este archivo.
        try {
        
            $courses_videos = CourseVideoResource::collection(
                Course::all()
            );
    
    
            return $this->success($courses_videos);

        } catch (\Throwable $th) {
            return $this->error($th, 'Internal server error, comunicate with the admin', 500);
        }

        /** 
         * ! NOTA: Esta es otra alternativa para mostrar los cursos y los videos
         * ! pero es peor.
        */ 
        // Funcion que se encarga de mandar un array de objetos
        // con los cursos y sus respectivos videos
        // $courses = Course::all();
        // $data = [];

        // foreach ($courses as $index => $course) {
        //     $data [] = [
        //         'course' => $course,
        //         'videos' => Course::find($course->id)->videos()->get()
        //     ];
        // }

        // return response()->json($data);


    }

    public function getCourseVideos( $course )
    {
        try {
            $courses_videos = CourseVideoResource::collection(
                Course::where('id', $course )->get()
            );
    

            return $this->success($courses_videos);

        } catch (\Throwable $th) {
            return $this->error($th, 'Internal server error, comunicate with the admin', 500);
        }
    }
}
