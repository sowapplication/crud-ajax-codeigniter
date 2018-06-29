<!-- bootstrap datepicker -->
<link rel="stylesheet" href="<?php echo base_url().'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'?>">

		<div class="content-wrapper">
			<section class="content">        
				<!-- Page Heading -->
				<div class="row">
					<div class="col-lg-12">
						<div class="box">
							<div class="box-header">
								<h3 class="box-title" style="width:100%;">Project
									<small>Information</small>
								</h3>
							</div>
							<div class="box-body">
								<table class="table table-bordered table-hover dataTable" id="mydata">
									<thead>
										<tr>
											<th>S NO</th>
											<th>PROJECT NAME</th>
											<th>CLIENT NAME</th>
											<th>SOW Number</th>
											<th>Project Type</th>
											<th>Product Type</th>
											<th>Expected Volume</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Assigned To</th>
											<th>SOW Link</th>
											<th>Input From</th>
											<th>PROJECT STATUS</th>
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

		<!--END MODAL ADD-->

		<!-- MODAL EDIT -->
																	<!--END MODAL EDIT-->
																	<!-- MODAL show -->
																	<form>
																		<div class="modal fade" id="Modal_show" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																			<div class="modal-dialog modal-lg" role="document">
																				<div class="modal-content">
																					<div class="modal-header">
																						<h5 class="modal-title" id="exampleModalLabel">Project Information</h5>
																						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																							<span aria-hidden="true">&times;</span>
																						</button>
																					</div>
																					<div class="modal-body">
																						<div class="form-group row">
																							<label class="col-md-2 col-form-label">SOW Number</label>
																							<div class="col-md-10">
																								<input type="text" name="sowNumber_show" id="sowNumber_show" class="form-control" placeholder="" readonly>
																								</div>
																							</div>

																							<div class="form-group row">
																								<label class="col-md-2 col-form-label">SOW Name</label>
																								<div class="col-md-10">
																									<input type="text" name="sowName_show" id="sowName_show" class="form-control" placeholder="" readonly>
																									</div>
																								</div>
																								<div class="form-group row">
																									<label class="col-md-2 col-form-label">Project Type</label>
																									<div class="col-md-10">
																										<input type="text" name="projectType_show" id="projectType_show" class="form-control" placeholder="" readonly>
																										</div>
																									</div>

																									<div class="form-group row">
																										<label class="col-md-2 col-form-label">Product Type</label>
																										<div class="col-md-10">
																											<input type="text" name="producttype_show" id="producttype_show" class="form-control" placeholder="" readonly>
																											</div>
																										</div>

																										<div class="form-group row">
																											<label class="col-md-2 col-form-label">Expected Volume</label>
																											<div class="col-md-10">
																												<input type="text" name="expectedTotalVolume_show" id="expectedTotalVolume_show" class="form-control" placeholder="" readonly>
																												</div>
																											</div>


																											<div class="form-group row">
																												<label class="col-md-2 col-form-label">Start Date</label>
																												<div class="col-md-10">
																													<input type="text" name="startDate_show" id="startDate_show" class="form-control" placeholder="" readonly>
																													</div>
																												</div>
																												<div class="form-group row">
																													<label class="col-md-2 col-form-label">End Date</label>
																													<div class="col-md-10">
																														<input type="text" name="endDate_show" id="endDate_show" class="form-control" placeholder="" readonly>
																														</div>
																													</div>
																													<div class="form-group row">
																														<label class="col-md-2 col-form-label">Assigned To</label>
																														<div class="col-md-10">
																															<input type="text" name="assignedTo_show" id="assignedTo_show" class="form-control" placeholder="" readonly>
																															</div>
																														</div>
																														<div class="form-group row">
																															<label class="col-md-2 col-form-label">SOW Link</label>
																															<div class="col-md-10">
																																<input type="text" name="sowLink_show" id="sowLink_show" class="form-control" placeholder="" readonly>
																																</div>
																															</div>
																															<div class="form-group row">
																																<label class="col-md-2 col-form-label">SOW Status</label>
																																<div class="col-md-10">
																																	<input type="text" name="sowStatus_show" id="sowStatus_show" class="form-control" placeholder="" readonly>
																																	</div>
																																</div>
																																<div class="form-group row">
																																	<label class="col-md-2 col-form-label">Input From</label>
																																	<div class="col-md-10">
																																		<input type="text" name="inputFrom_show" id="inputFrom_show" class="form-control" placeholder="" readonly>
																																		</div>
																																	</div>
																																	<div class="form-group row">
																																		<label class="col-md-2 col-form-label">Client Name</label>
																																		<div class="col-md-10">
																																			<input type="text" name="clientName_show" id="clientName_show" class="form-control" placeholder="" readonly>
																																			</div>
																																		</div>
																																	</div>
																																	<div class="modal-footer">
																																		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
																																		<!--<button type="button" class="btn btn-info btn-mg cycle_flow" onclick = "getClientDetail()" data-clientName="<?php  print trim($this->input->post('clientname')); ?>"><span class="glyphicon glyphicon-plus-sign"></span>Add Cycle</button>-->
																																	</div>
																																</div>
																															</div>
																														</div>
																													</form>
																													<!--END MODAL show-->
																													<!--MODAL DELETE-->
																													<form>
																														<div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																															<div class="modal-dialog" role="document">
																																<div class="modal-content">
																																	<div class="modal-header">
																																		<h5 class="modal-title" id="exampleModalLabel">Delete SOW</h5>
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
																														<script type="text/javascript">
	$(document).ready(function()
	{
		show_product();	//call function show all product		
		$('#mydata').dataTable();

		//function show all product
		function show_product()
		{
			var datatosend = {  };
																															<?php 
			if(array_key_exists('id',$this->input->post()))
			{ ?>
				var datatosend = { id: <?php  print trim($this->input->post('id')); ?> };
																															<?php
			}
			?>

		    $.ajax({
				type: 'POST',
		        url   : '<?php echo site_url('sowmastercontroller/sowMoreView')?>',
		        async : false,
				data	: datatosend,
				dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++)
					{
		                html += '<tr>'+
		                  		'<td>'+data[i].Id+'</td>'+
		                        '<td>'+data[i].sowName+'</td>'+
		                        '<td>'+data[i].clientName+'</td>'+
								'<td>'+data[i].sowStatus+'</td>'+
								'<td>'+
                                      '<a href="javascript:void(0);" class="btn btn-info btn-sm more_detail" data-id="'+data[i].Id+'"> More details </a>'
									 +' '+
									'</td>'+
									'<td  >'+
                                     '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].Id+'"data-sownumber="'+data[i].sowNumber+'" data-sowname="'+data[i].sowName+'" data-projecttype="'+data[i].projectType+'"  data-expectedtotalvolume="'+data[i].expectedTotalVolume+'"     data-assignedto="'+data[i].assignedTo+'"  data-sowlink="'+data[i].sowLink+'"  data-sowstatus="'+data[i].sowStatus+'" data-inputfrom="'+data[i].inputFrom+'" data-clientName="'+data[i].clientName+'" data-startdate="'+data[i].startDate+'" data-enddate="'+data[i].endDate+'" data-producttype="'+data[i].producttype+'" >Edit</a>'
									+' '+
                                     '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].Id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }
		    });
		}
	});

																																</script>
																																<style>
.requiredClass {
	border:1px solid #F00!important;
}
																																</style>


																																<!-- bootstrap datepicker -->
																																<script src="<?php echo base_url().'bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'?>"></script>
																																	<!--END MODAL DELETE-->


																																	