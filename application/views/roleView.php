<div class="content-wrapper">
	<section class="content">        
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title" style="width:100%;">Roles
						<small>List</small>
							<div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
						</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-hover dataTable" id="mydata" >
						<thead>
							<tr>
								<th>Role</th>
								<th>User Create</th>
								<th>User Update</th>
								<th>User Delete</th>
								<th>User View</th>
								<!--<th>Client Create</th>
								<th>Client Update</th>
								<th>Client Delete</th>
								<th>Client View</th>
								<th>SOW Create</th>
								<th>SOW Update</th>
								<th>SOW Delete</th>
								<th>SOW View</th>-->
								<th style="text-align: right;">Actions</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add New Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Role</label>
                            <div class="col-md-3">
                              <input type="text" name="role" id="role" class="form-control" placeholder="Enter Role">
                            </div>
                        </div>						
                        <div class="checkbox">User
                            <label>Create
								<div class="col-md-1">
								  <input type="checkbox" name="user_create" id="user_create">
								</div>
							</label>
							<label>Update
								<div class="col-md-1">
								  <input type="checkbox" name="user_update" id="user_update">
								</div>
							</label>
							<label>Delete
								<div class="col-md-1">
								  <input type="checkbox" name="user_delete" id="user_delete">
								</div>
							</label>
							<label>View
								<div class="col-md-1">
								  <input type="checkbox" name="user_view" id="user_view">
								</div>
							</label>
                        </div>
						<!--<div class="checkbox">Client
                            <label>Create
								<div class="col-md-4">
								  <input type="checkbox" name="client_create" id="client_create">
								</div>
							</label>
							<label>Update
								<div class="col-md-4">
								  <input type="checkbox" name="client_update" id="client_update">
								</div>
							</label>
							<label>Delete
								<div class="col-md-4">
								  <input type="checkbox" name="client_delete" id="client_delete">
								</div>
							</label>
							<label>View
								<div class="col-md-4">
								  <input type="checkbox" name="client_view" id="client_view">
								</div>
							</label>
                        </div>
						<div class="checkbox">SOW
                            <label>Create
								<div class="col-md-4">
								  <input type="checkbox" name="sow_create" id="sow_create">
								</div>
							</label>
							<label>Update
								<div class="col-md-4">
								  <input type="checkbox" name="sow_update" id="sow_update">
								</div>
							</label>
							<label>Delete
								<div class="col-md-4">
								  <input type="checkbox" name="sow_delete" id="sow_delete">
								</div>
							</label>
							<label>View
								<div class="col-md-4">
								  <input type="checkbox" name="sow_view" id="sow_view">
								</div>
							</label>
                        </div>-->
						<!--<div class="checkbox">Role
                            <label>Create
								<div class="col-md-4">
								  <input type="checkbox" name="role_create" id="role_create">
								</div>
							</label>
							<label>Update
								<div class="col-md-4">
								  <input type="checkbox" name="role_update" id="role_update">
								</div>
							</label>
							<label>Delete
								<div class="col-md-4">
								  <input type="checkbox" name="role_delete" id="role_delete">
								</div>
							</label>
							<label>View
								<div class="col-md-4">
								  <input type="checkbox" name="role_view" id="role_view">
								</div>
							</label>
                        </div>-->
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
				  <div class="modal-body">
					  <div class="form-group row">
						<label class="col-md-2 col-form-label">Role</label>
						<div class="col-md-3">
						  <input type="text" name="role_edit" id="role_edit" class="form-control" placeholder="Enter Role">
						</div>
					  </div>
					  <div class="checkbox">User
							<label>Create
								<div class="col-md-1">
								  <input type="checkbox" name="user_create_edit" id="user_create_edit">
								</div>
							</label>
							<label>Update
								<div class="col-md-1">
								  <input type="checkbox" name="user_update_edit" id="user_update_edit">
								</div>
							</label>
							<label>Delete
								<div class="col-md-1">
								  <input type="checkbox" name="user_delete_edit" id="user_delete_edit">
								</div>
							</label>
							<label>View
								<div class="col-md-1">
								  <input type="checkbox" name="user_view_edit" id="user_view_edit">
								</div>
							</label>
					  </div>
				  </div>
                  <div class="modal-footer">
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this record?</strong>
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
	$(document).ready(function()
	{
		show_role();	//call function show all product		
		$('#mydata').dataTable();
		
		//function show all product
		function show_role()
		{
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('role/roleData')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data)
				{
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++)
					{
		                html += '<tr>'+
								'<td>'+data[i].role+'</td>'+
		                  		'<td>'+data[i].usercreate+'</td>'+
		                        '<td>'+data[i].userupdate+'</td>'+
		                        '<td>'+data[i].userdelete+'</td>'+
		                        '<td>'+data[i].userview+'</td>'+
		                  		// '<td>'+data[i].clientcreate+'</td>'+
		                        // '<td>'+data[i].clientupdate+'</td>'+
		                        // '<td>'+data[i].clientdelete+'</td>'+
		                        // '<td>'+data[i].clientview+'</td>'+
		                  		// '<td>'+data[i].sowcreate+'</td>'+
		                        // '<td>'+data[i].sowupdate+'</td>'+
		                        // '<td>'+data[i].sowdelete+'</td>'+
		                        // '<td>'+data[i].sowview+'</td>'+
		                  		// '<td>'+data[i].rolecreate+'</td>'+
		                        // '<td>'+data[i].roleupdate+'</td>'+
		                        // '<td>'+data[i].roledelete+'</td>'+
		                        // '<td>'+data[i].roleview+'</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-role="'+data[i].role+'" data-usercreate="'+data[i].usercreate+'" data-userupdate="'+data[i].userupdate+'" data-userdelete="'+data[i].userdelete+'" data-userview="'+data[i].userview+'">Edit</a>'+
                                    '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save product
        $('#btn_save').on('click',function()
		{
			var role 		= $('#role').val();
			
			var user_create = checkResponse('#user_create');
			var user_update = checkResponse('#user_update');
			var user_delete = checkResponse('#user_delete');
			var user_view   = checkResponse('#user_view');
			
			// var client_create = checkResponse('#client_create');
			// var client_update = checkResponse('#client_update');
			// var client_delete = checkResponse('#client_delete');
			// var client_view   = checkResponse('#client_view');
			
			// var sow_create = checkResponse('#sow_create');
			// var sow_update = checkResponse('#sow_update');
			// var sow_delete = checkResponse('#sow_delete');
			// var sow_view   = checkResponse('#sow_view');
			
			// var role_create = checkResponse('#role_create');
			// var role_update = checkResponse('#role_update');
			// var role_delete = checkResponse('#role_delete');
			// var role_view   = checkResponse('#role_view');
			
			$.ajax({
                type : "POST",
                url  : "<?php echo site_url('role/save')?>",
                dataType : "JSON",
                data : {role:role, usercreate:user_create , userupdate:user_update, userdelete:user_delete,userview:user_view
				// clientcreate:client_create , clientupdate:client_update, clientdelete:client_delete,clientview:client_view,
				// sowcreate:sow_create , sowupdate:sow_update, sowdelete:sow_delete,sowview:sow_view
				},
                success: function(data){
					$('[name="role"]').val("");
                    $('[name="user_create"]').val("");
                    $('[name="user_update"]').val("");
                    $('[name="user_delete"]').val("");
                    $('[name="user_view"]').val("");
                    // $('[name="client_create"]').val("");
                    // $('[name="client_update"]').val("");
                    // $('[name="client_delete"]').val("");
                    // $('[name="client_view"]').val("");
                    // $('[name="sow_create"]').val("");
                    // $('[name="sow_update"]').val("");
                    // $('[name="sow_delete"]').val("");
                    // $('[name="sow_view"]').val("");
                    // $('[name="role_create"]').val("");
                    // $('[name="role_update"]').val("");
                    // $('[name="role_delete"]').val("");
                    // $('[name="role_view"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_role();
                }
            });
            return false;
        });
		//get data for update record
		var id = 0;
        $('#show_data').on('click','.item_edit',function()
		{
			id = $(this).data('id');
            var role = $(this).data('role');
            var usercreate = $(this).data('usercreate');
            var userupdate = $(this).data('userupdate');
            var userdelete = $(this).data('userdelete');
            var userview = $(this).data('userview');
            
            $('#Modal_Edit').modal('show');
            $('[name="role_edit"]').val(role);
            $('[name="user_create_edit"]').val(usercreate);
            $('[name="user_update_edit"]').val(userupdate);
            $('[name="user_delete_edit"]').val(userdelete);
            $('[name="user_view_edit"]').val(userview);
        });
		
		//update record to database
        $('#btn_update').on('click',function(){
			var role = $('#role_edit').val();
            var usercreate = $('#user_create_edit').val();
            var userupdate = $('#user_update_edit').val();
            var userdelete = $('#user_delete_edit').val();
            var userview   = $('#user_view_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('role/update')?>",
                dataType : "JSON",
                data : {id:id, role:role, usercreate:usercreate , userupdate:userupdate, userdelete:userdelete,userview:userview},
                success: function(data){
                    $('[name="role_edit"]').val("");
                    $('[name="user_create_edit"]').val("");
                    $('[name="user_update_edit"]').val("");
                    $('[name="user_delete_edit"]').val("");
                    $('[name="user_view_edit"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_role();
                }
            });
            return false;
        });
	});
	//get data for delete record
	$('#show_data').on('click','.item_delete',function(){
		var id = $(this).data('id');
		$('#Modal_Delete').modal('show');
		$('[name="id_delete"]').val(id);
	});

	//delete record to database
	$('#btn_delete').on('click',function(){
		var id = $('#id_delete').val();
		$.ajax({
			type : "POST",
			url  : "<?php echo site_url('role/deleteRole')?>",
			dataType : "JSON",
			data : {id:id},
			success: function(data){
				$('[name="id_delete"]').val("");
				$('#Modal_Delete').modal('hide');
				show_role();
			}
		});
		return false;
	});
	function checkResponse(classValue)
	{
		var res = "";
		if($(classValue).is(":checked"))
			res = "YES";
		else
			res = "NO";
		return res;
	}
</script>

