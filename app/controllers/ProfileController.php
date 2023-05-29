<?php

class ProfileController extends BaseController {


	public function posteducationalbackground()
	{
		  $validator = Validator::make(Input::all(),
        array(
            'educational_background' => 'required'
            )
 

        );
        if ($validator->fails()) {
            return Redirect::route('getviewprofile')
             ->with('error','Educational Background field is Required.');
                 
        }else{
            $educational_background=Input::get('educational_background');
            $members_id=Auth::user()->id;
            $date=date('d-m-Y');



            $create=Statuss::create(array(
            	'members_id'             =>$members_id,
                'educational_background' =>$educational_background,
                'date'     				 =>$date,

                ));

            if ($create) {
                return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Added Successfully.');
            }


        }
	}



	public function postprofessionalexperience(){
			  $validator = Validator::make(Input::all(),
        array(
            'professional_experience' => 'required'
            )
 

        );
        if ($validator->fails()) {
            return Redirect::route('getviewprofile')
             ->with('error','Professional Experience field is Required.');
                 
        }else{
            $professional_experience=Input::get('professional_experience');
            $members_id=Auth::user()->id;
            $date=date('d-m-Y');



            $create=Statuss::create(array(
            	'members_id'             =>$members_id,
                'professional_experience' =>$professional_experience,
                'date'     				 =>$date,

                ));

            if ($create) {
                return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Added Successfully.');
            }


        }

	}


	public function postfieldofinterest(){
					  $validator = Validator::make(Input::all(),
        array(
            'field_of_interest' => 'required'
            )
 

        );
        if ($validator->fails()) {
            return Redirect::route('getviewprofile')
             ->with('error','Field of Interest is Required.');
                 
        }else{
            $field_of_interest=Input::get('field_of_interest');
            $members_id=Auth::user()->id;
            $date=date('d-m-Y');



            $create=Statuss::create(array(
            	'members_id'             =>$members_id,
                'field_of_interest' =>$field_of_interest,
                'date'     				 =>$date,

                ));

            if ($create) {
                return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Added Successfully.');
            }


        }
	}

	public function postpublications(){
						  $validator = Validator::make(Input::all(),
        array(
            'publications' => 'required'
            )
 

        );
        if ($validator->fails()) {
            return Redirect::route('getviewprofile')
             ->with('error','Publication field is Required.');
                 
        }else{
            $publications=Input::get('publications');
            $members_id=Auth::user()->id;
            $date=date('d-m-Y');



            $create=Statuss::create(array(
            	'members_id'             =>$members_id,
                'publications'           =>$publications,
                'date'     				 =>$date

                ));

            if ($create) {
                return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Added Successfully.');
            }


        }
	}



    public function postediteducation(){
            $post=Input::get('educational_background');
            $id=Input::get('id');
            $date=date('d-m-Y');

        
         $up=DB::table('status')
            ->where('id', $id)
            ->update(array('educational_background' => $post,'date' =>$date));
       

            if ($up) {
                   return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Updated Successfully.');
            }

    }

    public function posteditexperience(){
               $post=Input::get('professional_experience');
            $id=Input::get('id');
        
         $up=DB::table('status')
            ->where('id', $id)
            ->update(array('professional_experience' => $post));
       

            if ($up) {
                   return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Updated Successfully.');
            }
    }


    public function posteditfields(){
                $post=Input::get('field_of_interest');
            $id=Input::get('id');
        
         $up=DB::table('status')
            ->where('id', $id)
            ->update(array('field_of_interest' => $post));
       

            if ($up) {
                   return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Updated Successfully.');
            }

    }

     public function posteditpublications(){
                $post=Input::get('publications');
            $id=Input::get('id');
        
         $up=DB::table('status')
            ->where('id', $id)
            ->update(array('publications' => $post));
       

            if ($up) {
                   return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Updated Successfully.');
            }
        
    }


    public function postdownloads(){
           $validator = Validator::make(Input::all(),
        array(
            'downloadtitle' => 'required|min:6',
            'downloadfile'=>'required|max:3000kb|mimes:pdf,ppt,doc,docx,txt,jar,zip'

            )


        );
        if ($validator->fails()) {
            return Redirect::route('getviewprofile')
             ->with('error','Something went wrong.');
                 
        }else{
            $downloadtitle=Input::get('downloadtitle');
            $code=str_random(60);
            $file=Input::file('downloadfile');
            $to=Input::get('to');
            $time=date('his');
            $filename = $downloadtitle.'.'.$time.'.'.$file->getClientOriginalExtension();
            $path=$file->move('downloads/',$filename);
            $fullpath=str_replace('\\', '/', $path);
            $date=date('d-m-Y');



            $create=Downloads::create(array(
                'members_id' =>Auth::user()->id,
                'file'       =>$filename,
                'to'         =>$to,
                'fullpath'   =>$fullpath,
                'active'     =>'Unpublish',
                'date'       =>$date

                )); 

            if ($create) {
                return Redirect::route('getviewprofile')
                 ->with('success', 'Your file has been uploaded Successfully.');
            }


        }
    }


    public function downloadpublish($id){

            $result = Downloads::where('id', '=', $id)
                                     ->where('active','Publish')
                                     ->first();

            if (is_null($result)) {
               DB::table('downloads')
                ->where('id', $id)
                ->update(array('active' => 'Publish'));
                 return Redirect::route('getviewprofile');
            } else {
                 DB::table('downloads')
                ->where('id', $id)
                ->update(array('active' => 'Unpublish'));
                 return Redirect::route('getviewprofile');
            } 

    }
   


    public function posteditprofile(){
            $validator = Validator::make(Input::all(),
        array(
            'fullname' => 'required|min:6',
            'email' => 'required|email',
            'mobile' => 'required|numeric|min:5',
            'designation' => 'required'

            )

        );
        if ($validator->fails()) {
            return Redirect::route('getviewprofile')
             ->with('error','Something went wrong.');  
                 
        }else{
            $id=Input::get('id');
            $fullname=Input::get('fullname');
            $email=Input::get('email');
            $mobile=Input::get('mobile');
            $designation=Input::get('designation');
            $duty=Input::get('duty');
            $session=Input::get('session');
            $qualification=Input::get('qualification');
            $facebook=Input::get('facebook');
            $linkedin=Input::get('linkedin');
            $website=Input::get('website');
            $date=date('d-m-Y');


        $data= array('fullname'     =>$fullname ,
                     'email'        =>$email,
                     'mobile'       =>$mobile,
                     'designation'  =>$designation,
                     'duty'         =>$duty,
                     'session'      =>$session,
                     'qualification'=>$qualification,
                     'facebook'     =>$facebook,
                     'linkedin'     =>$linkedin,
                     'website'      =>$website,
                     'enroll'       =>$date
                     );

       $update=DB::table('members')->where('id',$id)->update($data);
       if ($update) {
        return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Updated Successfully.');
            
            }



        }
    }

    public function postprofilepicture(){
            $validator = Validator::make(Input::all(),
        array(
            'file'=>'required|max:3000kb|mimes:png,jpg,jpeg'
            )


        );
        if ($validator->fails()) {
            return Redirect::route('getviewprofile')
             ->with('error','Something went wrong.'); 
                 
        }else{
            
            $image_url=Auth::user()->file;
            File::delete('uploads/' . $image_url);

            $id=Input::get('id');
            $code=str_random(60);
            $file=Input::file('file');
            $rand=rand(123,456);
            $time=date('mdY');
            $filename = $rand.'-'.Auth::user()->fullname.'.'.$time.'.'.$file->getClientOriginalExtension();
            $path=$file->move('uploads/',$filename);
            $fullpath=str_replace('\\', '/', $path);
            $date=date('d-m-Y');

             $data= array('file'      =>$filename ,
                          'fullpath'  => $fullpath,
                          'enroll'     =>$date
                     );
            $update=DB::table('members')->where('id',$id)->update($data);
            if ($update) {
             return Redirect::route('getviewprofile')
                 ->with('success', 'Your Information has been Updated Successfully.');
            
            }



        }
    }




}
