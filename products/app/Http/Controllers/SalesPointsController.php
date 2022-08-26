<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SalesPoints;

class SalesPointsController extends Controller
{
    public function create(Request $request)
    {
       $points = new Point();
       $points->id = $request->id;
       $points->name = $request->name;
       $points->info = $request->info;
       $points->adress = $request->adress;
       $points->user_id = $request->user_id;
       $points->save();

    }
    public function list()
    {
        $points = Point::get();
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
            $points = Point::where('id', $id)->exception();
            return $points;
        }
    }

    public function update(Request $request, Point $point)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'info' => 'required',
            'adress' => 'required',
            'user_id' => 'required',
        ]);

        $point->update($request->all());

        return $point; 
    }
    public function delete(Point $point)
    {
        $points->delete();
    } 
}
