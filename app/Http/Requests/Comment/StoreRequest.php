<?php namespace App\Http\Requests\Comment;

 use Illuminate\Foundation\Http\FormRequest;

 class StoreRequest extends FormRequest {

     public function rules() {
         return [
             
             
         ];
     }
     public function messages() {
         return [
             
         ];
     }

     public function authorize() {
          return true;
     }

 }