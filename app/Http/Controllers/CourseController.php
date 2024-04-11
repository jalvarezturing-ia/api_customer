<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Video;
use App\Models\UserInfo;

use App\Traits\HttpResponses;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Resources\CourseResource;


class CourseController extends Controller
{

    use HttpResponses;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $courses = Course::find(2)->videos()->get();

        // return CourseResource::collection(
        //     Course::where('id', 1)->get()
        // );
        // Traemos el id del usuario autenticado
        $id = Auth::id();
        // Buscamos al usuario con su información
        $user = UserInfo::where('user_id', $id)->get();
        // Traemos el id de su plan
        $user_plan_id = $user[0]->plan_id;

        $courses = Course::where('plan_id', '<=', $user_plan_id)->get();

        return $this->success($courses);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $course = Course::create([
            "title" => $request->title,
            "description" => $request->description,
            "topic" => $request->topic,
            "index" => $request->index,
            "isActive" => $request->isActive,
            "plan_id" => (int)$request->plan_id,
        ]);


        // Guardamos en la base de datos
        $course->save();

        return $this->success($course, 'Course created successfully');

    }

    public function coursesByPlan(String $plan_id)
    {
        $id = Auth::id();
        // Buscamos al usuario con su información
        $user = UserInfo::where('user_id', $id)->first();
        $coursesByPlan = Course::where([
            'plan_id' => $plan_id,
            'topic' => 'tableau'
        ])->get();
        // Traemos el id de su plan
        $user_plan_id = $user->plan_id;

        // Comprueba si el plan del usuario corresponde al del curso
        // if($coursesByPlan[0]->plan_id > $user_plan_id ){
        //     return $this->error('', 'Ups, you are not able to see this', 403);
        // }

        return $this->success($coursesByPlan, '');
    }

    public function coursesByTopic(String $topic)
    {
        $id = Auth::id();
        // Buscamos al usuario con su información
        $user = UserInfo::where('user_id', $id)->first();
        $coursesByTopic = Course::where('topic', $topic)->get();
        // Traemos el id de su plan
        $user_plan_id = $user->eLearning_plan;

        // Comprueba si el plan del usuario corresponde al del curso
        // if($coursesByTopic[0]->plan_id > $user_plan_id ){
        //     return $this->error('', 'Ups, you are not able to see this', 403);
        // }

        return $this->success($coursesByTopic, '');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {

        //public function show()
        //{
        // feature https://www.youtube.com/watch?v=TzAJfjCn7Ks

        try {

            if( !$course ){
                return $this->error('', 'Course not found', 404);
            }
            // Traemos el id del usuario autenticado
            $id = Auth::id();
            // Buscamos al usuario con su información
            $user = UserInfo::where('user_id', $id)->get();
            // Traemos el id de su plan
            $user_plan_id = $user[0]->plan_id;

            // Comprueba si el plan del usuario corresponde al del curso
            if($course->plan_id > $user_plan_id ){
                return $this->error('', 'Ups, you are not able to see this', 403);
            }

            $courses = Course::find($course->id);
            $videos = Video::where('course_id', $course->id)->get();

            $array = [];

            foreach ($videos as $video) {
                $array[] = [
                    'id' => $video->id,
                    'title' => $video->title,
                    'duration' => $video->duration,
                    'description' => $video->description,
                    'file_path' => $video->file_path,
                    'course_id' => $video->course_id,
                ];
            }

            $data = [
                'course' => $courses,
                'videos' => $array,
            ];

            return $this->success($data);

        } catch (\Throwable $th) {
            return $this->error('', 'Internal server error, comunicate with the admin', 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {

        try {
            $course->title =  $request->title;
            $course->description = $request->description;
            $course->topic = $request->topic;
            $course->isActive = $request->isActive;
            $course->plan_id = (int)$request->plan_id;

            // Guardamos en la base de datos
            $course->save();

            return $this->success($course, 'Course updated successfully');

        } catch (\Throwable $th) {
            return $this->error('', 'Internal server error, comunicate with the admin', 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->isActive = False;
        // Guardamos en la base de datos
        $course->save();

        return $this->success([], 'Course deleted successfully');
    }
}
