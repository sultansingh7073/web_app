@extends('layouts.master')


@section('title','Client Details')


@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>Client Transaction List</strong>
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
              <form action="{{ url('search') }}" method="post" role="search">
                  {{ csrf_field() }}
                  <div class="row">                 
                    <select name="serch">&nbsp;&nbsp;
                      <option value="none">&nbsp;&nbsp;&nbsp;&nbsp;--Client Name--&nbsp;&nbsp;&nbsp;</option>
                      @if(isset($user_name))
                      <?php 
                        foreach($user_name as $user_n)
                        {
                      ?>
                        
                        <option value="<?php echo $user_n->name; ?>" >&nbsp;&nbsp;&nbsp;<?php echo $user_n->name; ?>&nbsp;&nbsp;&nbsp;</option> 
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
                      <th>Client Name</th>
                      <th>Date</th>
                      <th>Deposit Amount</th>                   
                      <th>Document Name</th>                      
                      <th>Withdrawal Amount</th>                                    
                     </tr>
                    </thead>
                     <tbody>
                      @if(isset($user_req))
                            <?php 
                              foreach($user_req as $user_d)
                              {
                            ?>
                            <tr>  
                              <td><?php echo $user_d->client_name; ?></td>
                              <td><?php echo $user_d->date; ?></td>
                              <td><?php echo $user_d->deposit_amt; ?></td>
                              <td><?php echo $user_d->doc_name; ?></td>
                              <td><?php echo $user_d->withdrawal_amt; ?></td>
                            </tr>
                           <?php 
                              }
                            ?>
                        </tbody>
                      @endif   
                      @if(isset($user_serch))
                         <tbody>
                            <?php 
                              foreach($user_serch as $user_d)
                              {
                            ?>
                            <tr>  
                              <td><?php echo $user_d->client_name; ?></td>
                              <td><?php echo $user_d->date; ?></td>
                              <td><?php echo $user_d->deposit_amt; ?></td>
                              <td><?php echo $user_d->doc_name; ?></td>
                              <td><?php echo $user_d->withdrawal_amt; ?></td>
                            </tr>
                           <?php 
                              }
                            ?>
                        </tbody>
                     @endif
                  </table>
                </div>
                @if(isset($user_serch))
                    <?php echo $user_serch->links(); ?>
                @endif
                @if(isset($user_req))
                  <?php echo $user_req->links(); ?>
                @endif    
              </div>
            </div>
          </div>
</div>           


@endsection


