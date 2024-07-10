<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class PartiesTypeModel extends Model
{
    use HasFactory;

    protected $table = 'parties_type';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getActive()
    {
        $return = self::select('parties_type.*')
                ->where('isDelete', '=', 0)
                ->get();
                return $return;
    }

    static public function getAllRecord($request)
    {
        $return = self::select('parties_type.*');
                if (!empty(Request::get('id'))) {
                    $return = $return->where('parties_type.id', '=', Request::get('id'));
                }
                if (!empty(Request::get('parties_type_name'))) {
                    $return = $return->where('parties_type.parties_type_name', 'like', '%' .Request::get('parties_type_name').'%');
                }
                if (!empty(Request::get('created_at'))) {
                    $return = $return->where('parties_type.created_at', 'like', '%' .Request::get('created_at').'%');
                }
                if (!empty(Request::get('updated_at'))) {
                    $return = $return->where('parties_type.updated_at', 'like', '%' .Request::get('updated_at').'%');
                }
                $return = $return->where('isDelete', '=', 0);
                $return = $return->orderBy('id', 'desc');
                $return = $return->paginate(2);
                return $return;
    }

    static public function getTrashRecord()
    {
        $return = self::select('parties_type.*')
                ->where('isDelete', '=', 1)
                ->orderBy('id', 'desc')
                ->paginate(2);
                return $return;
    }

}
