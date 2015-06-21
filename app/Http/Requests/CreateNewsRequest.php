<?php namespace App\Http\Requests;
/**
  * CreateNewsRequest
  * 
  * 
  * @author ELI STONE <3li.stone@gmail.com>
**/

use App\Http\Requests\Request;

class CreateNewsRequest extends Request
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
            'title' => 'string|required|max:255',
            'content' => 'string|max:65535|required',
            'image' => 'string|max:255|url|required',
            'likes' => 'integer|max:11|required',
            'dislikes' => 'integer|max:11|required',
        ];
    }

     /**
     * Get the proper failed validation response for the request.
     *
     * @param  array  $errors
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function response(array $errors)
    {
        return response()->json(['message'=>$errors, 'code'=>244],244);
    }
}
