<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function saving(Request $request){
        $newProfile = new Profile;
        $newProfile->name = $request->formName;
        $newProfile->description = $request->formDesc;
        $newProfile->save();
        return redirect('/');
    }

    public function delAll(){
        DB::statement('truncate table profiles');
        return redirect('/');
    }

    public function delOne($id){
       $profileItem  = Profile::find($id);
       $profileItem->delete($id);
        return redirect('/');
    }

}


