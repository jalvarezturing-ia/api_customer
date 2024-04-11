<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Video;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $video1 = new Video;
        $video1->title = "Recorrido acerca del Customer Portal";
        $video1->duration = 141;
        $video1->description = "Veremos como ingresar y registrarnos en la página del portal, y ver algunas de las opciones que nos ofrece.";
        $video1->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video1->session_url = "";
        $video1->index = 1;
        $video1->course_id = 1;
        $video1->save();

        $video2 = new Video;
        $video2->title = "Sesión de Q&A";
        $video2->duration = 3600;
        $video2->description = "Sesión personalizada de la mano con nuestros expertos";
        $video2->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video2->session_url = "";
        $video2->index = 2;
        $video2->course_id = 1;
        $video2->save();

        $video3 = new Video;
        $video3->title = "Como descargar, instalar, activar Tableau Desktop";
        $video3->duration = 3600;
        $video3->description = "Sesión personalizada de la mano con nuestros expertos";
        $video3->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video3->session_url = "";
        $video3->index = 3;
        $video3->course_id = 2;
        $video3->save();

        $video4 = new Video;
        $video4->title = "Como descargar, instalar, activar Tableau Prep";
        $video4->duration = 3600;
        $video4->description = "Sesión personalizada de la mano con nuestros expertos";
        $video4->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video4->session_url = "";
        $video4->index = 4;
        $video4->course_id = 2;
        $video4->save();

        $video5 = new Video;
        $video5->title = "Como activar el sitio online";
        $video5->duration = 3600;
        $video5->description = "Sesión personalizada de la mano con nuestros expertos";
        $video5->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video5->session_url = "";
        $video5->index = 5;
        $video5->course_id = 2;
        $video5->save();

        $video6 = new Video;
        $video6->title = "Sesión de Q&A";
        $video6->duration = 7200;
        $video6->description = "Sesión personalizada de la mano con nuestros expertos";
        $video6->file_path = "";
        $video6->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video6->index = 35;
        $video6->course_id = 2;
        $video6->save();

        $video7 = new Video;
        $video7->title = "Validación de instalación Desktop, Prep, Online";
        $video7->duration = 3600;
        $video7->description = "Sesión personalizada de la mano con nuestros expertos";
        $video7->file_path = "";
        $video7->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video7->index = 7;
        $video7->course_id = 3;
        $video7->save();

        $video8 = new Video;
        $video8->title = "Entrega de resultados a través de una bitacora";
        $video8->duration = 3600;
        $video8->description = "Sesión personalizada de la mano con nuestros expertos";
        $video8->file_path = "";
        $video8->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video8->index = 8;
        $video8->course_id = 3;
        $video8->save();

        $video9 = new Video;
        $video9->title = "Sesión de Q&A";
        $video9->duration = 3600;
        $video9->description = "Sesión personalizada de la mano con nuestros expertos";
        $video9->file_path = "";
        $video9->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video9->index = 9;
        $video9->course_id = 3;
        $video9->save();

        $video10 = new Video;
        $video10->title = "Explicación de cómo interactuan las plataformas de Tableau en un ecosistema empresarial";
        $video10->duration = 3600;
        $video10->description = "Sesión personalizada de la mano con nuestros expertos";
        $video10->file_path = "";
        $video10->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video10->index = 10;
        $video10->course_id = 4;
        $video10->save();

        $video11 = new Video;
        $video11->title = "Sesión personalizada de Q&A";
        $video11->duration = 3600;
        $video11->description = "Sesión personalizada de la mano con nuestros expertos";
        $video11->file_path = "";
        $video11->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video11->index = 11;
        $video11->course_id = 5;
        $video11->save();

        $video12 = new Video;
        $video12->title = "Como descargar Tableau Server";
        $video12->duration = 3600;
        $video12->description = "Sesión personalizada de la mano con nuestros expertos";
        $video12->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video12->session_url = "";
        $video12->index = 12;
        $video12->course_id = 2;
        $video12->save();
        
        $video13 = new Video;
        $video13->title = "Recorrido detallado de Tableau Prep";
        $video13->duration = 3600;
        $video13->description = "Sesión personalizada de la mano con nuestros expertos";
        $video13->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video13->session_url = "";
        $video13->index = 13;
        $video13->course_id = 6;
        $video13->save();

        $video14 = new Video;
        $video14->title = "Recorrido detallado de Tableau Desktop";
        $video14->duration = 3600;
        $video14->description = "Sesión personalizada de la mano con nuestros expertos";
        $video14->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video14->session_url = "";
        $video14->index = 14;
        $video14->course_id = 6;
        $video14->save();

        $video15 = new Video;
        $video15->title = "Recorrido detallado de Tableau Cloud y Server";
        $video15->duration = 3600;
        $video15->description = "Sesión personalizada de la mano con nuestros expertos";
        $video15->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video15->session_url = "";
        $video15->index = 15;
        $video15->course_id = 6;
        $video15->save();

        $video16 = new Video;
        $video16->title = "Recorrido detallado de Tableau DM Online y Server M";
        $video16->duration = 3600;
        $video16->description = "Sesión personalizada de la mano con nuestros expertos";
        $video16->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video16->session_url = "";
        $video16->index = 16;
        $video16->course_id = 6;
        $video16->save();

        $video17 = new Video;
        $video17->title = "Sesión de Q&A";
        $video17->duration = 3600;
        $video17->description = "Sesión personalizada de la mano con nuestros expertos";
        $video17->file_path = "";
        $video17->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video17->index = 17;
        $video17->course_id = 6;
        $video17->save();

        $video18 = new Video;
        $video18->title = "Conexión a las fuentes de datos";
        $video18->duration = 7200;
        $video18->description = "Sesión personalizada de la mano con nuestros expertos";
        $video18->file_path = "";
        $video18->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video18->index = 18;
        $video18->course_id = 7;
        $video18->save();

        $video19 = new Video;
        $video19->title = "Mejores prácticas para la definición de fuentes de datos";
        $video19->duration = 7200;
        $video19->description = "Sesión personalizada de la mano con nuestros expertos";
        $video19->file_path = "";
        $video19->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video19->index = 19;
        $video19->course_id = 7;
        $video19->save();

        $video20 = new Video;
        $video20->title = "Apoyo en el desarrollo de un flujo básico en Tableau Prep";
        $video20->duration = 14400;
        $video20->description = "Sesión personalizada de la mano con nuestros expertos";
        $video20->file_path = "";
        $video20->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video20->index = 20;
        $video20->course_id = 7;
        $video20->save();

        $video21 = new Video;
        $video21->title = "Apoyo en el desarrollo de un flujo básico en Tableau Desktop";
        $video21->duration = 14400;
        $video21->description = "Sesión personalizada de la mano con nuestros expertos";
        $video21->file_path = "";
        $video21->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video21->index = 21;
        $video21->course_id = 7;
        $video21->save();

        $video22 = new Video;
        $video22->title = "Apoyo en la publicación de un Dashboard en Tableau online";
        $video22->duration = 21600;
        $video22->description = "Sesión personalizada de la mano con nuestros expertos";
        $video22->file_path = "";
        $video22->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video22->index = 22;
        $video22->course_id = 7;
        $video22->save();

        $video23 = new Video;
        $video23->title = "Presentación de Blueprint";
        $video23->duration = 3600;
        $video23->description = "Sesión personalizada de la mano con nuestros expertos";
        $video23->file_path = "";
        $video23->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video23->index = 23;
        $video23->course_id = 8;
        $video23->save();

        $video24 = new Video;
        $video24->title = "Sesión de Q&A";
        $video24->duration = 3600;
        $video24->description = "Sesión personalizada de la mano con nuestros expertos";
        $video24->file_path = "";
        $video24->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video24->index = 24;
        $video24->course_id = 8;
        $video24->save();

        $video25 = new Video;
        $video25->title = "Tableau Workshop (SuperStore) ";
        $video25->duration = 1600;
        $video25->description = "Sesión personalizada de la mano con nuestros expertos";
        $video25->file_path = "";
        $video25->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video25->index = 25;
        $video25->course_id = 9;
        $video25->save();

        $video25 = new Video;
        $video25->title = "Video Superstore";
        $video25->duration = 1600;
        $video25->description = "Sesión personalizada de la mano con nuestros expertos";
        $video25->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video25->session_url = "";
        $video25->index = 26;
        $video25->course_id = 9;
        $video25->save();

        $video27 = new Video;
        $video27->title = "Video Conferencia";
        $video27->duration = 1600;
        $video27->description = "Sesión personalizada de la mano con nuestros expertos";
        $video27->file_path = "";
        $video27->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video27->index = 27;
        $video27->course_id = 10;
        $video27->save();

        $video28 = new Video;
        $video28->title = "¿Qué son los aceleradores?";
        $video28->duration = 1600;
        $video28->description = "Sesión personalizada de la mano con nuestros expertos";
        $video28->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video28->session_url = "";
        $video28->index = 28;
        $video28->course_id = 10;
        $video28->save();

        $video29 = new Video;
        $video29->title = "¿Dónde consigo los aceleradores?";
        $video29->duration = 1600;
        $video29->description = "Sesión personalizada de la mano con nuestros expertos";
        $video29->file_path = "https://iframe.mediadelivery.net/embed/91002/f18bf81a-f7eb-4af7-b3ff-6cf792420956?autoplay=false";
        $video29->session_url = "";
        $video29->index = 29;
        $video29->course_id = 10;
        $video29->save();

        $video30 = new Video;
        $video30->title = "¿Qué aceleradores están disponibles?";
        $video30->duration = 7200;
        $video30->description = "Sesión personalizada de la mano con nuestros expertos";
        $video30->file_path = "";
        $video30->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video30->index = 30;
        $video30->course_id = 10;
        $video30->save();

        $video31 = new Video;
        $video31->title = "¿Cómo implementar un acelerador?";
        $video31->duration = 7200;
        $video31->description = "Sesión personalizada de la mano con nuestros expertos";
        $video31->file_path = "";
        $video31->session_url = "https://calendly.com/turing-ia-web/sesion-de-q-a";
        $video31->index = 31;
        $video31->course_id = 10;
        $video31->save();

    }
}
