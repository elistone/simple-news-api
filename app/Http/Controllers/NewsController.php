<?php namespace App\Http\Controllers;
/**
  * NewsController
  * 
  * 
  * @author ELI STONE <3li.stone@gmail.com>
**/

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the news articles.
     *
     * @return Response
     */
    public function index()
    {
        // get all
        $news = News::all();

        // set response as json with data
        return Response()->json(['data' => $news,'code' => 200],200);
    }

    /**
     * Display the specified news article.
     *
     * @param  int  $id - id of a news artical
     * @return Response
     */
    public function show($id)
    {
        // find by $id
        $news_item = News::find($id);

        // if no news item found
        if(!$news_item){
            // set response as an error
            return Response()->json(['message' => 'The news article could not be found','code' => 404],404);
        }

        // set response as json with data
        return Response()->json(['data' => $news_item,'code' => 200],200);
    }
}
