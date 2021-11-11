<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Blog;

use App\Comment;

use App\Notifications;

class BlogController extends Controller
{
    public function index(){
        $Blog = DB::table('blog')->paginate(12);
        $page_title = 'Our Blog';
        return view('blog.index',compact('page_title','Blog'));
    }

    public function blog($title){
        $page_title = 'Blog Title Here';
        $Blog = DB::table('blog')->where('title',$title)->get();
        foreach ($Blog as $key => $value) {
            $page_title = $value->title;
        }
        return view('blog.blog',compact('page_title','Blog'));
    }

    public function blogCat($cat){
        $Categories = DB::table('category')->where('cat',$cat)->get();
        foreach ($Categories as $key => $value) {
            $Blog = DB::table('blog')->where('cat',$value->id)->get();
            if($Blog->isEmpty()){
                $page_title = 'Sorry There are No Blogs Written For That Category';
            }else{
                foreach ($Blog as $key => $value) {
                    $page_title = $value->title;
                    
                 }
            }
           
        }
        
        
        return view('blog.index',compact('page_title','Blog'));
    }

    public function search_blog(Request $request){
        $Blog = DB::table('blog')
        ->where('title','like', '%'.$request->search.'%')->paginate(18);
        $page_title = $request->search;
        return view('blog.index',compact('page_title','Blog'));
    }

    public function post_comment(Request $request){
        $Comment = new Comment;
        $Comment->author =$request->author;
        $Comment->blog_id = $request->commentID;
        $Comment->content = $request->comment;
        $Comment->email = $request->email;
        $Comment->save();
        
        $Notifications = new Notifications;
        $Notifications->type = 'Comment';
        $Notifications->content = 'You have a new Comment';
        $Notifications->save();

        return "Your Comment Has Been Posted Successfully, It will appear shortly after approval";
    }
}
