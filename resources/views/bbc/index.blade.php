@extends('layouts.default')
 @section('content')

 <div class="col-xs-8 col-xs-offset-2">
     {{-- 投稿完了時にフラッシュメッセージを表示 --}}
     @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
     @endif

     {{-- エラーメッセージの表示 --}}
     @foreach($errors->all() as $message)
     <p class="bg-danger">{{ $message }}</p>
     @endforeach
     @foreach($posts as $post)
     
     <h2>タイトル：{{ $post->title }}
         <small>投稿日：{!! date('Y/m/d', strtotime($post->created_at)) !!}</small>
     </h2>
     
     <p>{{ $post->content }}</p>
     <p>{!! link_to("/bbc/{$post->id}", '続きを読む', array('class' => 'btn btn-primary')) !!}</p>
     <p>コメント数：{{ $post->comment_count }}</p>
     <hr />
     @endforeach
     {{ $posts->links() }}
 </div>
 
 @stop
