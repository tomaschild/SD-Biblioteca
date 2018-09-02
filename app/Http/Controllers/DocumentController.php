<?php

namespace App\Http\Controllers;

use App\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use DB;

class DocumentController extends Controller {

    public function store(Request $request) {

        $validateData = $request->validate([
            'document_title' => 'required'
        ]);

    	// return $request->all();
    	$document_title = $request['document_title'];
    	$document_author = $request['document_author'];
    	$document_year = $request['document_year'];
    	$document_type = $request['document_type'];

        $data = array(  'document_title'=>$document_title,
                        'document_author'=>$document_author,
                        'document_year'=>$document_year,
                        'document_type'=>$document_type
                    ); 

        DB::table('documents')->insert($data);

        $success = 'OK';

        return view('upload')->with('success', $success);

    }

    public function search(Request $request) {
        $busqueda = $request->input('busqueda');
        $documents = Document::where('document_title','like',"%$busqueda%")->get();
        return view('results')->with('documents', $documents);
    }
}