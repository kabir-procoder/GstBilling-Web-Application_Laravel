<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Request;

class GstBillsModel extends Model
{
    use HasFactory;

    protected $table = 'gst_bills';

    static public function getSingle($id)
    {
        return self::find($id);
    }

    static public function getAllRecord()
    {
        $return = self::select('gst_bills.*', 'parties_type.parties_type_name');
        $return = $return->join('parties_type', 'parties_type.id', 'gst_bills.parties_type_id');

        if(!empty(Request::get('id'))) {
            $return = $return->where('gst_bills.id', '=', Request::get('id'));
        }
        if (!empty(Request::get('parties_type_name'))) {
            $return = $return->where('parties_type.parties_type_name', 'like', '%' .Request::get('parties_type_name').'%');
        }
        if (!empty(Request::get('invoice_date'))) {
            $return = $return->where('gst_bills.invoice_date', 'like', '%' .Request::get('invoice_date').'%');
        }
        if (!empty(Request::get('invoice_date'))) {
            $return = $return->where('gst_bills.invoice_date', 'like', '%' .Request::get('invoice_date').'%');
        }
        if (!empty(Request::get('invoice_number'))) {
            $return = $return->where('gst_bills.invoice_number', 'like', '%' .Request::get('invoice_number').'%');
        }
        if (!empty(Request::get('total_amount'))) {
            $return = $return->where('gst_bills.total_amount', 'like', '%' .Request::get('total_amount').'%');
        }
        $return = $return->where('gst_bills.isDelete', '=', 0);
        $return = $return->orderBy('gst_bills.id', 'desc');
        $return = $return->paginate(3);
        return $return;
    }

    static public function getAllTrashRecord()
    {
        $return = self::select('gst_bills.*', 'parties_type.parties_type_name')
                ->join('parties_type', 'parties_type.id', 'gst_bills.parties_type_id')
                ->where('gst_bills.isDelete', '=', 1)
                ->orderBy('gst_bills.id', 'desc')
                ->paginate(3);
                return $return;
    }

    public function getPartiesTypeName()
    {
        return $this->belongsTo(PartiesTypeModel::class, 'parties_type_id');
    }

}
