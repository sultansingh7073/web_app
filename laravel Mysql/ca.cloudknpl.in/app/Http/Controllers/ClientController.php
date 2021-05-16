<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use DB;
use Hash;
use Auth;
use app\User;
use Sentinel;
use Reminder;

use Mail;

class ClientController extends Controller
{
	public function get_client_forget_password()
	{
		return view('User.client_forget_password');
	}
	public function get_client_change_password(Request $request)
	{
				
		$forget_email = DB::table('client_signup')->where('email',$request->old_email)->get();		
		 if(count($forget_email) == 0)
		 {	
			 return redirect('client_signup')->with("error","Email Not Exist");
		 }else{	 
		 
			
			 
				
				
			
			/* $forget_email=Sentinel::findById($forget_email->id);
			 $reminder=Reminder::exists($forget_email) ? : Reminder::create($forget_email);
			 $this->sendEmail($forget_email, $reminder->code);
			 return redirect('client_signup')->with("success","Reset Code sent your email.");*/
		 } 
		 
	}
	public function sendEmail($forget_email, $code)
	{
		Mail::send(
			'email.forgot',
			['forget_email' => $forget_email,'code' => $code],
			function($message) use ($forget_email)
			{
				$message->to($forget_email->email);
				$message->subject("$forget_email->name, Activate your account");
			}
			);
	}
  public function get_myprofile()
  {
    $trn=session()->get('id');
    $user_profile = DB::table('client_signup')->where('id',$trn)->get();
    return view('client.myprofile')->with('profile',$user_profile);
  }
  public function get_client_update_data(Request $request)
  { 
   		$name=$request->name;
    	$mobile=$request->mobile;
    	$email=$request->email;
    	$password=$request->password;
    	//$c_password=$request->c_password;
    	$address=$request->address;
        $city=$request->city;

    	$validator= Validator::make(
    		array(
    			'name'=>$request->name,
    			'mobile'=>$request->mobile,
    			'email'=>$request->email,
    			//'password'=>$request->password,
    			//'c_password'=>$request->c_password,
          'address'=>$request->address,
                'city'=>$request->city
    			),array(
    			"name"=>'required',
    			"mobile"=>'required',
    			"email"=>'required | email',
    			//"password"=>'required',
    			//"c_password"=>'required | same:password',
                "address"=>'required',
                "city"=>'required',
    		)
    	);
    	if($validator->fails())
    	{  
    		return redirect('myprofile')->withErrors($validator)->withInput();
    	}
    	else
    	{
		    		$data=array(
		    			"name"=>$name,
		    			"mobile"=>$mobile,
		    			"email"=>$email,		    			
		    		//	"confirm_password"=>$c_password,
				        "address"=>$address,
				        "city"=>$city,
                "updated_at" =>date("Y-m-d h:i:s")
		    		);  

            if(isset($password) && $password !=""){
              $data["password"] = md5($password);
            }

	    		if(DB::table('client_signup')->where('id',$request->id)->update($data))
	     		{
             return redirect()->intended('myprofile')->with("success","Your Account Updated Successfully :");
	    		}
	    		else
	    		{
	    			return redirect('myprofile')->with("error","Wrong");
	    		}
        }  
  }
   public function get_client_list_transactions()
   {    
        $tranaction=session()->get('id');

        $client_doc = DB::table('admin_wallet_transactions')->where('client_id',$tranaction)->orderBy("date","DESC")->paginate(10);

        return view('client.client_list_transaction')->with('user_doc',$client_doc);
   }
   public function user_signup()
   {
   		return view('User.user_signup');
   }
     public function logout_client(Request $request)
    {
      //Auth::logout();
        $request->session()->flush();
      return redirect()->intended('/');
    }
   public function get_request_for_deposit()
   {
      return view("client.client_request_deposit");
   }
   public function client_deposit(Request $request)
   {
      $value=session()->get('id');
      $valuename=session()->get('name');
      $valueemail=session()->get('email');
      $valuemobile=session()->get('mobile');


      

      $amt=$request->amt;


        $data=array(
          "amt"=>$amt,
          "clientid"=>$value,
          "clientname"=>$valuename,
          "clientemail"=>$valueemail,
          "clientmobile"=>$valuemobile
        );
     if(DB::table('client_requests')->insert($data))
          {
                    session()->put($data);
                    return redirect()->intended('request_for_deposit')->with("success","Thank you for Request for deposit");
    
            //return redirect('dashboard');
          }
          //with() function ka use karte h to value session me ja kar store ho jate hai
          else
          {
            return redirect('request_for_deposit')->with("error","Wrong");
          }
   }
   public function get_usersignup_data(Request $request)
   {
   		$name=$request->name;
    	$mobile=$request->mobile;
    	$email=$request->email;
    	$password=$request->password;
    	$c_password=$request->c_password;
    	$address=$request->address;
      $city=$request->city;
      $status=0;

    	$validator= Validator::make(
    		array(
    			'name'=>$request->name,
    			'mobile'=>$request->mobile,
    			'email'=>$request->email,
    			'password'=>$request->password,
    			'c_password'=>$request->c_password,
          'address'=>$request->address,
          'city'=>$request->city
    			),array(
    			"name"=>'required',
    			"mobile"=>'required',
    			"email"=>'required | email',
    			"password"=>'required',
    			"c_password"=>'required | same:password',
          "address"=>'required',
          "city"=>'required',
    		)
    	);
    	if($validator->fails())
    	{  
    		return redirect('client_signup')->withErrors($validator)->withInput();
    	}
    	else
    	{
    		$data=array(
    			"name"=>$name,
    			"mobile"=>$mobile,
    			"email"=>$email,
    			"password"=>md5($password),
    			"confirm_password"=>$c_password,
		        "address"=>$address,
		        "city"=>$city,
		        "status"=>$status

    		);  

    		$id_email=DB::table('client_signup')->select('email')->where('email',$email)->get();
    		if(count($id_email)==0)
    		{

	    		if(DB::table('client_signup')->insert($data))
	     		{
                    session()->put($data);
                    return redirect()->intended('client_signup')->with("success","Thank you for Registering To Active Your Account Please Call : 7232047238");
    
	    			//return redirect('dashboard');
	    		}
	    		//with() function ka use karte h to value session me ja kar store ho jate hai
	    		else
	    		{
	    			return redirect('client_signup')->with("error","Wrong");
	    		}
	    	}
	    	else
	    	{
	    		return redirect('client_signup')->with("error","Email already Exist");
	    	}
    	}
   }
   public function getclientdashboard()
	{
		return view("client.clientdashboard");
	}
   public function user_login()
   {
   		return view('User.user_login');
   }
   public function get_userlogin_data(Request $request)
   {
    $da=DB::table('client_signup')->select('email','password')->where('email',$request->email)->where('password',md5($request->password))->get();
      if(count($da)==1)
	  { 
        $dasul=DB::table('client_signup')->select('email','status')->where('email',$request->email)->where('status','1')->get();
		if(count($dasul)==1)
        {    
            $dat=DB::table('client_signup')->select('id','name','mobile','password','confirm_password','address','city')->where('email',$request->email)->get();
            foreach($dat as $value)
            {
                $userarray=array('id'=>$value->id,'name'=>$value->name,'email'=>$request->email,'mobile'=>$value->mobile,'password'=>$value->password,'confirm_password'=>$value->confirm_password,'address'=>$value->address,'city'=>$value->city,);
                session()->put($userarray);
            }
        return redirect()->intended('clientdashboard');
		}
		else
		{
			return redirect('/')->with('error','Pls Activate your Account of Admin');
        }			
      }
      else
      { 
		
          return redirect('/')->with('error','Provide Valid Email & Password');
      }

   } 

   public function apply_document()
   {
      $clientid=session()->get('id');
      $das=DB::table('admin_wallet_updates')->select('deposit_amount')->where('select_client',$clientid)->get(); 

      $doc_type = DB::table('document_types')->select('id','doc_name','doc_cost','urgent_cost')->where("status","1")->get();
      return view('client.apply_new_documents')->with('document_type', $doc_type)->with('doc_amt', $das);
   }
   
   public function document_price_type()
   {		
		$doct=DB::table('document_types')->select('id','doc_cost','urgent_cost' )->where('id',$_GET["document_id"])->get();		
		foreach($doct as $docu){
		    if($_GET["document_type"]=="normal"){
				$dPrice = $docu->doc_cost;
			}else{
				$dPrice = $docu->urgent_cost;
			}  	
		}
       echo $dPrice;
   }
   
   public function apply_doc(Request $request)
   {
       $this->validate($request, [
            'files'  => 'required|mimes:jpg,jpeg,png,pdf|max:2024'
           ]);
      $file=$request->file("files");
      $destinationPath='client_document';
	  
	  $file_name = date("d_m_Y_H_i_s_").$file->getClientOriginalName();
	  
      $file->move($destinationPath,$file_name);
	  	
      $document_name=$request->document_name;
     // $files=$request->files;
      $normal_urgent=$request->normal_urgent;
    
      $doct=DB::table('document_types')->select('id','doc_cost','urgent_cost' )->where('doc_name',$document_name)->get();
      foreach ($doct as $value)
      {
        $documenttypeid=$value->id;
        if($request->normal_urgent =="normal"){
           $documen_cost=$value->doc_cost;
        }else{
           $documen_cost=$value->urgent_cost;
        }
      }
      
  
      $c_l_t_name=session()->get('name');
      $cltid=session()->get('id');
    

        $validator=Validator::make(

            array(
                'document_name'=>$request->document_name,
                'normal_urgent'=>$request->normal_urgent
               // 'files'=>$request->files
                
            ),
            array(
                "document_name"=>'required',
                "normal_urgent"=>'required'
                //"files"=>'required|size:1024'
            )
        );
        if($validator->fails())
        {
           
            return redirect('apply_new_documents')->withErrors($validator)->WithInput();
        }
        else
        {

           $admin_wallet_tran = array(

                    "client_id" =>$cltid,
                    "client_name" =>$c_l_t_name,
                    "deposit_amt" =>0,
                    "doc_name"    =>$document_name,
                    "withdrawal_amt"=>$documen_cost
            );
            DB::table('admin_wallet_transactions')->insert($admin_wallet_tran);

            $data_d = array(

                "doc_name"=>$document_name,
                "type"=>$documen_cost,
                "doc_type_id"=>$documenttypeid,
                "client_id"=>$cltid,
                "client_name"=>$c_l_t_name,
                "document"=>$file_name
            );
            
          if($request->clint_amt >= $documen_cost)
          {  
               
               $abc=$request->clint_amt-$documen_cost;
             

                if(DB::table('client_document')->insert($data_d))
                {
                      $data=['deposit_amount'=>$abc]; 
                      DB::table('admin_wallet_updates')->where('select_client',$cltid)->update($data);
                     
                    return redirect('apply_new_documents')->with("success","Document Uploaded Successfully!");
                }
                else
                {
                    return redirect('apply_new_documents')->with("error","Reg. client Faild");
                }  
           }
           else
           {
               return redirect('apply_new_documents')->with("error","please Recharge Your Account");
            }           
        }
   }
   public function download_doc()
   {
      $valueid=session()->get('id');
      
      $download_document = DB::table('publish_documents')->where('c_i_d',$valueid)->orderBy("update_at","DESC")->get();
      //print_r($download_document);die();

      return view('client.download_documents', ['get_download_doc' => $download_document]);
      
   }
   
}


