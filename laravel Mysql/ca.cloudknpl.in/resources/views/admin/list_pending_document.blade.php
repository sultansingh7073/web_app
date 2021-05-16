@extends('layouts.master')


@section('title','Client Details')


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"><strong>List Pending Document</strong>
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
                      <th>Download</th>
                      <th>Edit or Publish</th>
                    </thead>
                     <tbody>
                          
                        <?php
											
                        foreach($pending_list as $pending_doc_list)
                        {  
                           if($pending_doc_list->status == "1")
                           {						
          							?>  
              							<tr> 
              							  <td><?php echo $pending_doc_list->client_name;  ?></td>
              							  <td><?php echo $pending_doc_list->doc_name; ?></td>
              							  <td><?php echo $pending_doc_list->doc_request_date; ?></td>                          
              							  <td><?php echo $pending_doc_list->type; ?></td>
              							  <td><span style="color:red">Pending</span></td>
								<td>
									<a target="_blank" href="client_document/{{ $pending_doc_list->document }}" download="{{ $pending_doc_list->document }}"><i class="fa fa-file-pdf" style="font-size:22px"></i></a>
								</td>
								<td>
                                  <a href="edit_publish_doc/{{$pending_doc_list->id}}" ><i class="fa fa-edit" style="font-size:15px"></i></a>
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

