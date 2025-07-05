<?php

namespace App\Http\Controllers;

use App\Models\achievements_table;
use App\Models\events_table;
use App\Models\hackathon;
use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class post_controller extends Controller
{



    public function create_post_action(Request $request){
        $post = new post();
        $post->title = $request->title;
        $post->caption = $request->caption;
        $post->university_id = $request->university_id;
        $post->post_type = $request->post_type;
        $photos_post = uniqid().$request->photos->getClientOriginalName();
        if($request->photos){
           
             $request->photos->move('images/posts/', $photos_post);

        }
        $post->photos =json_encode($photos_post);
        $post->save();

        if($request->post_type == 'Hackathon'){
            $hackathon = new hackathon();
            $hackathon->title = $request->title;
            $hackathon->caption = $request->caption;
            $hackathon->university_id = $request->university_id;
            $hackathon->photos = json_encode($photos_post);
            $hackathon->save();
            return redirect()->back()->with('success','Hackathon Anounced Successfully !');
        }

        elseif($request->post_type == 'Event'){
            $new_event = new events_table();
            $new_event->title = $request->title;
            $new_event->caption = $request->caption;
            $new_event->photos = json_encode($photos_post);
            $new_event->university_id = $request->university_id;
            $new_event->save();
            return redirect()->back()->with('success','Event Posted Successfully !');



        }
        else{
            $new_achievement = new achievements_table();
            $new_achievement->title = $request->title;
            $new_achievement->caption = $request->caption;
            $new_achievement->photos = json_encode($photos_post);
            $new_achievement->university_id = $request->university_id;
            $new_achievement->save();

            return redirect()->back()->with('success','Achievement Shared Successfully !');

        }

     

    
        

    }
}
