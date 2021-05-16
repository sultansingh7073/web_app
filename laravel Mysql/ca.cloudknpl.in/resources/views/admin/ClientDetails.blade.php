
@extends('layouts.master')


@section('title','Client Details')


@section('content')
<div class="content">

	
	
	<span class="msg"></span>
	  
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div align="right" class="mr-5">
                  <a href="Regclient" class="btn btn-info" role="button">+ Add Client</a>				  

                </div>
				
                <h4 class="card-title"><strong>Client Details</strong>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ml-3">
                  <table class="table">
                    <thead class=" text-primary" style="border-bottom: 2px solid  lightgrey; ">
                      <th>ID</th>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>City</th>
                      <th>Status</th>
                      <th colspan="3">Action</th>
                    </thead>
                     <tbody>
						<?php
                        //print_r($client_registers);
                        foreach ($client_value as $user)
                        {
                          $user->id;
                          $user->name;
                          $user->mobile;
                          $user->email;
                          $user->city;
						?>
						<tr>
                          <td><?php echo $user->id; ?></td>
                          <td><?php echo $user->name; ?></td>
                          <td><?php echo $user->mobile; ?></td>
                          <td><?php echo $user->email; ?></td>
                          <td><?php echo $user->city; ?></td>
                          <td> 
                            <input data-id="{{$user->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $user->status ? 'checked' : '' }}>
                          </td>
                          <td><a href="delete_data/{{$user->id}}"><i class="material-icons" style="color: red;">delete_forever</i></a></td>
                          <td><a href="update_data/{{$user->id}}"><i class="material-icons" style="color:green">done</i></a></td>
                          <td></td>
						</tr>                      
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                </div>
                 <?php echo $client_value->links(); ?>
              </div>
            </div>
          </div>
</div>           
</div>

  <script src="/dashboard/vendor/jquery/jquery.min.js"></script>

<script>
  jQuery(function() {
    jQuery('.toggle-class').change(function(){
        var status = jQuery(this).prop('checked') == true ? 1 : 0; 
        var user_id = jQuery(this).data('id');        
        jQuery.ajax({
            type: "GET",            
            url: '/changeStatus',
            data: {'status': status, 'user_id': user_id },
            success: function(ddd){
				if(status == 1){				
					jQuery(".msg").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>Success!</strong> Acount is active successffully !</div>');
				}else{					
					jQuery(".msg").html('<div class="alert alert-success alert-dismissible"><a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>Success!</strong> Acount is deactive successffully !</div>');
				}
            }
        });
    })
  })

</script>
       

@endsection

