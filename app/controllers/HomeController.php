<?php

class HomeController extends BaseController {

public function home(){
$users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
 $us = DB::table('members')->orderBy(DB::raw('RAND()'))->paginate(12);
	return View::make('home')
                ->with('users', $users)
                ->with('us', $us);


}



public function next(){
	    $status=DB::table('members')->paginate(6);

    return View::make('next')
            ->with('status', $status);
	
}



}
