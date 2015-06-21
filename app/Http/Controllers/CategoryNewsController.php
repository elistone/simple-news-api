<?php namespace App\Http\Controllers;
/**
  * CategoryNewsController
  * 
  * 
  * @author ELI STONE <3li.stone@gmail.com>
**/

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;
use App\Category;
use App\Http\Requests\CreateNewsRequest;

class CategoryNewsController extends Controller
{
    /**
     * Display a list of news articles basied on the category.
     *
     * @param int $id - id of a category
     * @return Response
     */
    public function index($id)
    {
        // find by $id
        $category = Category::find($id);

        // if no category found
        if(!$category){
            // set response as an error
            return response()->json(['message' => 'The category could not be found','code' => 404],404);
        }

        // get all news from the found category
        $news_all = $category->news;

        // if no news found
        if($news_all->isEmpty()){
            // set response as an error
            return response()->json(['message' => "No news could be found in category id: '$id'",'code' => 404],404);
        }

        // set response as json with data
        return response()->json(['data' => $news_all,'code' => 200],200);
    }

    /**
     * Store a newly artical under a specific category.
     *
     * @param  request(POST)  $request - request data
     * @param  int  $catId - id of a category
     * @return Response
     */
    public function store(CreateNewsRequest $request,$catId)
    {
        // find by $catId
        $category = Category::find($catId);

        // if no category found
        if(!$category){
            // set response as an error
            return response()->json(['message' => 'The category could not be found','code' => 404],404);
        }

        // request look for specific post data
        $values = $request->only(['title','content','url','image','likes','dislikes']);

        // create the artical with the relationship 
        $category->news()->create($values);

        // set response as json with data
        return response()->json(['message' => "News article created and added to category id '$catId' successfully",'code' => 201],201);
    }

    /**
     * Display a specified news artical from a category.
     *
     * @param  int  $catId - id of a category
     * @param  int  $newsId - id of a news article, in the same category
     * @return Response
     */
    public function show($catId,$newsId)
    {
        // find by $id
        $category = Category::find($catId);

        // if no category found
        if(!$category){
            // set response as an error
            return Response()->json(['message' => 'The category could not be found','code' => 404],404);
        }

        // find news article from news
        $news_item = $category->news->find($newsId);

        // if news article not found
        if(!($news_item)){
            // set response as an error
            return Response()->json(['message' => "No news article with id: '$newsId' could be found in category id: '$catId'",'code' => 404],404);
        }

        // set response as json with data
        return Response()->json(['data' => $news_item,'code' => 200],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
