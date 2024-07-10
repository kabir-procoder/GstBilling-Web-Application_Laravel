<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LogoModel;
use App\Models\FaviconModel;
use Str;

class LogoController extends Controller
{
    public function mainlogo()
    {
        $data['getRecord'] = LogoModel::all();
        return view('admin.logo.mainlogo', $data);
    }

    public function mainlogo_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = new LogoModel;
        } else {
            $insertData = LogoModel::find($request->id);
        }
        if(!empty($request->file('mainlogo'))) {
            if(!empty($insertData->image) && file_exists('public/images/mainlogo/'.$insertData->image))
            {
                unlink('public/images/mainlogo/'.$insertData->image);
            }
            $file       = $request->file('mainlogo');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/mainlogo', $filename);
            $insertData->image = $filename; 
        }
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }

    // Favicon
    public function favicon()
    {
        $data['getRecord'] = FaviconModel::all();
        return view('admin.logo.favicon', $data);
    }

    public function favicon_post(Request $request)
    {
        if($request->add_to_update == 'Add') {
            $insertData = new FaviconModel;
        } else {
            $insertData = FaviconModel::find($request->id);
        }
        if(!empty($request->file('favicon'))) {
            if(!empty($insertData->image) && file_exists('public/images/favicon/'.$insertData->image))
            {
                unlink('public/images/favicon/'.$insertData->image);
            }
            $file       = $request->file('favicon');
            $randomStr  = Str::random(10);
            $filename   = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/favicon', $filename);
            $insertData->image = $filename; 
        }
        $insertData->save();
        return redirect()->back()->with('success', 'Data Insert Successfully');
    }



}
