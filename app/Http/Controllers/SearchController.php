<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
 function search(Request $request)
 {
   if(isset($_GET['query'])){
      
      $search_text=$_GET['query'];
      $ids = DB::table('posts')->where('post_title','LIKE','%'.$search_text.'%')->paginate(2);
      $ids->appends($request->all());
      return view('search',['ids'=>$ids]);
   }
   else{
   return view('search');
   }
 }
}
