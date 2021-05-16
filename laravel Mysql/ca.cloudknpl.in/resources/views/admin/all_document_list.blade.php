@extends('layouts.master')


@section('title','Client Details')


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>List Complete Document</strong>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ml-3">
                  <table class="table">
                    <thead class=" text-primary" style="border-bottom: 2px solid  lightgrey; ">
                      
                      <th>Client Name</th>
                      <th>Document Name</th>
                      <th>Request Date</th>
                     
                      <th>Cost</th>
                      <th>Status</th>
                      
                    </thead>
                     <tbody>
                          
                        <?php
                        foreach($pending_list as $pending_doc_li)
                        {  
                           if($pending_doc_li->status == "0")
                           {            
                        ?> 
                            <tr> 
                              <td><?php echo $pending_doc_li->client_name;  ?></td>
                              <td><?php echo $pending_doc_li->doc_name; ?></td>
                              <td><?php echo $pending_doc_li->doc_request_date; ?></td>                         
                              <td><?php echo $pending_doc_li->type; ?></td>
                              <td>
                              <?php echo '<span style="color:green">Completed</span>'; ?>
                             </td>
                            </tr>
                        <?php 
                         } 
                        }
                        ?>
                    </tbody>
                  </table>
                </div>
                
                <?php echo $pending_list->links(); ?>

              </div>
            </div>
          </div>
</div>           


@endsection

