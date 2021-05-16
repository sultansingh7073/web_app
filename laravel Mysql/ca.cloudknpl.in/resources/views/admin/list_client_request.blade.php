
@extends('layouts.master')


@section('title','Client Details')


@section('content')

<?php 
if(Session::has('success')){ ?>
	<div class="alert alert-success alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Success!</strong> <?php echo Session::get('success'); ?>
	</div>
<?php } ?>

<?php 
if(Session::has('error')){ ?>
	<div class="alert alert-danger alert-dismissible">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  <strong>Error!</strong> <?php echo Session::get('error'); ?>
	</div>
<?php } ?>


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>Client Pending Request</strong>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ml-3">
                  <table class="table">

                    <thead class="text-primary">                  
                      <th>Client Name</th>
                      <th>Email</th>
                      <th>Request Date</th>
                      <th>Mobile No.</th>
                      <th>Amount</th>
                      <th>Status</th>
                      <th style="font-weight: bold;">Action</th>
                    </thead>
                     <tbody>
                      <?php

                        foreach ($user_req_list as $user_list)
                        {  
                            if($user_list->status == "1")
                            { 						
						          ?>
						  <tr>                    
							  <td><?php echo $user_list->clientname; ?></td>
							  <td><?php echo $user_list->clientemail; ?></td>
							  <td><?php echo $user_list->created_at; ?></td>
							  <td><?php echo $user_list->clientmobile; ?></td>
							  <td><?php echo $user_list->amt; ?></td>
							  <td>
							  <?php echo '<span style="color:red">Pending</span>';  ?>								
							 </td>
							  <td>
                  <a href="update_client_id/{{$user_list->id}}"><i class="fa fa-edit" style="font-size:15px"></i></a>
                </td>
						  </tr>                 
                    <?php
                           }
                      }
                    ?>

                    </tbody>
                  </table>
                </div>
               
              </div>
            </div>
          </div>
</div> 



@endsection

