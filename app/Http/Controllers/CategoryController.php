<?php namespace App\Http\Controllers;
/**
  * CategoryController
  * 
  * 
  * @author ELI STONE <3li.stone@gmail.com>
**/

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use App\Http\Requests\CreateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of categorys.
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
     * Store a newly created news category.
     *
     * @return Response
     */
    public function store(CreateCategoryRequest $request)
    {
        // request look for title and description
        $values = $request->only(['title','description']);

        // create new category with values
        Category::create($values);

        // set response as json with data
        return Response()->json(['message' => 'New category successfully added','code' => 201],201);
    }

    /**
     * Display a specified category.
     *
     * @param  int  $id - id of a category
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

    /**
     * Update a specified category.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove a specified category.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
