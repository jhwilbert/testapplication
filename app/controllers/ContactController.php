<?php

class ContactController extends BaseController {

	public function index() {

		if (Route::currentRouteName() == 'contact_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		
		/* make view */
		return View::make('contact.index', array(
			'lpr' => $lpr,
		));	
	}


	public function getForm(){

		$data = Input::all();

	    //Validation rules
        $rules = array (
            'nome' => 'required|alpha',
            'email' => 'required|email',
            'message' => 'required|min:25'
        );

	    //Validate data
	    $validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
            if ($validator -> passes()){
 
                //Send email using Laravel send function
                Mail::send('emails.hello', $data, function($message) use ($data) {
					//email 'From' field: Get users email add and name
                    $message->from($data['email'] , $data['nome']);
                    //email 'To' field: cahnge this to emails that you want to be notified.                    
                    $message->to('jhwilbert@gmail.com', 'Joao Wilbert')->cc('jhwilbert@gmail.com')->subject('Contato Site');
 
                });
 
 		if (Route::currentRouteName() == 'contact_en') {
			App::setLocale('en');
			$lpr = '_en';
		} else {
			$lpr = '';
		}

		return View::make('contact.index', array(
			'lpr' => $lpr,
		));	
        
        }else{
//return contact form with errors
                return Redirect::to('/contato')->withErrors($validator);
            }
        


	}


}