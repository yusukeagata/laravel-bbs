<?php namespace App\Http\Requests\Comment;

 use Illuminate\Foundation\Http\FormRequest;

 class StoreRequest extends FormRequest {

     public function rules() {
         return [
             'commenter' => 'required|max:20',
             'comment' => 'required|max:200',
             
         ];
     }
     public function messages() {
         return [
             'commenter.required' => '名前を入力してください。',
             'comment.required' => 'コメントを入力してください。',
             'commenter.max:20' => '名前が長すぎます。',

         ];
     }

     public function authorize() {
          return true;
     }

 }