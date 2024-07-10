<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class PartiesModel extends Model
{
    use HasFactory;

    protected $table = 'parties';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getActive()
    {
        $return = self::select('parties.*', 'parties_type.parties_type_name')
                ->join('parties_type', 'parties_type.id', 'parties.parties_type_id')
                ->where('parties.isDelete', '=', 0)
                ->get();
                return $return;
    }

    static public function getAllRecord()
    {
        $return = self::select('parties.*', 'parties_type.parties_type_name');
        if (!empty(Request::get('id'))) {
            $return = $return->where('parties.id', '=', Request::get('id'));
        }
        if (!empty(Request::get('parties_type_name'))) {
            $return = $return->where('parties_type.parties_type_name', 'like', '%' .Request::get('parties_type_name').'%');
        }
        if (!empty(Request::get('fullname'))) {
            $return = $return->where('parties.fullname', 'like', '%' .Request::get('fullname').'%');
        }
        if (!empty(Request::get('phone_no'))) {
            $return = $return->where('parties.phone_no', 'like', '%' .Request::get('phone_no').'%');
        }
        if (!empty(Request::get('created_at'))) {
            $return = $return->where('parties.created_at', 'like', '%' .Request::get('created_at').'%');
        }
        $return = $return->join('parties_type', 'parties_type.id', 'parties.parties_type_id');
        $return = $return->where('parties.isDelete', '=', 0);
        $return = $return->orderBy('parties.id', 'desc');
        $return = $return->paginate(3);
        return $return;
    }

    static public function getDactiveAllRecord()
    {
        $return = self::select('parties.*', 'parties_type.parties_type_name')
                ->join('parties_type', 'parties_type.id', 'parties.parties_type_id')
                ->where('parties.isDelete', '=', 1)
                ->orderBy('parties.id', 'desc')
                ->paginate(3);
                return $return;
    }

    public function get_parties_type_single()
    {
        return $this->belongsTo(PartiesTypeModel::class, "parties_type_id");
    }



}
