<div class="content-wrapper">
	<section class="content">        
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title" style="width:100%;">User
						<small>List</small>
							<div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
						</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-hover dataTable" id="mydata">
							<thead>
								<tr>
									<th>name</th>
									<th>email</th>
									<th>role</th>
									<th>status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody id="show_data">
								
							</tbody>
						</table>
					</div>
				</div>  
			</div>
		</div>	
    </section>
</div>
		<!-- MODAL ADD -->
        <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">name</label>
                            <div class="col-md-10">
                              <input type="text" name="user_name" id="user_name" class="form-control" placeholder="user_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">mail</label>
                            <div class="col-md-10">
                              <input type="text" name="user_email" id="user_email" class="form-control" placeholder="user_email">
                            </div>
                        </div> 
						<div class="form-group row">
                            <label class="col-md-2 col-form-label">role</label>
                            <div class="col-md-10">
                              <input type="text" name="user_role" id="user_role" class="form-control" placeholder="user_role">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">status</label>
                            <div class="col-md-10">
                              <input type="text" name="user_status" id="user_status" class="form-control" placeholder="user_status">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL ADD-->

        <!-- MODAL EDIT -->
        <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">name</label>
                            <div class="col-md-10">
                              <input type="text" name="user_name_edit" id="user_name_edit" class="form-control" placeholder="user_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">mail</label>
                            <div class="col-md-10">
                              <input type="text" name="user_email_edit" id="user_email_edit" class="form-control" placeholder="user_email">
                            </div>
                        </div>                       
						<div class="form-group row">
                            <label class="col-md-2 col-form-label">role</label>
                            <div class="col-md-10">
                              <input type="text" name="user_role_edit" id="user_role_edit" class="form-control" placeholder="user_role">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">status</label>
                            <div class="col-md-10">
                              <input type="text" name="user_status_edit" id="user_status_edit" class="form-control" placeholder="user_status">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
					<!--<input type="hidden" name="id_edit" id="id_edit" class="form-control">-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL EDIT-->

        <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete user</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this user?</strong>
                  </div>
                  <div class="modal-footer">
					<input type="hidden" name="id_delete" id="id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
<script type="text/javascript">
	$(document).ready(function(){
		show_user();	//call function show all product		
		$('#mydata').dataTable();
		 
		//function show all product
		function show_user(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('User_controller/user_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].name+'</td>'+
		                        '<td>'+data[i].email+'</td>'+
		                        '<td>'+data[i].role+'</td>'+
		                        '<td>'+data[i].status+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-name="'+data[i].name+'" data-email="'+data[i].email+'" data-role="'+data[i].role+'" data-status="'+data[i].status+'">Edit</a>'+' '+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        // Save User_controller
        $('#btn_save').on('click',function(){
		
            var name = $('#user_name').val();
            var email = $('#user_email').val();
            var role        = $('#user_role').val();
            var status        = $('#user_status').val();
			
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('User_controller/save')?>",
                dataType : "JSON",
                data : {name:name , email:email, role:role, status:status},
                success: function(data){
                    $('[name="user_name"]').val("");
                    $('[name="user_email"]').val("");
                    $('[name="user_role"]').val("");
                    $('[name="user_status"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_user();
                }
            });
            return false;
        });

        // get data for update record
		var id     = 0;
        $('#show_data').on('click','.item_edit',function()
		{
			id = $(this).data('id');
            var name  = $(this).data('name');
            var email = $(this).data('email');
            var role  = $(this).data('role');
            var status= $(this).data('status');
            
            $('#Modal_Edit').modal('show');
            $('[name="user_name_edit"]').val(name);
            $('[name="user_email_edit"]').val(email);
            $('[name="user_role_edit"]').val(role);
            $('[name="user_status_edit"]').val(status);
        });

        // update record to database
        $('#btn_update').on('click',function()
		{
            var name   = $('#user_name_edit').val();
            var email  = $('#user_email_edit').val();
            var role   = $('#user_role_edit').val();
            var status = $('#user_status_edit').val();
			
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('user_controller/update')?>",
                dataType : "JSON",
                data : {id:id, name:name , email:email, role:role, status:status},
                success: function(data){
                    $('[name="user_name_edit"]').val("");
                    $('[name="user_email_edit"]').val("");
                    $('[name="user_role_edit"]').val("");
                    $('[name="user_status_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_user();
                }
            });
            return false;
        });

        // get data for delete record
        $('#show_data').on('click','.item_delete',function()
		{
			var delId = $(this).data('id');
            
            $('#Modal_Delete').modal('show');
            $('[name="id_delete"]').val(delId);
        });

        // delete record to database
        $('#btn_delete').on('click',function(){
            var delId = $('#id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('User_controller/deleteUser')?>",
                dataType : "JSON",
                data : {id:delId},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_user();
                }
            });
            return false;
        });
	});
</script>

