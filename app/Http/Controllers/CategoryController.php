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
use App\News;
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

         // set success response as json with data
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

         // set success response as json with data
        return response()->json(['message' => 'New category successfully added','code' => 201],201);
    }

    /**
     * Display a specified category.
     *
     * @param  int  $id - id of a category
     * @return Response
     */
    public function show($id)
    {
        // find by $catId
        $category = Category::find($id);

        // if no category found
        if(!$category){
            // set response as an error
            return Response()->json(['message' => 'The category could not be found','code' => 404],404);
        }

         // set success response as json with data
        return Response()->json(['data' => $category,'code' => 200],200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $catId - id of a category
     * @param  int  $newsId - id of a news article, in the same category
     * @return Response
     */
    public function update(CreateCategoryRequest $request,$catId)
    {
        // find by $catId
        $category = Category::find($catId);

        // if no category found
        if(!$category){
            // set response as an error
            return Response()->json(['message' => 'The category could not be found','code' => 404],404);
        }

        // get title and descriptions
        $title                  = $request->get('title');
        $description            = $request->get('description');

        // set the new title and description if one presenet
        $category->title        = ($title) ? $title : $category->title;
        $category->description  = ($description) ? $description : $category->description;

        // save the category
        $category->save();

         // set success response as json with data
        return response()->json(['message' => "Category id '$catId' successfully updated",'code' => 200],200);
    }

    /**
     * Remove a specified category.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // find by $id
        $category = Category::find($id);

        // if no category found
        if(!$category){
            // set response as an error
            return Response()->json(['message' => 'The category could not be found','code' => 404],404);
        }   

        // check for any news items in the category
        $news_items = $category->news;
        if(sizeof($news_items) > 0){
              // set response as an error
            return Response()->json(['message' => 'Can not remove category, due to attached news articles. Remove associated news articals first.','code' => 409],409);
        }

        // remove the category if all alright
        $category->delete();

         // set success response as json with data
        return Response()->json(['message' => 'Category successfully deleted','code' => 200],200);
    }
}
