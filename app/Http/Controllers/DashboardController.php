<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\PartiesModel;
use App\Models\PartiesTypeModel;
use App\Models\GstBillsModel;

use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(Auth::User()->is_role == 1)
        {
            $data['totalUser'] = User::count();
            $data['totalPartiesType'] = PartiesModel::count();
            $data['totalParties'] = PartiesTypeModel::count();
            $data['totalGstbills'] = GstBillsModel::count();
            return view('admin.dashboard', $data);
        }
    }
}
