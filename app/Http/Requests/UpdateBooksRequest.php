<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBooksRequest extends FormRequest
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
        return [
            'name' => 'required|string',
            'author_id' => 'required|exists:App\Models\Author,id',
            'pdf_file' => 'sometimes',
            'omni_file' => 'sometimes'
        ];
    }

    public function messages(){
        return [
            'name.required' => 'sorry but the book\'s name is required',

            'author.required' => 'Sorry but you did not select an author',
            'author.exists' => 'please select a valid author',

//            'pdf_file.required' => 'Sorry but the PDF file is required',
//            'pdf_file.mimes' => 'Sorry but the PDF file should only be an .pdf file',
//
////            'omni_file.required' => 'Sorry but the OMNI file is required',
////            'omni_file.mimes' => 'Sorry but the omni file should only be an .omni file'
        ];

    }
}
