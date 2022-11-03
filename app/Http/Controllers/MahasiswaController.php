<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //

    private $user;


    // public function index(Request $id = false)
    // {
    //     // return view('user.profile', [

    //     // ]);
    // }

    public function index()
    {
        // $ad = Mahasiswa::all()->make(true);
        // if ($request->ajax($ad)) {
        //     echo json_encode($ad);
        //     // } else {
        // }

        // dd($ad);
        return view("admin.mahasiswa.mhs");
    }

    public function getdata(Request $request)
    {
        // $mhs = Mahasiswa::all();
        // return $mhs->toJson(JSON_PRETTY_PRINT);
        if ($request->ajax()) {
            $data = Mahasiswa::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn = '<button type="button" class="edit btn btn-success btn-sm">Edit</button> <button type="button" class="delete btn btn-danger btn-sm btn-delete" onclick="delData(' . $row->id . ')">Delete</button>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    public function destroy(Request $request)
    {
        $mahasiswa = Mahasiswa::where('id', $request->id)->delete();

        return Response()->json($mahasiswa);
    }

    
}
