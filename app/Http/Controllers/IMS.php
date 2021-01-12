<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class IMS extends Controller
{
    //
	
	public function getPools( Request $request ){
		
		$parent = $request->parent_pool ? $request->parent_pool : config('ims.master_pool');
		
		$pools = DB::table('Category')->where('Parent_Category_ID',$parent)->get()->toArray();
		
		
		return $pools;
		
	}
	
	
	public function user(){
		$GlobalID = $_COOKIE['uniAuthSess'];
		$MYDetails = DB::table('Authenticated_Session')
	->join('Contact','Contact.Contact_ID','=','Authenticated_Session.User_ID')
	->join('User','User.Contact_ID','=','Authenticated_Session.User_ID')
	->orderby('Authenticated_Session.Created_Date','desc')
	->where('Authenticated_Session_ID', '=', $GlobalID)
	->first();
		
		return $MYDetails;
		
	}
	
	public function cookie(Request $request){
		
		if($request->cookieSet){
				$current = db::table('UKHT_IMS_View')->where('User_ID', $this->user()->Contact_ID)->first() ? db::table('UKHT_IMS_View')->where('User_ID', $this->user()->Contact_ID)->first()->view : 1;
				
			$new = $current == 1 ? 2 : 1;
			
			db::table('UKHT_IMS_View')->updateOrInsert(['User_ID' => $this->user()->Contact_ID ], ['view' => $new]);
		}
			
			$pref = db::table('UKHT_IMS_View')->where('User_ID', $this->user()->Contact_ID)->first() ? db::table('UKHT_IMS_View')->where('User_ID', $this->user()->Contact_ID)->first()->view : 1;
			
			$minutes = 4200;
      $response = new Response($pref);
      $response->withCookie(cookie('view', $pref, $minutes));
      return $response;
		
		
		
		
	}
	
}
