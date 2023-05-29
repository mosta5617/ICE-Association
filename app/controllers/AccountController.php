<?php

class AccountController extends BaseController {

public function getlogin(){
    $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
	return View::make('login')->with('users', $users);
}

public function postlogin(){
	$validator = Validator::make(Input::all(),
   	 	array(
	         'email' => 'required',
	        'password' => 'required'
	        
    		)
		);
		if ($validator->fails()) {
			return Redirect::route('getlogin')
    		 ->withErrors($validator)
        		 ->withInput();
		}
		else{
    	$remember=(Input::has('remember')) ? true : false;

			$auth=Auth::attempt(array(
    		'email' 	=> Input::get('email'),
    		'password'	=> Input::get('password'),
    		'active'	=> 0

    		), $remember);
    	
    	if ($auth) {
    		return Redirect::intended('/')
            ->with('pictures', 'd');
           

    	}else{
    			return Redirect::route('getlogin')
        		 ->with('global', 'Wrong Email or Password !');
    		}
		}

		return Redirect::route('getlogin')
        		 ->with('global', 'There are problem in signing in.');
}


public function getregistration(){
    $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
	return View::make('registration')->with('users', $users);

}
public function postregistration(){
    $validator = Validator::make(Input::all(),
        array(
            'fullname' => 'required|min:6',
             'email' => 'required|email|unique:members',
            'password' => 'required|min:6',
            're-password' => 'required|same:password',
            'mobile' => 'required|numeric|min:5',
            'designation' => 'required',
            'qualification' => 'required',
            'facebook' => 'required',
            'session' => 'required',
            'batch' => 'required',
            'checkbox' => 'required',
            'file'=>'required|max:3000kb|mimes:png,jpg,jpeg'
            //'captcha' => 'required|captcha',
            )
           /*  array(
             'captcha' =>'Invalid Captcha!'
             
            )
      */

        );
        if ($validator->fails()) {
            return Redirect::route('getregistration')
             ->withErrors($validator)
                 ->withInput();
                 
        }else{
            $fullname=Input::get('fullname');
            $email=Input::get('email');
            $password=Input::get('password');
            $code=str_random(60);
            $file=Input::file('file');
            $rand=rand(123,456);
            $time=date('mdY');
            $filename = $rand.'-'.$fullname.'.'.$time.'.'.$file->getClientOriginalExtension();
            $path=$file->move('uploads/',$filename);
            $fullpath=str_replace('\\', '/', $path);
            $mobile=Input::get('mobile');
            $designation=Input::get('designation');
            $duty=Input::get('duty');
            $session=Input::get('session');
            $batch=Input::get('batch');
            $qualification=Input::get('qualification');
            $facebook=Input::get('facebook');
            $linkedin=Input::get('linkedin');
            $website=Input::get('website');
            $online=0;
            $active=0;
            $date=date('d-m-Y');



            $create=User::create(array(
                'fullname'   =>$fullname,
                'email'      =>$email,
                'password'   =>Hash::make($password),
                'mobile'     =>$mobile,
                'designation'=>$designation,
                'qualification'=>$qualification,
                'duty'       =>$duty,
                'facebook'   =>$facebook,
                'linkedin'   =>$linkedin,
                'website'    =>$website,
                'file'       =>$filename,
                'fullpath'   =>$fullpath,
                'session'    =>$session,
                'batch'      =>$batch,
                'online'     =>$online,
                'code'       =>$code,
                'active'     =>$active,
                'enroll'     =>$date,

                ));
            $data = [];
        
            Mail::send('emails.auth.activate', 
                    array('link' => URL::route('activate', $code), 'fullname' => $fullname),
                     function($message) use ($create) {
                    $message->to($create->email, $create->fullname)->subject('Activate your account');
                }); 

            if ($create) {
                return Redirect::route('getlogin')
                 ->with('success', 'Your account has been created Successfully.');
            }


        }

}


public function getActivate($code) {
         
        $user = User::where('code', '=', $code)->where('active', '=', 0);

        /* if user is available */
        if($user->count()) {
            $user = $user->first();

            // Update the user status to active
            $user->active = 1;
            $user->code = '';
            if($user->save()) {
                return Redirect::route('home')
                        ->with('global', 'Activated! You can now sign in!');
            }
        }

        /* fall back */
        return Redirect::route('home')
            ->with('global', 'We could not activate your account. Try again later.');
    }


public function getlogout() {
        Auth::logout();
        return Redirect::route('home');
        
    }


public function getchangepassword(){
        $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
    return View::make('changepassword')->with('users',$users);

}

public function postchangepassword(){
            $validator = Validator::make(Input::all(),
        array(
            'oldpassword' => 'required',
            'newpassword' => 'required|min:6',
            're-newpassword' => 'required|same:newpassword',
          
        )
    );

      if ($validator->fails())
    {
            return Redirect::route('changepassword')
                 ->withErrors($validator);

    }
    else
    {
        $user=User::find(Auth::user()->id);
        $oldpassword   =Input::get('oldpassword');
        $newpassword       =Input::get('newpassword');
        $renewpassword =Input::get('re-newpassword');

        if (Hash::check($oldpassword, $user->getAuthPassword())) {
            $user->password= Hash::make($newpassword);
            if ($user->save()) {
                return Redirect::route('changepassword')
                 ->with('success', 'Your password has been changed.');
            }
            else{
                 return Redirect::route('changepassword')
                 ->with('error', 'Your password could not be changed.');
            }
        }

    return Redirect::route('changepassword')
                 ->with('error', 'Your old password is incorrect.');
    }

}

public function getforgotpassword(){
        $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();
    return View::make('forgotpassword')->with('users', $users);
}

public function postforgotpassword(){
            $validator = Validator::make(Input::all(),
            array(
                'email' => 'required|email'
            )
        );

        if($validator->fails()) {
            return Redirect::route('getforgotpassword')
                ->withErrors($validator)
                ->withInput();
        } else {
            $user = User::where('email', '=', Input::get('email'));

            if($user->count()) {
                
                $user = $user->first();

                // Generate a new code and password
                $code = str_random(60);
                $password = str_random(10);
                
                $user->code = $code;
                $user->password_temp = Hash::make($password);

                $fullname = $user->fullname;

                
                if($user->save()) {  

                    Mail::send('emails.auth.forgot', array('link'=>URL::route('getrecover', $code),
                     'fullname'=>$fullname, 'password'=>$password), function($message) use ($user){
                        $message->to($user->email, $user->fullname)->subject('Your new password');
                    });
                     
                    return Redirect::route('getforgotpassword')
                        ->with('global', 'We have sent you a new password by email');
                }               
            }
        }

        /* fall back */
        return Redirect::route('getforgotpassword')
            ->with('global', 'Could not request new password.');
}
public function getrecover($code) {
    $user = User::where('code', '=', $code)
                ->where('password_temp', '!=', '');

        if($user->count()) {
            $user = $user->first();

            $user->password         = $user->password_temp;
            $user->password_temp    = '';
            $user->code             = '';

            if($user->save()) {
                return Redirect::route('home')
                    ->with('global', 'Your account has been recovered and you can sign in with your password.');
            }
        }
        return Redirect::route('getforgotpassword')
            ->with('error', 'Could not recover your account.');
    }




public function getviewprofile(){
 
      $users= DB::table('members')
                     ->select(DB::raw('count(designation) as total, designation,qualification,fullname,password,facebook,email,session,batch'))
                     ->groupBy('designation')
                     ->get();

       $status=DB::table('members')
             ->join('status', function($join)
                 {
                     $join->on('members.id', '=', 'status.members_id')
                     ->where('members.id', '=', Auth::user()->id );
                 })
        ->get();
           $downloads=DB::table('members')
             ->join('downloads', function($join)
                 {
                     $join->on('members.id', '=', 'downloads.members_id')
                     ->where('members.id', '=', Auth::user()->id );
                 })
        ->get();
        $counts=1;
    return View::make('viewprofile')
            ->with('users', $users)
            ->with('status', $status)
            ->with('downloads', $downloads)
            ->with('counts', $counts);
}










}
