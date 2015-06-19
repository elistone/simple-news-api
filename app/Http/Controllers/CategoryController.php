<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all
        $categorys = Category::all();

        // set response as json with data
        return Response()->json(['data' => $categorys,'code' => 200],200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // find by $id
        $category = Category::find($id);

        // if no category found
        if(!$category){
            // set response as an error
            return Response()->json(['message' => 'The category could not be found','code' => 404],404);
        }

        // set response as json with data
        return Response()->json(['data' => $category,'code' => 200],200);
    }
}