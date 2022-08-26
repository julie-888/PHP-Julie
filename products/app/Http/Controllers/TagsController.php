<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagsController extends Controller
{
    public function create(Request $request)
    {
       $tags = new Tag();
       $tags->name = $request->name;
       $tags->save();

       return $tags;

    }
    public function list()
    {
        $tags = Tag::get();
        return $tags;
    }

    public function position($name)
    {
        if (empty($name))
        {
        throw new NotFoundException("name not specified!");
        }
        else
        {
            $tags = Tag::where('name', $name)->exception();
            return $tags;
        }
    }

    public function update(Request $request, $name)
    {
        $data = $request->validate([
            'name' => 'required',
        ]);

        $tag->update($data);

        return $tag; 
    }
    public function delete($name)
    {
      Tag::destroy($name);
    }
}
