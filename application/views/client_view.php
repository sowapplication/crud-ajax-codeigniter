<div class="content-wrapper">
	<section class="content">
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title" style="width:100%;">Client
						<small>List</small>
							<div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
						</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-hover dataTable" id="mydata">
							<thead>
								<tr>
									<th>Client Id</th>
									<th>Client Name</th>
									<th>Legal Name</th>
									<th>Status</th>
									<th style="text-align: right;">Actions</th>
									<th style="text-align: right;">Edit</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add New Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Client Name</label>
                            <div class="col-md-10">
                              <input type="text" name="client_name" id="client_name" class="form-control" placeholder="Client Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Legal Name</label>
                            <div class="col-md-10">
                              <input type="text" name="legal_name" id="legal_name" class="form-control" placeholder="Legal Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="status" id="status" class="form-control" placeholder="Status">
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
                    <h5 class="modal-title" id="exampleModalLabel">Edit Client</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Client Name</label>
                            <div class="col-md-10">
                              <input type="text" name="client_name_edit" id="client_name_edit" class="form-control" placeholder="Client Name" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Legal Name</label>
                            <div class="col-md-10">
                              <input type="text" name="legal_name_edit" id="legal_name_edit" class="form-control" placeholder="Legal Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                              <input type="text" name="status_edit" id="status_edit" class="form-control" placeholder="Status">
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer">
					 <input type="hidden" name="id_edit" id="id_edit" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update" class="btn btn-primary">Update</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL  EDIT-->
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script type="text/javascript">
	$(document).ready(function(){
		show_client();	//call function show all client		
		$('#mydata').dataTable();
		
		//function show all client
		function show_client()
		{
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('client/client_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].clientId+'</td>'+
		                  		'<td>'+data[i].clientName+'</td>'+
		                        '<td>'+data[i].clientLegalName+'</td>'+
		                        '<td>'+data[i].isActive+'</td>'+
								'<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_postid" data-clientid="'+data[i].clientId+'" >View SOW</a>'+
                                '</td>'+
		                        '<td style="text-align:right;">'+
                                    '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-client_id="'+data[i].clientId+'" data-client_name="'+data[i].clientName+'" data-legal_name="'+data[i].clientLegalName+'" data-status="'+data[i].isActive+'">Edit</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

        //Save client
        $('#btn_save').on('click',function(){
            var client_name 	= $('#client_name').val();
            var legal_name 		= $('#legal_name').val();
            var status        	= $('#status').val();
			
			console.log("client_name...." + client_name);
			
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('client/saveClient')?>",
                dataType : "JSON",
                data : {client_name:client_name , legal_name:legal_name, status:status},
                success: function(data){
                    $('[name="client_name"]').val("");
                    $('[name="legal_name"]').val("");
                    $('[name="status"]').val("");
                    $('#Modal_Add').modal('hide');
                    show_client();
                }
            });
            return false;
        });

        //get data for update record
        $('#show_data').on('click','.item_edit',function(){
            var client_name 	= $(this).data('client_name');
            var legal_name 		= $(this).data('legal_name');
            var status        	= $(this).data('status');
			var client_id       = $(this).data('client_id');
            
            $('#Modal_Edit').modal('show');
            $('[name="client_name_edit"]').val(client_name);
            $('[name="legal_name_edit"]').val(legal_name);
            $('[name="status_edit"]').val(status);
			$('[name="id_edit"]').val(client_id);
        });

        //update record to database
        $('#btn_update').on('click',function(){
            var client_name 	= $('#client_name_edit').val();
            var legal_name 		= $('#legal_name_edit').val();
            var status          = $('#status_edit').val();
            var client_id       = $('#id_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('client/updateClient')?>",
                dataType : "JSON",
                data : {client_id:client_id , client_name:client_name , legal_name:legal_name, status:status},
                success: function(data){
                    $('[name="client_name_edit"]').val("");
                    $('[name="legal_name_edit"]').val("");
                    $('[name="status_edit"]').val("");
                    $('[name="client_id"]').val("");
                    $('#Modal_Edit').modal('hide');
                    show_client();
                }
            });
            return false;
 
        });
		
		//update record to database
        $('#show_data').on('click','.item_postid', function()
		{
            var clientIds 	= $(this).data('clientid');
			
			 $('<form action="<?php echo site_url('sowmastercontroller')?>" method="post" name=""><input type="hidden" name="clientIds" value="'+clientIds+'"></form>').appendTo('body').submit();
           /*  $.ajax({ zakir
                type : "POST",
                url  : "<?php echo site_url('sowmastercontroller')?>",
                dataType : "JSON",
                data : {id:clientIds},
                success: function(data)
				{
					
                }
            });
            return false; */
        });
	});
</script>
