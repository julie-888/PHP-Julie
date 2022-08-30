<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductTags;

class ProductTagsController extends Controller
{
    public function create(Request $request)
    {
       $prodtags = new ProductTags();
       $prodtags->product_id = $request->product_id;
       $prodtags->tag_id = $request->tag_id;
       $prodtags->save();

       return $prodtags;

    }
    public function list()
    {
        $prodtags = ProductTags::get();
        return $prodtags;
    }

    public function position($id)
    {
        if (empty($id))
        {
        throw new NotFoundException("id not specified!");
        }
        else
        {
            $prodtags = ProductTags::where('id', $id)->first();
            return $prodtags;
        }
    }

    public function update(Request $request, $id)
    {
        $prodtag = ProductTags::find($id);
        $prodtag->update($request->all());
        return $prodtag; 

    }
    public function delete($id)
    {
        ProductTags::destroy($id);
    }
}
