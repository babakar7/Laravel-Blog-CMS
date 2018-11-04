<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;

use App\Post;

use App\Tag;

use App;

use Session;

use Auth;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return view('admin.posts.index')->with('posts', Post::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $categories = Category::all();


        $tags = Tag::all();



        if (count($categories) == 0 || count($tags) ==0) {


            Session::flash('info', 'You must have a category & a tag before creating a post');

            return redirect()->back();
        }



        return view('admin.posts.create')->with('categories',$categories)
                                          ->with('tags', App\Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $this->validate($request, [

         'title'=>'required|max:255',
            'featured' => 'required|image',
            'content' => 'required',
            'category_id' => 'required',
            'tags' => 'required'


        ]);


        $featured = $request->featured;

        //getClient... returns name of file

        $featured_new_name = time().$featured->getClientOriginalName();


        $featured->move('uploads/post', $featured_new_name);


        $post = Post::create([

            'title' => $request->title,

            'content' => $request->content,

            'featured' =>  'uploads/post/' . $featured_new_name,

            'category_id' => $request->category_id,

            'slug' => str_slug($request->title),

            'user_id' => Auth::id()

        ]);


        // tags in the relationship method created in Post
        $post->tags()->attach($request->tags);









        Session::flash('success','Post created successfully');


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    $data= [

            'post' => Post::find($id),
            'categories' => Category::all(),
            'tags' => Tag::all()



        ];


    return view ('admin.posts.edit')->with('data', $data);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //



        $this->validate($request, [


            // user can just leave featured image blank

            'title'=> 'required',
            'content' =>'required',
            'category_id' => 'required'



        ]);


        $post = Post::find($id);





        if($request->featured !== null  ){




            $featured = $request->featured;

            $featured_new_name = time().$featured->getClientOriginalName();


            $featured->move('uploads/post', $featured_new_name);


            $post->featured = 'uploads/post/' . $featured_new_name;




        }

         // tags in the relationship method created in Post
        ///sync deletes all  existing tags and then creates new ones
        $post->tags()->sync($request->tags);


        $post->title = $request->title;

        $post->content= $request->content;

        $post->category_id = $request ->category_id;


        $post->save();

        Session::flash('success', 'Post Updated Successfully');

        return redirect()->route('posts');

    }























    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $post = Post::find($id);

        $post->delete();



        Session::flash('success', 'Your Post was trashed');


        return redirect()->back();



    }


    public function trash (){



        $posts = Post::onlyTrashed()->get();


        return view ('admin.posts.trash')->with('posts', $posts);
    }





    public function kill ($id)


    {

        //Query builder



        // first to get instance of post class

        $post = Post::withTrashed()->where('id', $id)->first();



        $post->forceDelete();


        Session::flash('success', 'Your post was destroyed');

        return redirect()->back();



    }

    public function restore($id){



    $post = Post::withTrashed()->where('id', $id)->first();


        $post->restore();


            Session::flash('success', 'Your post was restored');


                return redirect()->route('posts');


    }



}
