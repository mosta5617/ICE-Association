<?php

class MessageController extends BaseController {

	public function getmessage($id)
	{
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
        return View::make('message')
                    ->with('users', $users)
                    ->with('profileuser', $profileuser)
                    ->with('status', $status)
                    ->with('downloads', $downloads)
                    ->with('counts', $counts);
	}




}
