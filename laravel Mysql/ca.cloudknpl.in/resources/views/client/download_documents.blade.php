@extends('layouts.client_master')


@section('title','Apply Document')



@section('content')
  <style type="text/css">
    .form-control
    {
      width: 70%;
      background-color:#33FFB8;
      color: blue;
      font-weight: bold;
    }
    .form-group label
    {
      color: orange;
      font-weight: bold;
    }.one
    {
      position: relative;
      left: 15%;
    }
  </style>
</head>
<body>
<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title" align="center"><strong>Request New Document</strong></h4>
              </div>
              <div>
                <table class="table">
                  <caption></caption><br>
                  <thead>
                    <tr>
                      <th>Client Name</th> 
                      <th>Document Name</th>
                      <th>Publish Date</th>
                      <th>download</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      foreach($get_download_doc as $get_dow_doc)
                      {
                    ?>
                    <tr>
                      <td><?php echo $get_dow_doc->select_client; ?></td>
                      <td><?php echo $get_dow_doc->select_document_name; ?></td>                      
                      <td><?php echo $get_dow_doc->update_at; ?></td>
                      <input type="hidden" name="file" value="<?php echo $get_dow_doc->select_document_name; ?>">
                      <td>
						<a target="_blank" href="uploads/{{ $get_dow_doc->upload_document }}" download="{{ $get_dow_doc->upload_document }}"><i class="fa fa-file-pdf" style="font-size:22px"></i></a>
					                          
                      </td>
                    </tr>
                  <?php } ?> 
                  </tbody>
                </table>
              </div>
              

            </div>
          </div>    
        </div>  
</div>        
@endsection


