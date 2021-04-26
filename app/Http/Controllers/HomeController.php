<?php

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class HomeController extends Controller 
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1915101009',
            'nama'=>'Eugene'
        );
        $data['user']='';
        return view('admin.beranda', compact('title','data'));
        
    }
}