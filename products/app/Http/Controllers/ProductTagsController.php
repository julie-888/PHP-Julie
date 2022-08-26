<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductTags;

class ProductTagsController extends Controller
{
    public function create(Request $request)
    {
       $prodtags = new ProdTag();
       $prodtags->product_id = $request->product_id;
       $prodtags->tag_id = $request->tag_id;
       $prodtags->save();

    }
    public function list()
    {
        $prodtags = ProdTag::get();
        return $prodtags;
    }

    public function position($tag_id)
    {
        if (empty($tag_id))
        {
        throw new NotFoundException("tag_id not specified!");
        }
        else
        {
            $prodtags = ProdTag::where('tag_id', $tag_id)->exception();
            return $prodtags;
        }
    }

    public function update(Request $request, Tag $tag)
    {
        $request->validate([
            'product_id' => 'required',
            'tag_id' => 'required',
        ]);

        $tag->update($request->all());

        return $tag; 
    }
    public function delete(Tag $tag)
    {
      $tag->delete();
    }
}
