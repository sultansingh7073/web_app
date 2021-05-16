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
                <div align="right" class="mr-5">
                  <a href="document_type_master" class="btn btn-info" role="button">+ Add Document</a>

                </div>
                <h4 class="card-title"><strong>List All Document</strong>
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive ml-3">
                  <table class="table">
                    <thead class=" text-primary" style="border-bottom: 2px solid  lightgrey; ">
                      <th>ID</th>
                      <th>Document Name</th>
                      <th>Document Cost</th>
                      <th>Urgent Cost</th>
                      <th>Status</th>
                      <th>Action</th>
                    </thead>
                     <tbody>
                      
                        <?php 
						$i=1;
                          foreach($get_all_doc_list as $get_list)
                          {                             
                        ?>
                        <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $get_list->doc_name; ?></td>
                        <td><?php echo $get_list->doc_cost; ?></td>
                        <td><?php echo $get_list->urgent_cost; ?></td>
                        <td>
						<?php 
						  if($get_list->status =="1"){
							 echo '<span style="color:green">Active</span>';  
						  }else{
							 echo '<span style="color:red">In Active</span>';   
						  }
						?>
						</td>
						<td><a href="/document_type_edit/<?php echo $get_list->id;?>"><i class="fa fa-edit" style="font-size:15px">&nbsp;&nbsp;</i></a>
						 <a href="javascript:void(0);" onclick='deleteItem(<?php echo $get_list->id; ?>)' ><i class="fa fa-trash" style="font-size:15px"></i></a></td>
                        </tr>
                      <?php } ?>
                    
                    </tbody>
                  </table>
                </div>
                <?php echo $get_all_doc_list->links(); ?>
              </div>
            </div>
          </div>
</div>           

<script>
 function deleteItem(id) {	
    if (confirm("Are you sure to delete document type ?")) {
		window.location = "/document_delete_option/"+id;         
    }
    return false;
}
</script>
@endsection

