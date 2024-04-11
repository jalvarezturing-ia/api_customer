<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Course;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $course = new Course;
        $course->title = "Como ingresar al customer Portal de Tableau";
        $course->description = "Adapta Tableau para tu compañía en 5 pasos";
        $course->topic = "starter-kits";
        $course->index = 1;
        $course->isActive = TRUE;
        $course->save();

        $course2 = new Course;
        $course2->title = "Instalación y Activación de Tableau";
        $course2->description = "Adapta Tableau para tu compañía en 7 pasos";
        $course2->topic = "starter-kits";
        $course2->index = 2;
        $course2->isActive = TRUE;
        $course2->save();

        $course3 = new Course;
        $course3->title = "Quality Assurance y Feedback";
        $course3->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course3->topic = "starter-kits";
        $course3->index = 3;
        $course3->isActive = TRUE;
        $course3->save();

        $course4 = new Course;
        $course4->title = "Tableau en un ecosistema empresarial";
        $course4->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course4->topic = "starter-kits";
        $course4->index = 4;
        $course4->isActive = TRUE;
        $course4->save();

        $course5 = new Course;
        $course5->title = "Sesión personalizada Q&A";
        $course5->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course5->topic = "starter-kits";
        $course5->index = 5;
        $course5->isActive = TRUE;
        $course5->save();

        $course6 = new Course;
        $course6->title = "Recorrido por las plataformas (Tips & Tricks)";
        $course6->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course6->topic = "starter-kits";
        $course6->index = 6;
        $course6->isActive = TRUE;
        $course6->save();

        $course7 = new Course;
        $course7->title = "Go! With Tableau";
        $course7->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course7->topic = "starter-kits";
        $course7->index = 7;
        $course7->isActive = TRUE;
        $course7->save();

        $course8 = new Course;
        $course8->title = "Introducción a Blueprint";
        $course8->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course8->topic = "starter-kits";
        $course8->index = 8;
        $course8->isActive = TRUE;
        $course8->save();

        $course9 = new Course;
        $course9->title = "Tableau Workshop (SuperStore)";
        $course9->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course9->topic = "starter-kits";
        $course9->index = 9;
        $course9->isActive = TRUE;
        $course9->save();

        $course10 = new Course;
        $course10->title = "Aceleradores de Tableau";
        $course10->description = "Adapta Tableau para tu compañía en 10 pasos";
        $course10->topic = "starter-kits";
        $course10->index = 10;
        $course10->isActive = TRUE;
        $course10->save();

    }
}
