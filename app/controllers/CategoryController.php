<?php

class CategoryController extends BaseController {

	public function getcategory($designation)
	{	

		$users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();

        $category1 = DB::table('members')->where('designation', $designation)->first();
        $category2 = DB::table('members')->where('designation', $designation)->paginate(2);
        return View::make('category')
        				->with('category1', $category1)
        				->with('category2', $category2)
        				->with('users', $users);	


	}


	public function postquery(){
			$validator = Validator::make(Input::all(),
   	 	array(
	         'session' => 'required'
	        
    		)
		);
			if ($validator->fails()) {
			return Redirect::route('home');
		}else{
			$session=Input::get('session');
        $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
        $query = DB::table('members')->where('session', $session)->paginate(2);
		 return View::make('query')
        				->with('queries', $query)
        				->with('users', $users)	
        				->with('session', $session);
			

	}
		}



    public function postsearch(){
            $validator = Validator::make(Input::all(),
        array(
             'search' => 'required',
            
            )
        );
        if ($validator->fails()) {
            return Redirect::route('home');
        }else{


        $keyword = Input::get('search');
        $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
        $query = DB::table('members')->where('fullname','LIKE', '%'.$keyword.'%')->paginate(5);

        return View::make('search')
            ->with('searchresult', $query)
            ->with('users', $users) 
            ->with('keyword', $keyword);
        }
    }



    public function  editdownloads(){
        return 'ok';
    }



    public function deletedownloads($id){

        // $file=Downloads::find($id);
        // $url=$file->file();
        // File::delete('uploads/' . $url);

        $delete=DB::table('downloads')->where('id', '=', $id)->delete();
        if ($delete) {
                return Redirect::route('getviewprofile')
                 ->with('success', 'Your file has been Deleted Successfully.');

        }
    }




    public function getprofile($id){

        $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();

        $profileuser = DB::table('members')->where('id', $id)->first();
        
        $status=DB::table('members')
                    ->leftJoin('status', 'members.id', '=', 'status.members_id')
                    ->where('members.id', '=', $id )
                    ->get();

        $downloads=DB::table('members')
                    ->leftJoin('downloads', 'members.id', '=', 'downloads.members_id')
                    ->where('members.id', '=', $id )
                    ->get();

        $counts=1;
        return View::make('profile')
                    ->with('users', $users)
                    ->with('profileuser', $profileuser)
                    ->with('status', $status)
                    ->with('downloads', $downloads)
                    ->with('counts', $counts);
    }


















}
