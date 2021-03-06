<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\Actor;
use Validator;

class ActorsController extends Controller
{
    private $actor;
    public function __construct(Actor $actor) {
        $this->actor = $actor;
    }
    public function getAll()
    {
        try {
            $list = Actor::orderBy('created_at', 'desc')->paginate(10);
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
            [
                'name' => 'required',
                'personage'=> 'required',
                'paper'=> 'required',
            ]);
            if ($validator->fails()) {
                return response()->json([
                    'message' => 'field is incorrect!',
                ], 400);
            }
            if($id != null){
                $act = $this->actor::find($id);
                if ($act == null) {
                    return response()->json([
                        'message' => 'Movie not found',
                    ], 400);
                }else{
                    $this->actor = $act;
                }
            }
            $this->actor->fill($request->all());
            $this->actor->save();
            return response()->json(['message'=>'Success'], 200);
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
        $act = $this->actor::find($id);
        if ($act == null) {
            return response()->json([
                    'message' => 'Movie not found',
            ], 400);
        }else{
            $act->delete();
            return response()->json(['message' => 'Deleted'], 200);
        }

    }
}
