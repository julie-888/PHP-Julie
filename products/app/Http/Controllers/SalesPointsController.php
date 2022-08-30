<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesPoints;

class SalesPointsController extends Controller
{
    public function create(Request $request)
    {
       $points = new SalesPoints();
       $points->name = $request->name;
       $points->info = $request->info;
       $points->adress = $request->adress;
       $points->user_id = $request->user_id;
       $points->save();

       return $points;

    }
    public function list()
    {
        $points = SalesPoints::get();
        return $points;
    }

    public function position($id)
    {
        if (empty($id))
        {
        throw new NotFoundException("id not specified!");
        }
        else
        {
            $points = SalesPoints::where('id', $id)->first();
            return $points;
        }
    }

    public function update(Request $request, $id)
    {
        $point = SalesPoints::find($id);
        $point->update($request->all());
        return $point; 

    }
    public function delete($id)
    {
        SalesPoints::destroy($id);
    } 
}
