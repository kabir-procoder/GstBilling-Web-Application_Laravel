<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GstBillsModel;
use App\Models\PartiesTypeModel;
use PDF;

class GstBillsController extends Controller
{
    public function gst_bills_list(Request $request)
    {
        $data['getRecord'] = GstBillsModel::getAllRecord($request);
        return view('admin.gst_bills.list', $data);
    }

    public function gst_bills_add()
    {
        $data['getRecord'] = PartiesTypeModel::getActive();
        return view('admin.gst_bills.add', $data);
    }

    public function gst_bills_post(Request $request)
    {
        $InsertData = new GstBillsModel;
        $InsertData->parties_type_id    = trim($request->parties_type_id);
        $InsertData->invoice_date       = trim($request->invoice_date);
        $InsertData->invoice_number     = trim($request->invoice_number);
        $InsertData->item_description   = trim($request->item_description);
        $InsertData->total_amount       = trim($request->total_amount);
        $InsertData->cgst_rate          = trim($request->cgst_rate);
        $InsertData->bank_name          = trim($request->bank_name);
        $InsertData->sgst_rate          = trim($request->sgst_rate);
        $InsertData->igst_rate          = trim($request->igst_rate);
        $InsertData->cgst_ammount       = trim($request->cgst_ammount);
        $InsertData->sgst_ammount       = trim($request->sgst_ammount);
        $InsertData->igst_ammount       = trim($request->igst_ammount);
        $InsertData->tax_ammount        = trim($request->tax_ammount);
        $InsertData->net_ammount        = trim($request->net_ammount);
        $InsertData->declaration        = trim($request->declaration);
        $InsertData->save();
        return redirect('admin/gst_bills')->with('success', 'GST Bill Data Insert Successfully');
    }

    public function gst_bills_view($id)
    {
        $data['getRecord'] = GstBillsModel::getSingle($id);
        return view('admin.gst_bills.view', $data);
    }

    public function gst_bills_edit($id)
    {
        $data['getRecord'] = GstBillsModel::getSingle($id);
        $data['getPartiesType'] = PartiesTypeModel::getActive();
        return view('admin.gst_bills.edit', $data);
    }

    public function gst_bills_update($id, Request $request)
    {
        $UpdateData = GstBillsModel::getSingle($id);
        $UpdateData->parties_type_id    = trim($request->parties_type_id);
        $UpdateData->invoice_date       = trim($request->invoice_date);
        $UpdateData->invoice_number     = trim($request->invoice_number);
        $UpdateData->item_description   = trim($request->item_description);
        $UpdateData->total_amount       = trim($request->total_amount);
        $UpdateData->cgst_rate          = trim($request->cgst_rate);
        $UpdateData->bank_name          = trim($request->bank_name);
        $UpdateData->sgst_rate          = trim($request->sgst_rate);
        $UpdateData->igst_rate          = trim($request->igst_rate);
        $UpdateData->cgst_ammount       = trim($request->cgst_ammount);
        $UpdateData->sgst_ammount       = trim($request->sgst_ammount);
        $UpdateData->igst_ammount       = trim($request->igst_ammount);
        $UpdateData->tax_ammount        = trim($request->tax_ammount);
        $UpdateData->net_ammount        = trim($request->net_ammount);
        $UpdateData->declaration        = trim($request->declaration);
        $UpdateData->save();
        return redirect('admin/gst_bills')->with('success', 'GST Bill Data Update Successfully');
    }

    public function gst_bills_trashlist()
    {
        $data['getRecord'] = GstBillsModel::getAllTrashRecord();
        return view('admin.gst_bills.trashlist', $data);
    }

    public function gst_bills_trash($id)
    {
        $TrashData = GstBillsModel::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('warning', 'GST Bill Data Trash Successfully');
    }

    public function gst_bills_restore($id)
    {
        $RestoreData = GstBillsModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('success', 'GST Bill Data Restore Successfully');
    }

    public function gst_bills_delete($id)
    {
        $DeleteParmanentData = GstBillsModel::getSingle($id);
        $DeleteParmanentData->delete();
        return redirect()->back()->with('error', 'GST Bill Data Parmanently Delete Successfully');
    }

    // GSTBilling All PDF Downloader
    public function gst_bills_pdf_all()
    {
        $getAllRecord = GstBillsModel::select('gst_bills.*', 'parties_type.parties_type_name')
                      ->join('parties_type', 'parties_type.id', '=', 'gst_bills.parties_type_id')
                      ->get();
        $data = [
            'title' => 'GST-Billing Total List',
            'date' => date('d-m-y'),
            'getRecord' => $getAllRecord
        ];
        $pdf = PDF::loadview('admin.pdf.gstbilling.gstbillingpdf', $data);
        return $pdf->download('gstbillingall.pdf');
    }

    // GSTBilling Single PDF Downloader
    public function gst_bills_pdf_single($id)
    {
        $getRecord = GstBillsModel::getSingle($id);
        $data = [
            'title' => 'GSTBilling Single Information',
            'date' => date('d-m-y'),
            'description' => 'text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            'getSingleRecord' => $getRecord
        ];
        $pdf = PDF::loadview('admin.pdf.gstbilling.gstbillingsinglepdf', $data);
        return $pdf->download('gstbillingsingle.pdf');
    }


}
