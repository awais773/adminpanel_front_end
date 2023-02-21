<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Api\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{

    public function index()
    {
        $data = Product::latest()->with('category','distributer')->get();
        if (is_null($data)) {
            return response()->json('data not found',);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'All Data susccessfull',
            'data' => $data,
        ]);
    }
    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            //   'name' => 'required',
            //  'email' => 'required',
            // 'contact_person' => 'required',
            //  'contact_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $rating = new Product();
        $rating->product_name = $req->product_name;
        $rating->store_name = $req->store_name;
        $rating->kosher_status = $req->kosher_status;
        $rating->barcode = $req->barcode;
        $rating->description = $req->description;
        $rating->manufacturer = $req->manufacturer;
        $rating->distributer_id = $req->distributer_id;
        $rating->category_id = $req->category_id;
        $rating->product_family = $req->product_family;
        $rating->diet = $req->diet;
        $rating->supervisor = $req->supervisor;
        $rating->ingredients = $req->ingredients;

        if ($image = $req->file('product_image')) {
            $destinationPath = 'file/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $rating->product_image = $profileImage;
        }
        $rating->save();

        
        if (is_null($rating)) {
            return response()->json('storage error',);
        }
        return response()->json([
            'success' => 'True',
            'message' => 'Product created successfully',
            'data' => $rating,
        ]);
    }
    

    public function show($id)
    {
        $program = Product::find($id);
        if (is_null($program)) {
            return response()->json('Data not found', 404);
        }
        return response()->json([
            'success' => 'True',
            'data' => $program,
        ]);
    }


  

    public function destroy($id)
    {
        $program = Product::find($id);
        if (!empty($program)) {
            $program->delete();
            return response()->json([
                'success' => true,
                'message' => ' delete successfuly',
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'something wrong try again ',
            ]);
        }
    }
}
