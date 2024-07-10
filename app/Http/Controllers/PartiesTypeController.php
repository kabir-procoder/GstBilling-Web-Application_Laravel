<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartiesTypeModel;
use PDF;

class PartiesTypeController extends Controller
{
    public function parties_type(Request $request)
    {
        $data['getRecord'] = PartiesTypeModel::getAllRecord($request);
        return view('admin.parties_type.list', $data);
    }

    // List Data
    public function parties_type_add()
    {
        return view('admin.parties_type.add');
    }

    // Insert Data
    public function parties_type_insert(Request $request)
    {
        $InsertData = request()->validate([
            'parties_type_name' => 'required',
        ]);
        $InsertData = new PartiesTypeModel;
        $InsertData->parties_type_name = trim($request->parties_type_name);
        $InsertData->save();
        return redirect('admin/parties_type')->with('success', 'Parties Type Data Insert Successfully');
    }

    // Edit Data
    public function parties_type_edit($id)
    {
        $data['getRecord'] = PartiesTypeModel::getSingle($id);
        return view('admin.parties_type.edit', $data);
    }

    // Update Data
    public function parties_type_update($id, Request $request)
    {
        $UpdateData = PartiesTypeModel::getSingle($id);
        $UpdateData->parties_type_name = trim($request->parties_type_name);
        $UpdateData->save();
        return redirect('admin/parties_type')->with('success', 'Parties Type Data Update Successfully');
    }

    // Trash List
    public function parties_type_trashlist()
    {
        $data['getRecord'] = PartiesTypeModel::getTrashRecord();
        return view('admin.parties_type.trashlist', $data);
    }

    // Trash Data
    public function parties_type_trash($id)
    {
        $TrashData = PartiesTypeModel::getSingle($id);
        $TrashData->isDelete = 1;
        $TrashData->save();
        return redirect()->back()->with('warning', 'Parties Type Data Trash Successfully');
    }

    // Restore Data
    public function parties_type_restore($id)
    {
        $RestoreData = PartiesTypeModel::getSingle($id);
        $RestoreData->isDelete = 0;
        $RestoreData->save();
        return redirect()->back()->with('success', 'Parties Type Data Restore Successfully');
    }

    // Delete Parmanently Data
    public function parties_type_delete($id)
    {
        $DeleteParmanentData = PartiesTypeModel::getSingle($id);
        $DeleteParmanentData->delete();
        return redirect()->back()->with('error', 'Parties Type Data Restore Successfully');
    }

    // Parties Type PDF Generator
    public function parties_type_pdf_generator()
    {
        $getRecordAll = PartiesTypeModel::getActive();
        $data = [
            'title' => 'Welcome to Kabir Procoder',
            'date' => date('m/d/y'),
            'parties' => $getRecordAll
        ];
        $pdf = PDF::loadview('admin.pdf.partiestype.PartiesTypePDF', $data);
        return $pdf->download('kabirprocoder.pdf');
    }

    // Parties Type Single PDF
    public function parties_type_pdf_single($id)
    {
        $data['getSingleRecord'] = PartiesTypeModel::getSingle($id);
        $data['issuedate'] = date('d/m/y');
        $data['title'] = 'Parties Type Data';
        $data['description'] = 'Lorem ipsum dolor sit amet consectetur adipisicing elit!';
        $pdf = PDF::loadview('admin.pdf.partiestype.PartiesTypePDFSingle', $data);
        return $pdf->download('partiestypesingle.pdf');
    }



}
