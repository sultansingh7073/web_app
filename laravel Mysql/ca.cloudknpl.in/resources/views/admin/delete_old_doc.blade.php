
@extends('layouts.master')


@section('title','Client Details')


@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                
                <h4 class="card-title"><strong>Delete Old Document</strong>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ml-3">
                  <table class="table">
                    <thead class=" text-primary" style="border-bottom: 2px solid  lightgrey; ">
                      <th style="font-weight: bold;">ID</th>
                      <th style="font-weight: bold;">Client Name</th>
                      <th style="font-weight: bold;">Document Name</th>
                      <th style="font-weight: bold;">Upload Document</th>
                      <th style="font-weight: bold;">Delete</th>
                    </thead>
                     <tbody>
                      <?php
                         //print_r($client_registers);
                        foreach ($old_document as $doc)
                        {
                          $doc->id;
                          $doc->select_client;
                          $doc->select_document_name;
                          $doc->upload_document;
                      ?>
                      <tr>
                          <td><?php echo $doc->id; ?></td>
                          <td><?php echo $doc->select_client; ?></td>
                          <td><?php echo $doc->select_document_name; ?></td>
                          <td><?php echo $doc->upload_document; ?></td>
                          <td><a href="delete_document/{{$doc->id}}"><i class="material-icons" style="color: red;">delete_forever</i></a></td>
                      </tr>                      
                      <?php
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

