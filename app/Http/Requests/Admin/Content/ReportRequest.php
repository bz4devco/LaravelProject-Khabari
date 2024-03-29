<?php

namespace App\Http\Requests\Admin\Content;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        if($this->isMethod('post')){
            return [
                'title' => 'required|max:120|min:2|regex:/^[الف-یa-zA-Z0-9\-۰-۹آء-ي.,،:)(؟!()?! ]+$/u',
                'abstract' => 'required|max:300|min:5',
                'body' => 'required|min:5',                
                'commentable' => 'required|numeric|in:0,1',
                'image' => 'required|image|mimes:png,jpg,jpeg,gif,ico,svg,webp',
                'category_id' => 'required|numeric|exists:report_categories,id|regex:/^[0-9]+$/u',
                'new_date' => 'required|numeric',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required',
                'sort' => 'required|numeric',
            ];
        }else{
            return [
                'title' => 'required|max:120|min:2|regex:/^[الف-یa-zA-Z0-9\-۰-۹آء-ي.,،:)(؟!()?! ]+$/u',
                'abstract' => 'required|max:300|min:5',
                'body' => 'required|min:5',                
                'commentable' => 'required|numeric|in:0,1',
                'image' => 'image|mimes:png,jpg,jpeg,gif,ico,svg,webp',
                'category_id' => 'required|numeric|exists:report_categories,id|regex:/^[0-9]+$/u',
                'new_date' => 'required|numeric',
                'status' => 'required|numeric|in:0,1',
                'tags' => 'required',
                'sort' => 'required|numeric',
            ];
        }
    }
}
