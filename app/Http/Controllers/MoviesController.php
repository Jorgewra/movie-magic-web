<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Movie;
use App\models\MovieActor;
use Validator;

class MoviesController extends Controller
{
    private $movie_db;
    private $movieActor_db;
    public function __construct(Movie $movie, MovieActor $movieActor) {
        $this->movie_db = $movie;
        $this->movieActor_db = $movieActor;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        try {
            $list = Movie::orderBy('created_at', 'desc')->with('getActors')->paginate(10);
            if($list == null || count($list) == 0){
                return response()->json([
                    'message' => 'Not found',
                ], 404);
            }
            return response()->json($list, 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Server Errors' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     *@param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return $this->store($request,null);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  id Movie
     * @return \Illuminate\Http\Response
     */
    private function store(Request $request, $id = null){
        try {
            $validator = Validator::make($request->all(),
            ['name' => 'required',
             'director' => 'required',
             'classification' => 'required',
             'year' => 'required',
             'description' => 'required',

            ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'field is incorrect!',
                ], 400);
            }
            if($id != null){
                $mov = $this->movie_db::find($id);
                if ($mov == null) {
                    return response()->json([
                        'message' => 'Movie not found',
                    ], 400);
                }else{
                    $this->movie_db = $mov;
                }
            }else{
                if(!is_array($request->actors)){
                    return response()->json([
                        'message' => 'Actors not found',
                    ], 400);
                }
            }
            $this->movie_db->fill($request->all());
            $this->movie_db->save();
            /**
             * Save actor in movie
             */
            if(is_array($request->actors)){
                foreach($request->actors as $act){
                   $obj = new MovieActor();
                   $obj->fill($act);
                   $obj->movie_id = $this->movie_db->id;
                   $obj->save();
                }
            }
            return response()->json(['message' => 'Success'], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Failed in services!' . $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $this->store($request,$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mov = $this->movie_db::find($id);
        if ($mov == null) {
            return response()->json([
                    'message' => 'Movie not found',
            ], 400);
        }else{
            $mov->delete();
            return response()->json(['message' => 'Deleted'], 200);
        }

    }
}
