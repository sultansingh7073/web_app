<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use DB;
use Hash;
use app\User;
use Auth;
use App\Client;
use App\Http\Middleware\Checklogin;

class HomeController extends Controller
{
    public function index()
    {
                                                                                                                                                                                                                           
    }
    public function get_admin_profile()
    {
        $admin_pro = DB::table('registers')->get();
        return view('admin.admin_profile')->with('admin_data',$admin_pro);
    }
    public function get_admin_profile_update(Request $request)
    {
        $first_name=$request->first_name;
        $last_name=$request->last_name;
        $admin_email=$request->admin_email;
        $new_password=$request->new_password;
        //$new_c_password=$request->new_c_password;

    $val_da= Validator::make(
            array(
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'admin_email'=>$request->admin_email,
                //'new_password'=>$request->new_password,
                //'new_c_password'=>$request->new_c_password
                ),array(
                "first_name"=>'required',
                "last_name"=>'required',
                "admin_email"=>'required',
                //"new_password"=>'required',
                //"new_c_password"=>'required | same:new_password'
            )
        );
        if($val_da->fails())
        {  
            return redirect('admin_profile')->withErrors($val_da)->withInput();
        }
        else
        {   

                
                    $adm_data = array(
                        "first_name"=>$first_name,
                        "last_name"=>$last_name,
                        "admin_email"=>$admin_email
                        //"confirm_password"=>$new_c_password
                    );
                if(isset($new_password) && $new_password !=""){

                     $adm_data["password"] = Hash::make($new_password);
                }
                if(DB::table('registers')->where('id',$request->id)->update($adm_data))
                {
                    return redirect('admin_profile')->with("success","Your Profile Update Successfully");
                }
                else
                {
                    return redirect('admin_profile')->with("error","Your Profile Update Faild");
                }     
                  
        }
       
         
    }
    public function get_document_type_list()
    {
        $all_doc_list = DB::table('document_types')->paginate(10);
        return view('admin.document_type_list', ['get_all_doc_list' => $all_doc_list]);
    }
    public function list_pending_doc()
    {
      
     $pending_doc_list = DB::table('client_document')->select('id','doc_name','client_name','type','doc_request_date','status','document')->orderBy("doc_request_date","DESC")->get();

        return view('admin.list_pending_document')->with('pending_list',$pending_doc_list);

    } 
    public function get_complete_all_document()
    {
      
     $pending_doc_list = DB::table('client_document')->select('id','doc_name','client_name','type','doc_request_date','status')->orderBy("doc_request_date","DESC")->paginate(10);
        
        return view('admin.all_document_list')->with('pending_list',$pending_doc_list);

    }
    public function get_list_client_request()
    {
        $client_list_req = DB::table('client_requests')->select('id','status','clientid','clientname','clientemail','clientmobile','amt','created_at','updated_at')->orderBy('id','DESC')->get();
        return view('admin.list_client_request')->with('user_req_list', $client_list_req);   
    }

	public function get_completed_client_request()
    {
        $client_list_req = DB::table('client_requests')->select('id','status','clientid','clientname','clientemail','clientmobile','amt','created_at','updated_at')->orderBy('updated_at','DESC')->paginate(10);

        return view('admin.completed_client_request')->with('user_req_list', $client_list_req);   
    }
    
    public function get_delete_doc(Request $request)
    {
        DB::table('publish_documents')->where('id',$request->id)->delete();
         return redirect('delete_old_doc');

    }
    public function delete_doc()
    {
        $old_doc = DB::table('publish_documents')->select('id','select_client','select_document_name','upload_document')->get();
        return view('admin.delete_old_doc')->with('old_document', $old_doc);        
    }
    public function get_all_client_balance()
    {
    	 $cl_n_me = DB::table('client_signup')->get();

        $balance_req = DB::table('admin_wallet_updates')->paginate(10);

        return view('admin.all_client_balance')->with('balance_req', $balance_req)->with('cl_n_me', $cl_n_me);
    }
    public function get_search_client_balance(Request $request)
    {
    	$serchclient_balance = $request->serch_balance;

    	$cl_n_me = DB::table('client_signup')->get();

        $serch_cl_balance = DB::table('admin_wallet_updates')->where('select_client','LIKE','%'.$serchclient_balance.'%')->paginate(10);

     //print_r($userserch);die;
	    if(count($serch_cl_balance) > 0)
	    {    
	        return view('admin.all_client_balance')->with('serch_cl_balance',$serch_cl_balance)->with("cl_n_me",$cl_n_me);
	    }    
	    else
	    {
	       return redirect('client_balance_list')->with('error','No Details found. Try to search again !');
	    }   
    }
    public function getlist_transaction()
    {
        $user_name = DB::table('client_signup')->get();

        $user_req = DB::table('admin_wallet_transactions')->paginate(10);

        return view('admin.list_transaction')->with('user_req', $user_req)->with('user_name', $user_name);
    }
    public function get_admin_serch_client(Request $request)
    {
    	$serchclient = $request->serch;

    	$user_name = DB::table('client_signup')->get();

        $user_serch = DB::table('admin_wallet_transactions')->select('client_name','date','deposit_amt','doc_name','withdrawal_amt')->where('client_name','LIKE','%'.$serchclient.'%')->paginate(10);

     //print_r($userserch);die;
	    if(count($user_serch) > 0)
	    {    
	        return view('admin.list_transaction')->with('user_serch', $user_serch)->with("user_name",$user_name);
	    }    
	    else
	    {
	       return redirect('list_transaction')->with('error','No Details found. Try to search again !');
	    }   
    }
    
    public function getwallet_list_tra(Request $request)
    {   
        $client_list=$request->client_list;
        $amount=$request->amount;

        $validator=Validator::make(

            array(
                'client_list'=>$request->client_list,
                'amount'=>$request->amount
            ),
            array(
                "client_list"=>'required',
                "amount"=>'required'
            )
        );
        if($validator->fails())
        {
            return redirect('list_transaction')->withErrors($validator)->WithInput();
        }
        else
        {
            $data = array(

                "select_client"=>$client_list,
                "deposit_amount"=>$amount,
            );

                if(DB::table('admin_wallet_transactions')->insert($data))
                {
                    return redirect('list_transaction')->with("success","Your Registration Successfully");
                }
                else
                {
                    return redirect('list_transaction')->with("error","Reg. client Faild");
                }      
        }
            
    }
    
    public function getupdate_client_id($id)
    {
       $fetch_data = DB::table('client_requests')->select('id','clientid','clientname','amt')->where('id',$id)->get();
       
        return view('admin.admin_wallet_updates')->with('fetch_all_data',$fetch_data);
    }
    public function getwalletupdate(Request $request)
    {   
        $select_client_id=0;
        $client_list=$request->client_list;
        $amount=$request->amount;
        $client_name=$request->client_name;
        $request_id=$request->request_id;
		
        $doct=DB::table('admin_wallet_updates')->select('select_client','deposit_amount')->where('select_client',$client_list)->get();
        foreach ($doct as $value)
        {
            $select_client_id=$value->select_client;
            $select_dep=$value->deposit_amount;
        }  
        //print_r($client_list);die();
        $validator=Validator::make(
            array(
                'client_list'=>$request->client_list,
                'amount'=>$request->amount
            ),
            array(
                "client_list"=>'required',
                "amount"=>'required'
            )
        );
		
        if($validator->fails())
        {           
            return redirect('update_client_id/{id}')->withErrors($validator)->WithInput();
        }
        else
        { 
            $ClientStatus = array(
                    "status" =>0,
                    "updated_at" =>date("Y-m-d h:i:s")
            );
            DB::table('client_requests')->where('id',$request_id)->update($ClientStatus);

            $admin_wallet_transactions = array(

                    "client_id" =>$client_list,
                    "client_name" =>$client_name,
                    "deposit_amt" =>$amount,
                    "doc_name"    =>"-",
                    "withdrawal_amt"=>0
            );
            DB::table('admin_wallet_transactions')->insert($admin_wallet_transactions);


            if($select_client_id==$client_list)
            {    
                $data=['deposit_amount'=>$amount+$select_dep];
					
                DB::table('admin_wallet_updates')->where('select_client',$client_list)->update($data);

                return redirect('list_client_request')->with("success","Amount Successfully deposited in ".$client_name." wallet");
            }
            else
            {
                $data = array(
					"select_client"=>$client_list,
                    "client_name" =>$client_name,
					"deposit_amount"=>$amount
                );

                if(DB::table('admin_wallet_updates')->insert($data))
                {

                    return redirect('list_client_request')->with("success","Amount Successfully deposited in ".$client_name." wallet");
                }
                else
                {
                    return redirect('update_client_id/{id}')->with("error","Amount Updatation Failed,Please Try Again !");
                }
            }          
        }
            
    }
    public function getadmin_wallet()
    {
           
       $data = DB::table('client_signup')->select('id','name')->get();
       
        return view('admin.admin_wallet_update')->with('data_user', $data);
    }
    public function get_bhar_walletupdates(Request $request)
    { 

        $sel_ect_cli_ent_id=0;

        $c_l_i_n_t_id=$request->c_l_i_n_t_id;
       	$clientN = explode(",", $c_l_i_n_t_id);
       	$Cid =  $clientN[0];
       	$Cname =  $clientN[1];
        $cli_amount=$request->cli_amount;

        $wallet_upadete=DB::table('admin_wallet_updates')->select('select_client','deposit_amount')->where('select_client',$Cid)->get();
        foreach ($wallet_upadete as $value)
        {
            $sel_ect_cli_ent_id=$value->select_client;
            $sel_ect_dep=$value->deposit_amount;
        }  
        
        $validator=Validator::make(
            array(
                'cli_amount'=>$request->cli_amount
            ),
            array(
                "cli_amount"=>'required'
            )
        );
		
        if($validator->fails())
        {           
            return redirect('admin_wallet')->withErrors($validator)->WithInput();
        }
        else
        { 
            $admin_transactio_s = array(

                    "client_id" =>$Cid,
                    "client_name" =>$Cname,
                    "deposit_amt" =>$cli_amount,
                    "doc_name"    =>"-",
                    "withdrawal_amt"=>0
            );
            DB::table('admin_wallet_transactions')->insert($admin_transactio_s);


            if($sel_ect_cli_ent_id==$Cid)
            {    
                $data_bal=['deposit_amount'=>$cli_amount+$sel_ect_dep];
					
                DB::table('admin_wallet_updates')->where('select_client',$Cid)->update($data_bal);

                return redirect('admin_wallet')->with("success","Amount Successfully deposited in ".$Cname." wallet");
            }
            else
            {
                $data_insert = array(
					"select_client"=>$Cid,
                    "client_name" =>$Cname,
					"deposit_amount"=>$cli_amount
                );

                if(DB::table('admin_wallet_updates')->insert($data_insert))
                {

                    return redirect('admin_wallet')->with("success","Amount Successfully deposited in ".$client_name." wallet");
                }
                else
                {
                    return redirect('admin_wallet')->with("error","Amount Updatation Failed,Please Try Again !");
                }
            }          
        }
            
    }
    public function publish_document()
    {   
       $data = DB::table('client_signup')->select('id','name')->get();
       $document =  DB::table('document_types')->select('doc_name')->get();
       
       return view('admin.publish_document')->with('data_user', $data)->with('documtent',$document);
    }
    public function get_edit_publish_doc($id)
    {
        $edit_pub_doc = DB::table('client_document')->select('id','client_name','doc_name','client_id')->where('id',$id)->get();
       
        return view('admin.list_pending_publish_document')->with('edit_doc',$edit_pub_doc);
    }

    public function get_bhar_publish_data(Request $request)
    {
        $this->validate($request, [
            'bhar_publish_image'  => 'required|max:2048'
           ]);
		$file=$request->file("bhar_publish_image");

         $destinationPath = 'uploads';
		 $file_path=date("d_m_Y_H_i_s_").$file->getClientOriginalName();
		 
         $file->move($destinationPath,$file_path);

        $client_list=$request->client_list;
        $select_document=$request->select_document;
        $cli_id=$request->cli_id;

       // print_r($cli_id);die();

        $validator=Validator::make(

            array(
                'client_list'=>$request->client_list,
                'select_document'=>$request->select_document
                //'image'=>$request->image
            ),
            array(
                "client_list"=>'required',
                "select_document"=>'required'
                //"image"=>'required'
            )
        );
        if($validator->fails())
        {
            //echo "error";
            return redirect('publish_doc')->withErrors($validator)->WithInput();
        }
        else
        {
            $data = array(
                "select_client"=>$client_list,
                "select_document_name"=>$select_document,
                "upload_document"=>$file_path,
                "c_i_d"=>$cli_id
            );

                if(DB::table('publish_documents')->insert($data))
                {
                    return redirect('publish_doc')->with("success","Document Publish Successfully");
                }
                else
                {
                    return redirect('publish_doc')->with("error","Document Publish Faild");
                }      
        }
            
    }
    public function getpublishdata(Request $request)
    {
		$file=$request->file("image");

         $destinationPath = 'uploads';
		 $file_path=date("d_m_Y_H_i_s_").$file->getClientOriginalName();
		 
         $file->move($destinationPath,$file_path);

        $client_name=$request->client_name;
        $select_doc=$request->select_doc;
        $clie_id=$request->clie_id;
        $cl_i_d=$request->cl_i_d;
		
        $validator=Validator::make(

            array(
                'client_name'=>$request->client_name,
                'select_doc'=>$request->select_doc
                //'image'=>$request->image
            ),
            array(
                "client_name"=>'required',
                "select_doc"=>'required'
                //"image"=>'required'
            )
        );
        if($validator->fails())
        {
            //echo "error";
            return redirect('edit_publish_doc/{id}')->withErrors($validator)->WithInput();
        }
        else
        {
            $data = array(
                "select_client"=>$client_name,
                "select_document_name"=>$select_doc,
                "upload_document"=>$file_path,
                "c_i_d"=>$cl_i_d
            );

				DB::table('client_document')->where('id',$clie_id)->update(['status'=> 0]);

                if(DB::table('publish_documents')->insert($data))
                {
                    return redirect('list_pending_document')->with("success","Document Publish Successfully");
                }
                else
                {
                    return redirect('list_pending_document')->with("error","Document Publish Faild");
                }      
        }
            
    }
    public function document_type()
    {
         return view('admin.document_type');
    }
    public function document_type_master_data(Request $request)
    {       
        $doc_name=$request->doc_name;
        $doc_cost=$request->doc_cost;
        $urgent_cost=$request->urgent_cost;
        $status=$request->status;
		

        $validator=Validator::make(
            array(
                'doc_name'=>$request->doc_name,
                'doc_cost'=>$request->doc_cost,               
                'status'=>$request->status
            ),
            array(
                "doc_name"=>'required',
                "doc_cost"=>'required',               
                "status"=>'required'
            )
        );
		
        if($validator->fails())
        {           
            return redirect('document_type_master')->withErrors($validator)->WithInput();
        }
        else
        {
            $data = array(
                "doc_name"=>$doc_name,
                "doc_cost"=>$doc_cost,
                "urgent_cost"=>$urgent_cost,
                "status"=>$status
            );
				$users_count = DB::table('document_types')->where('doc_name', '=', $doc_name)->count();
			    if(isset($users_count) && $users_count >0){
					return redirect('document_type_master')->with("error","This Document Already Exists");
				}else{
					if(DB::table('document_types')->insert($data))
					{
						return redirect('document_type_master')->with("success","Document type created successffully");
					}
					else
					{
						return redirect('document_type_master')->with("error","Document type created fail");
					}  
				}    
        }
         
    }
	
	// Delete Document Type	
	public function delete_document_type($id)
    {		
		$user = DB::table('document_types')->where('id',$id)->delete();
		if(isset($user) && $user=="1"){
			return redirect('document_type_list')->with('success','Document Type Delete Successfully');			
		}else{
			return redirect('document_type_list')->with('error','Document Cannot Deleted');	
		}
	}
	
	// update Document Type	
	public function document_type_option(Request $request)
    {		
			$data=['doc_name'=>$request->doc_name,
               'doc_cost'=>$request->doc_cost,
               'urgent_cost'=>$request->urgent_cost,
               'status'=>$request->status               
            ]; 
            DB::table('document_types')->where('id',$request->document_id)->update($data);
            return redirect('document_type_list');
	}
	
	
	// Delete Document Type	
	public function edit_document_type($id)
    {		
		$client_doc = DB::table('document_types')->where("id",$id)->get();
        return view('admin.edit_document_type')->with('document_type', $client_doc);
	}
    public function getclientdetails()
    {
        $users = DB::table('client_signup')->paginate(10);
        return view('admin.ClientDetails', ['client_value' => $users]);
    }
    public function getchangeStatus(Request $request)
    {
       $user = DB::table('client_signup')->where('id',$request->user_id)->update(['status'=>$request->status]);

        
    }
    public function edit(Client $client,$id)
    {
        $edit = DB::table('client_signup')->find($id);
        //$edit=Client::find($id);
        //dd($edit);
         return view('admin.UpdateClientDetails', ['client_data' => $edit]);
        //return view('UpdateClientDetails');
    }
    public function insert_user_update_data(Request $request)
    {
        
        $data=['name'=>$request->name,
                'mobile'=>$request->mobile,
                'address'=>$request->address,
                'city'=>$request->city,
                'email'=>$request->email
                ]; 
                DB::table('client_signup')->where('id',$request->id)->update($data);
                return redirect('clientdetails');
    }
    public function get_delete_data(Request $request)
    {
        DB::table('client_signup')->where('id',$request->id)->delete();
         return redirect('clientdetails');

    }
    public function getRegclient()
    {
        return view('admin.clientRegister');
    }
    public function clientreg(Request $request)
    {
        $name=$request->name;
        $mobile=$request->mobile;
        $email=$request->email;
        $password=$request->password;
        $c_password=$request->c_password;
        $address=$request->address;
      $city=$request->city;

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
            return redirect('Regclient')->withErrors($validator)->withInput();
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
          "city"=>$city
            );
            $id_email=DB::table('client_signup')->select('email')->where('email',$email)->get();
            if(count($id_email)==0)
            {
                if(DB::table('client_signup')->insert($data))
                {
                    session()->put($data);
                    return redirect()->intended('clientdetails');
                }
                else
                {
                    return redirect('Regclient')->with("error","Wrong");
                }
            }
            else
            {
                return redirect('Regclient')->with("error","Email already Exist");
            }
        }    }
    public function login_form()
    {
    	return view('login');
    }
    public function checklogin(Request $request)
    {
         $name="name";

        $user=array("admin_email"=>$request->email,"password"=>$request->password);

    	if(Auth::attempt($user))
    	{
           session()->put($user);
    		return redirect()->intended('admindashboard');
    	}
    	else
    	{ 
    	  return redirect('login')->with('error','provide valid email and password');
    	}
    }
    public function getprofile()
    {		
		return view('admin.dashboard');
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
    	return redirect()->intended('login');
    }
    public function signupform()
    {
    	return view("signup_form");
    }
    public function signme(Request $request)
    {
    	$first_name=$request->first_name;
    	$last_name=$request->last_name;
    	$email=$request->email;
    	$password=$request->password;
    	$c_password=$request->c_password;

    	$validator= Validator::make(
    		array(
    			'first_name'=>$request->first_name,
    			'last_name'=>$request->last_name,
    			'email'=>$request->email,
    			'password'=>$request->password,
    			'c_password'=>$request->c_password
    			),array(
    			"first_name"=>'required',
    			"last_name"=>'required',
    			"email"=>'required | email',
    			"password"=>'required',
    			"c_password"=>'required | same:password'
    		)
    	);
    	if($validator->fails())
    	{  
    		return redirect('signup')->withErrors($validator)->withInput();
    	}
    	else
    	{
    		$data=array(
    			"first_name"=>$first_name,
    			"last_name"=>$last_name,
    			"admin_email"=>$email,
    			"password"=>Hash::make($password),
    			"confirm_password"=>$c_password
    		);
    		$id_email=DB::table('registers')->select('admin_email')->where('admin_email',$email)->get();
    		if(count($id_email)==0)
    		{
	    		if(DB::table('registers')->insert($data))
	    		{
                    session()->put($data);
                    return redirect()->intended('admindashboard');
	    		}
	    		else
	    		{
	    			return redirect('signup')->with("error","Wrong");
	    		}
	    	}
	    	else
	    	{
	    		return redirect('signup')->with("error","Email already Exist");
	    	}
    	}
    }
}
