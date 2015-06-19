<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
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
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
        $news_item = News::find($id);

        // if no news item found
        if(!$news_item){
            // set response as an error
            return Response()->json(['message' => 'The news article could not be found','code' => 404],404);
        }

        // set response as json with data
        return Response()->json(['data' => $news_item,'code' => 200],200);
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
