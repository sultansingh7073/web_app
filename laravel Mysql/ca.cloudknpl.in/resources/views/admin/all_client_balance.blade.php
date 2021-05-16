@extends('layouts.master')


@section('title','Client Details')


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>Client Balance List</strong>
                </h4>
              </div>
              <?php 
              if(Session::has('error')){ ?>
                <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Success!</strong> <?php echo Session::get('error'); ?>
                </div>
              <?php } ?>


              <div class="card-body">
              <form action="{{ url('searchclientbalance') }}" method="post" role="search">
                  {{ csrf_field() }}
                  <div class="row">                 
                    <select name="serch_balance">&nbsp;&nbsp;
                      <option value="none">&nbsp;&nbsp;&nbsp;&nbsp;--Client Name--&nbsp;&nbsp;&nbsp;</option>
                      @if(isset($cl_n_me))
                      <?php 
                        foreach($cl_n_me as $user_n)
                        {
                      ?>
                        
                        <option value="<?php echo $user_n->id; ?>" >&nbsp;&nbsp;&nbsp;<?php echo $user_n->name; ?>&nbsp;&nbsp;&nbsp;</option> 
                      <?php 
                        }
                      ?>
                      @endif
                    </select>                        
                    <button type="submit">
                              <i class='fas fa-search' style='font-size:24px'></i>
                    </button>                           
                  </div>
              </form><br>
                <div class="table-responsive ml-3">                    
                  <table class="table">
                    <thead class=" text-primary" style="border-bottom: 2px solid  lightgrey; ">
                      <tr>
                      <th>Client Id</th>
                      <th>Client Name</th>                      
                      <th>Total Amount</th>                                            
                     </tr>
                    </thead>
                     <tbody>
                      @if(isset($balance_req))
                            <?php 
                              foreach($balance_req as $user_d)
                              {
                            ?>
                            <tr>  
                              <td><?php echo $user_d->select_client; ?></td>
                              <td><?php echo $user_d->client_name; ?></td>
                              <td><?php echo $user_d->deposit_amount; ?></td>
                            </tr>
                           <?php 
                              }
                            ?>
                        </tbody>
                      @endif   
                      @if(isset($serch_cl_balance))
                         <tbody>
                            <?php 
                              foreach($serch_cl_balance as $user_d)
                              {
                            ?>
                            <tr>  
                              <td><?php echo $user_d->select_client; ?></td>
                              <td><?php echo $user_d->client_name; ?></td>
                              <td><?php echo $user_d->deposit_amount; ?></td>
                            </tr>
                           <?php 
                              }
                            ?>
                        </tbody>
                     @endif
                  </table>
                </div>
               @if(isset($balance_req))
                    <?php echo $balance_req->links(); ?>
                @endif
                @if(isset($serch_cl_balance))
                  <?php echo $serch_cl_balance->links(); ?>
                @endif 
              </div>
            </div>
          </div>
</div>           


@endsection