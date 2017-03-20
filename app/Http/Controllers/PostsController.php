<?php namespace App\Http\Controllers;
 use App\Post;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\Http\Requests\Comment\StoreRequest;

 use Illuminate\Http\Request;

 class PostsController extends Controller {

     protected $posts;

     public function __construct(Post $posts)
     {
         $this->posts = $posts;
     }

     /**
      * Display a listing of the resource.
      *
      * @return Response
      */
     public function index()
     {
        $posts = $this->posts->all();
         return view('bbc.index')->with('posts', $posts);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return Response
      */
     public function create()
     {
        return view('bbc.create');
     }

     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
    public function store(StoreRequest $request)
 {
     $data = [
         'title' => $request->get('title'),
         'content' => $request->get('content'),
         
     ];
     $this->posts->create($data);

     return redirect()->action('PostsController@index')
         ->with('message', '投稿が完了しました。');
 }

     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
     public function show($id)
     {
         $post = $this->posts->find($id);
          return view('bbc.single')->with('post', $post);
     }

     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return Response
      */
     public function edit($id)
     {
        //
     }
     public function showCategory($id)
     {
     $category_posts = $this->posts->where('cat_id', $id)->get();

     return view('bbc.category')
         ->with('category_posts', $category_posts);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  int  $id
      * @return Response
      */
     public function update($id)
     {
        //
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return Response
      */
     public function destroy($id)
     {
         //
     }

 }