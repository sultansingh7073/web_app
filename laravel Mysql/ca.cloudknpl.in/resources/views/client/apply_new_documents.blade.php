@extends('layouts.client_master')

@section('title','Apply Document')

@section('content')

<body>
 @if(count($errors) >0 )
                  <div class="alert alert-danger">
                      <ul>
                          @foreach($errors->all() as $error)
                              <li>
                                  {{ $error }}
                              </li>
                          @endforeach
                      </ul>  
                  </div>
  @endif
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


<div class="content">
  <div class="row">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><strong>Request New Document</strong></h4>
        </div>
        <div class="card-body">  		
            <?php
              $doc_amounts="";
              foreach($doc_amt as $doc_amount)
              {
                   $doc_amounts = $doc_amount->deposit_amount;
              }
              ?>    
                        
          <form action="{{ url('apply_new_doc') }}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
            <div class="one">
              <div class="form-group">
                <label for="select">Select Document:</label>
                  <select class="form-control" name="document_name" id="document_name" required>
                    <option value="">--Select Document List--</option>
                      @foreach($document_type as $doc_list)
                      <option value="{{ $doc_list->doc_name }}" id="{{ $doc_list->id }}">{{ $doc_list->doc_name }}</option>
                      @endforeach    
                  </select>
                    
              </div>
              <div>
                <label for="file" style="color: orange">Upload Document:</label>
                  <input type="file" class="form-control" name="files" required>
              </div><br>
              <input type="hidden" name="clint_amt" value="<?php echo $doc_amounts; ?>">
              <div class="form-group">
                <label for="name">Type:&nbsp;&nbsp;&nbsp;</label>  
                <label class="radio-inline">                 
                  <input type="radio" name="normal_urgent" id="normal" value="normal">&nbsp;Normal&nbsp;&nbsp;&nbsp
                </label>
                <label class="radio-inline">
                  <input type="radio" name="normal_urgent" id="urgent" value="urgent">&nbsp;Urgent                 
                </label>
              </div>
            </div>
           
            <button type="submit" class="btn btn-success">Submit</button>
           
          </form>
      </div>
    </div>
</div> 
          
      <div class="col-md-4" style="background-color: white;">
			<br>       
			<br>       
			<br> 
			<div>             
					<div class="row">
						<div class="col-md-12">  
							<div class="form-group">
							  <label for="usr">Your Wallet Balance :<?php if(isset($doc_amounts)){ echo $doc_amounts; } ?></label>	<br>
								 <label for="usr">Document Price :<span id="dprice">0</span></label>
							</div>
						</div>					
					</div>
			</div>
      </div>
</div>
</div>
<script src="dashboard/vendor/jquery/jquery.min.js"></script>
<script>
	jQuery(document).ready(function(){
	    jQuery('input[name="normal_urgent"]').change(function(){ 
			var document_id = jQuery('#document_name option:selected').attr('id');	
			var document_type = jQuery(this).val();	
				jQuery.ajax({
					type: "GET",
					url: "/get_document_price",
					data: {'document_id': document_id,"document_type":document_type },               
					success: function (data){
					    jQuery("#dprice").text(data);                 
					}
				});			
		});
			
		
	});
</script>
@endsection


