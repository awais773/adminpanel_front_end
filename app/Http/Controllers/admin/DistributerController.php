<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Invitation;
use App\Models\Api\Product;
use App\Mail\InvitationMail;
use Illuminate\Http\Request;
use App\Models\Api\Distributer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class DistributerController extends Controller
{
    private $success = false;
    private $message = '';

    /**
     * This function is used to return email verification view
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $category = Distributer::latest()->get();
        return view('admin.main.index');
    }
    public function create()
    {
        return view('admin.main.adddistribution');
    }

    public function store(Request $req)
    {
        $validator = Validator::make($req->all(), [
            // 'name' => 'required',
            //     //  'email' => 'required',
            //     // 'contact_person' => 'required',
            //     //  'contact_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }
        $rating = new Distributer();
        $rating->name = $req->name;

        if ($image = $req->file('image')) {
            $destinationPath = 'distributorImage/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
            $rating->image=$profileImage;
        }

        $rating->save();
        return view('admin.main.adddistribution');
    }


    public function show()
    {
        $Distributer= Distributer::latest()->get();
        return view('admin.main.distributionlist', compact('Distributer'));

        
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
