<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnouncementRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [

            
            'id' => ['required'],  
            'header' => ['required'],
            'subHeader' => ['required'],
            'image' => ['required'],
            'description' => ['required'],
            'user_id' => ['required'],
            'created' => ['required'],
            'updated' => ['required'],
        ];
    }
}
