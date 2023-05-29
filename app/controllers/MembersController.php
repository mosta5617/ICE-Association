<?php

class MembersController extends BaseController {

	public function getmembers()
	{	
		$users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
        $users2= DB::table('members')->get();

        $users3=DB::table('members')
             ->join('association_members', function($join)
                 {
                     $join->on('members.id', '=', 'association_members.members_id');
                     	// ->orderBy('association_members.position', 'desc');
                     // ->where('members.id', '=', 'association_members.members_id' );
                   
                 })
       				 ->get();
       	$counts=01;
        return View::make('members')
        				->with('users', $users)	
        				->with('users2', $users2)	
        				->with('users3', $users3)
        				->with('counts', $counts);	
	}





	public function postmembers(){
		 $validator = Validator::make(Input::all(),
        array(
            'name_id' => 'required',
            'designation' => 'required',
            )
   

        );
        if ($validator->fails()) {
            return Redirect::route('getmembers')
             ->with('error', 'Please select the Required fields.');
                 
        }else{
        	$members= DB::table('association_members')->get();
        	foreach ($members as $value) {
        	if ($value->members_id===Input::get('name_id')) {
        		return Redirect::route('getmembers')
           		    ->with('error', 'A Student can be enrolled once only.');
        	}else{
	        	$name_id=Input::get('name_id');
	            $designation=Input::get('designation');
	            $position=Input::get('position');
	            $date=date('d-m-Y');

	            $create=AssociationMembers::create(array(
	                'members_id' =>$name_id,
	                'designation'=>$designation,
	                'position'   =>$position,
	                'date'       =>$date,

	                ));


	            if ($create) {
	                return Redirect::route('getmembers')
	                 ->with('success', 'Association Member has been Added Successfully.');
	            }
        	}
   		}


        }
	}


	public function removemember($id){
		    $remove=DB::table('association_members')->where('id', '=', $id)->delete();
        if ($remove) {
                return Redirect::route('getmembers')
                 ->with('success', 'This member has been Removed Successfully.');

        }
	}









}
