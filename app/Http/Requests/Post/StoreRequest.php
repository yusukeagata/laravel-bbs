<?php namespace App\Http\Requests\Post;

 use Illuminate\Foundation\Http\FormRequest;

 class StoreRequest extends FormRequest {

     public function rules() {
         return [
             'title' => 'required|max:20',
             'content' => 'required|max:200',
             
         ];
     }
     public function messages() {
         return [
             'title.required' => 'タイトルを正しく入力してください。',
             'content.required' => '本文を正しく入力してください。',
         ];
     }

     public function authorize() {
          return true;
     }

 }