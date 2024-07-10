<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartiesTypeModel;
use App\Models\PartiesModel;
use PDF;

class PartiesController extends Controller
{
    public function parties_list(Request $request)
    {
        $data['getRecord'] = PartiesModel::getAllRecord($request);
        return view('admin.parties.list', $data);
    }

    public function parties_add()
    {
        $data['getRecord'] = PartiesTypeModel::getActive();
        return view('admin.parties.add', $data);
    }

    public function parties_post(Request $request)
    {
        $InsertData = request()->validate([
            'parties_type_id' => 'required',
            'fullname'              => 'required',
            'phone_no'              => 'required',
            'address'               => 'required',
            'account_holder_name'   => 'required',
            'account_no'            => 'required',
            'bank_name'             => 'required',
            'ifsc_code'             => 'required',
            'branch_address'        => 'required',
        ]);
        $InsertData = new PartiesModel;
        $InsertData->parties_type_id        = trim($request->parties_type_id);
        $InsertData->fullname               = trim($request->fullname);
        $InsertData->phone_no               = trim($request->phone_no);
        $InsertData->address                = trim($request->address);
        $InsertData->account_holder_name    = trim($request->account_holder_name);
        $InsertData->account_no             = trim($request->account_no);
        $InsertData->bank_name              = trim($request->bank_name);
        $InsertData->ifsc_code              = trim($request->ifsc_code);
        $InsertData->branch_address         = trim($request->branch_address);
        $InsertData->save();
        return redirect('admin/parties')->with('success', 'Parties Data Insert Successfully');
    }

    public function parties_edit($id)
    {
        $data['getRecord'] = PartiesModel::getSingle($id);
        $data['getPartiesType'] = PartiesTypeModel::getActive();
        return view('admin.parties.edit', $data);
    }

    public function parties_update($id, Request $request)
    {
        $UpdateData = PartiesModel::getSingle($id);
        $UpdateData->parties_type_id        = trim($request->parties_type_id);
        $UpdateData->fullname               = trim($request->fullname);
        $UpdateData->phone_no               = trim($request->phone_no);
        $UpdateData->address                = trim($request->address);
        $UpdateData->account_holder_name    = trim($request->account_holder_name);
        $UpdateData->account_no             = trim($request->account_no);
        $UpdateData->bank_name              = trim($request->bank_name);
        $UpdateData->ifsc_code              = trim($request->ifsc_code);
        $UpdateData->branch_address         = trim($request->branch_address);
        $UpdateData->save();
        return redirect('admin/parties')->with('success', 'Parties Data Update Successfully');
    }

    public function parties_trash($id)
    {
        $TrashData = PartiesModel::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('warning', 'Parties Data Trash successfully');

    }

    public function parties_trashlist()
    {
        $data['getRecord'] = PartiesModel::getDactiveAllRecord();
        return view('admin.parties.trashlist', $data);
    }

    public function parties_restore($id)
    {
        $RestoreData = PartiesModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('success', 'Parties Data Restore successfully');
    }

    public function parties_delete($id)
    {
        $DeleteData = PartiesModel::getSingle($id);
        $DeleteData->delete();
        return redirect()->back()->with('error', 'Parties Data Parmanently Delete successfully');
    }

    // Parties PDF Generator
    public function parties_pdf_all()
    {
        $getActiveRecord = PartiesModel::getActive();
        $data = [
            'title'     => 'Parties List',
            'date'      => date('m/d/y'),
            'parties'   => $getActiveRecord
        ];
        $pdf = PDF::loadview('admin.pdf.parties.partiespdf', $data);
        return $pdf->download('partiesall.pdf');
    }

    // Parties Type PDF Single
    public function parties_pdf_single($id)
    {
        $data['getSingleRecord'] = PartiesModel::getSingle($id);
        $data['issuedate'] = date('d/m/y');
        $data['title'] = 'Parties Data';
        $data['description'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit!';
        $pdf = PDF::loadview('admin.pdf.parties.partiespdfsingle', $data);
        return $pdf->download('partiessingle.pdf');
    }

    // Parties View
    public function parties_view($id)
    {
        $data['getRecord'] = PartiesModel::getSingle($id);
        return view('admin.parties.view', $data);
    }


}
