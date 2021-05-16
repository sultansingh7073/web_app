@extends('layouts.client_master')


@section('title','Client Details')


@section('content')



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>Transaction List Page</strong>
                </h4>
              </div>
              <div class="card-body">
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
                        <?php 
                          foreach($user_doc as $user_d)
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
                  </table>
                </div>
                <?php echo $user_doc->links(); ?>

              </div>
            </div>
          </div>
</div>          


@endsection

