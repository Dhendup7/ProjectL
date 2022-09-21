<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Faker\Guesser\Name;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{
    public function welcome()
    {
        $data = [
            'name' => 'Dhendup', 'age' => 17
        ];
        return view('welcome')->with($data);
    }

    public function nextpage()
    {

        return view('nextpage');
    }

    public function create()
    {
        return view('create');
    }


    public function store(Request $request)
    {
        $khumbilla = new Hotel();
        $khumbilla->name = $request->name;
        $filenameWithExt = $request->file('image')->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $request->file('image')->getClientOriginalName();
        $fileToStore = $filename . "_" . time() . "." . $extension;
        $img = Image::make($request->file('image'));
        $img->save('storage/image/' . $fileToStore);

        $khumbilla->image = $fileToStore;

        $khumbilla->save();
        return redirect('/list');

    }

public function list(){
    $hotels=Hotel::get();
   return view('list')->with('students',$hotels);
    }

}
