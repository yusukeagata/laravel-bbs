<?php

 namespace App\Http\Controllers;

 use App\Comment;
 use App\Http\Requests;
 use App\Http\Controllers\Controller;
 use App\Http\Requests\Comment\StoreRequest;

 class CommentsController extends Controller {

     protected $comments;

     public function __construct(Comment $comments)
     {
         $this->comments = $comments;
     }

     /**
      * Store a newly created resource in storage.
      *
      * @return Response
      */
     public function store(StoreRequest $request)
     {

         $data = [
             'commenter' => $request->get('commenter'),
             'comment' => $request->get('comment'),
             'post_id' => $request->get('post_id')
         ];
         $this->comments->create($data);

         return redirect()->back()
                 ->with('message', 'コメントを投稿しました。');
     }

 }