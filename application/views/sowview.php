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
									<small>List</small>
									<div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
								</h3>
							</div>
							<div class="box-body">
								<table class="table table-bordered table-hover dataTable" id="mydata">
									<thead>
										<tr>
											<th>S NO</th>
											<th>PROJECT NAME</th>
											<th>CLIENT NAME</th>

											<th>PROJECT STATUS</th>
											<th>DETAIL</th>
											<th style="text-align: center;">Actions</th>
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
							<h5 class="modal-title" id="exampleModalLabel">Add New Project</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group row">
								<label class="col-md-2 col-form-label">SOW Number</label>
								<div class="col-md-10">
									<input type="text" name="sowNumber" id="sowNumber" class="form-control" placeholder="Enter Sow Number">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-2 col-form-label">SOW Name</label>
									<div class="col-md-10">
										<input type="text" name="sowName" id="sowName" class="form-control" placeholder="Enter Sow Name">
										</div>
									</div>
									<div class="form-group row">
										<label class="col-md-2 col-form-label">Project Type</label>
										<div class="col-md-10">
											<input type="checkbox" name="projectType" class="getprojectType" id="projectType" value="ADHOC"> <label for="tbox">&nbsp;ADHOC&nbsp;</label>

												<input type="checkbox" name="projectType"  class="getprojectType" id="projectType" value="CYCLE" > <label for="tbox">&nbsp;CYCLE&nbsp;</label>
												</div> 
											</div>
											<div class="form-group row">
												<label class="col-md-2 col-form-label">Product Type</label>
												<div class="col-md-10">
													<input type="checkbox" name="producttype" id="producttype"  class="getproducttype" value="ILEC Business"> <label for="tbox">&nbsp;ILEC Business&nbsp;</label>
														<input type="checkbox" name="producttype" id="producttype" class="getproducttype" value="ILEC Residential" > <label for="tbox">&nbsp;ILEC Residential&nbsp;</label>
															<input type="checkbox" name="producttype" id="producttype" class="getproducttype" value="OB Business" > <label for="tbox">&nbsp;OB Business&nbsp;</label>
																<input type="checkbox" name="producttype" id="producttype" class="getproducttype" value="OB Residential" > <label for="tbox">&nbsp;OB Residential&nbsp;</label>
																	<input type="checkbox" name="producttype" id="producttype" class="getproducttype" value="Promowatch" > <label for="tbox">&nbsp;Promowatch&nbsp;</label>

																	</div> 
																</div>
																<div class="form-group row">
																	<label class="col-md-2 col-form-label">Expected Volume</label>
																	<div class="col-md-10">
																		<input type="text" name="expectedTotalVolume" id="expectedTotalVolume" class="form-control" placeholder="Expected Total Volume">
																		</div>
																	</div>

																	<div class="form-group row">
																		<label class="col-md-2 col-form-label">Start Date</label>
																		<div class="col-md-10">


																			<input type="date" class="form-control pull-right"  name="startDate" id="startDate" class="form-control" placeholder="Start Date">
																			</div>
																			<!-- /.input group -->
																		</div>

																		<div class="form-group row">
																			<label class="col-md-2 col-form-label">End Date</label>
																			<div class="col-md-10">
																				<input type="date" name="endDate" id="endDate" class="form-control" placeholder="End Date">
																				</div>
																			</div>
																			<div class="form-group row">
																				<label class="col-md-2 col-form-label">Assigned To</label>
																				<div class="col-md-10">
																					<input type="text" name="assignedTo" id="assignedTo" class="form-control" placeholder="Assigned To">
																					</div>
																				</div>
																				<div class="form-group row">
																					<label class="col-md-2 col-form-label">SOW Link</label>
																					<div class="col-md-10">
																						<input type=file name="sowLink" id="sowLink" class="form-control" placeholder="Sow Link">
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-md-2 col-form-label">SOW Status</label>
																						<div class="col-md-10">
																							<select class="form-control select2 select2-hidden-accessible" name="sowStatus" id="sowStatus" style="width: 100%;" tabindex="-1" aria-hidden="true">
																								<option selected=""></option>
																								<option value="Hold" >Hold</option>
																								<option value="Active" >Active</option>
																								<option value="Yet to Start" >Yet to Start</option>
																								<option value="Completed" >Completed</option>
																								<option value="Delivered" >Delivered</option>


																							</select>
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-md-2 col-form-label">Input From</label>
																						<div class="col-md-10">
																							<input type="text" name="inputFrom" id="inputFrom" class="form-control" placeholder="Input From">
																							</div>
																						</div>
																						<div class="form-group row">
																							<label class="col-md-2 col-form-label">Client Name</label>
																							<div class="col-md-10">
																								<select class="form-control select2 select2-hidden-accessible" name="clientName" id="clientName" style="width: 100%;" tabindex="-1" aria-hidden="true">
																									<option selected=""></option>

																									<option value="Comcast">Comcast</option>
																									<option value="Cox" >Cox</option>
																									<option value="Charter" >Charter</option>
																									<option value="Mediacom" >Mediacom</option>

																								</select>
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
																		<div class="modal fade" id="Modal_EDIT" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
																			<div class="modal-dialog modal-lg" role="document">
																				<div class="modal-content">
																					<div class="modal-header">Edit Project</h5>
																					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																						<span aria-hidden="true">&times;</span>
																					</button>
																				</div>
																				<div class="modal-body">
																					<div class="form-group row">
																						<label class="col-md-2 col-form-label">SOW Number</label>
																						<div class="col-md-10">
																							<input type="number" name="sowNumber_edit" id="sowNumber_edit"  class="form-control" placeholder="Enter Sow Number">

																							</div>
																						</div>

																						<div class="form-group row">
																							<label class="col-md-2 col-form-label">SOW Name</label>
																							<div class="col-md-10">
																								<input type="text" name="sowName_edit" id="sowName_edit" class="form-control" placeholder="Enter Sow Name">
																								</div>
																							</div>
																							<div class="form-group row">
																								<label class="col-md-2 col-form-label">Project Type</label>
																								<div class="col-md-10">
																									<input type="checkbox" name="projectType_edit" id="projectType_edit" class="getprojectType_edit"value="ADHOC"> <label for="tbox">&nbsp;ADHOC&nbsp;</label>

																										<input type="checkbox" name="projectType_edit" id="projectType_edit" class="getprojectType_edit"value="CYCLE" > <label for="tbox">&nbsp;CYCLE&nbsp;</label>
																										</div> 
																									</div>
																									<div class="form-group row">
																										<label class="col-md-2 col-form-label">Product Type</label>
																										<div class="col-md-10">
																											<input type="checkbox" name="ProductType_edit" id="ProductType_edit" class="getproducttype_edit" value="ILEC Business"> <label for="tbox">&nbsp;ILEC Business&nbsp;</label>
																												<input type="checkbox" name="ProductType_edit" id="ProductType_edit" class="getproducttype_edit"value="ILEC Residential" > <label for="tbox">&nbsp;ILEC Residential&nbsp;</label>
																													<input type="checkbox" name="ProductType_edit" id="ProductType_edit" class="getproducttype_edit" value="OB Business" > <label for="tbox">&nbsp;OB Business&nbsp;</label>
																														<input type="checkbox" name="ProductType_edit" id="ProductType_edit" class="getproducttype_edit" value="OB Residential" > <label for="tbox">&nbsp;OB Residential&nbsp;</label>
																															<input type="checkbox" name="ProductType_edit" id="ProductType_edit" class="getproducttype_edit" value="Promowatch" > <label for="tbox">&nbsp;Promowatch&nbsp;</label>

																															</div> 
																														</div>
																														<div class="form-group row">
																															<label class="col-md-2 col-form-label">Expected Volume</label>
																															<div class="col-md-10">
																																<input type="text" name="expectedTotalVolume_edit" id="expectedTotalVolume_edit" class="form-control" placeholder="Expected Total Volume">
																																</div>
																															</div>

																															<div class="form-group row">
																																<label class="col-md-2 col-form-label">Start Date</label>
																																<div class="col-md-10">
																																	<input type="date" name="startDate_edit" id="startDate_edit" class="form-control" placeholder="Start date">
																																	</div>
																																</div>
																																<div class="form-group row">
																																	<label class="col-md-2 col-form-label">End Date</label>
																																	<div class="col-md-10">
																																		<input type="date" name="endDate_edit" id="endDate_edit" class="form-control" placeholder="End date">
																																		</div>
																																	</div>
																																	<div class="form-group row">
																																		<label class="col-md-2 col-form-label">Assigned To</label>
																																		<div class="col-md-10">
																																			<input type="text" name="assignedTo_edit" id="assignedTo_edit" class="form-control" placeholder="Assigned To">
																																			</div>
																																		</div>
																																		<div class="form-group row">
																																			<label class="col-md-2 col-form-label">SOW Link</label>
																																			<div class="col-md-10">
																																				<input type=file name="sowLink_edit" id="sowLink_edit" class="form-control" placeholder="Sow Link">
																																				</div>
																																			</div>
																																			<div class="form-group row">
																																				<label class="col-md-2 col-form-label">SOW Status</label>
																																				<div class="col-md-10">

																																					<select class="form-control select2 select2-hidden-accessible" name="sowStatus_edit" id="sowStatus_edit" style="width: 100%;" tabindex="-1" aria-hidden="true">
																																						<option selected="Active">Active</option>
																																						<option value="Hold" >Hold</option>
																																						<option value="Yet to Start" >Yet to Start</option>
																																						<option value="Completed" >Completed</option>
																																						<option value="Delivered" >Delivered</option>


																																					</select>
																																				</div>
																																			</div>
																																			<div class="form-group row">
																																				<label class="col-md-2 col-form-label">Input From</label>
																																				<div class="col-md-10">
																																					<input type="text" name="inputFrom_edit" id="inputFrom_edit" class="form-control" placeholder="Input From">
																																					</div>
																																				</div>
																																				<div class="form-group row">
																																					<label class="col-md-2 col-form-label">Client Name</label>
																																					<div class="col-md-10">
																																						<select class="form-control select2 select2-hidden-accessible" name="clientName_edit" id="clientName_edit" style="width: 100%;" tabindex="-1" aria-hidden="true">
																																							<option selected="selected">Comcast</option>
																																							<option value="Cox" >Cox</option>
																																							<option value="Charter" >Charter</option>
																																							<option value="Mediacom" >Mediacom</option>

																																						</select>
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
			if(array_key_exists('clientIds',$this->input->post()))
			{ ?>
				var datatosend = { clientID: <?php  print trim($this->input->post('clientIds')); ?> };
																																															<?php
			}
			?>

		    $.ajax({
				type: 'POST',
		        url   : '<?php echo site_url('sowmastercontroller/sowData')?>',
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
        //Save product
        $('#btn_save').on('click',function(){
			var languages = [];  
			$('.getprojectType').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages.push($(this).val());  
                }
			}); 

			var languages1 = [];  
			$('.getproducttype').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages1.push($(this).val());  
                }  
			});
			var projectType  = languages.toString();  
			var producttype  = languages1.toString();  

			var Check 	= 0;
			var sowNumber = 0;

			Check = fieldValidation('#sowNumber','number');
			if(Check==0)
			{
				sowNumber = $('#sowNumber').val();
				Check = limitCheck('#sowNumber',sowNumber,200,"Project limit cannot exceed more than");
			}
			if(Check==0)
			   Check = fieldValidation('#sowName','string');
			if(Check==0)
			   Check = fieldValidation('#expectedTotalVolume','number');
		    if(Check==0)
               Check = fieldValidation('#startDate','string');
			if(Check==0)
              Check =  fieldValidation('#endDate','string');
		    if(Check==0)
			   Check = fieldValidation('#assignedTo','string');
		   	if(Check==0)
			   Check = fieldValidation('#sowLink','string');
			if(Check==0)
               Check = fieldValidation('#sowStatus','string');
			 if(Check==0)
               Check = fieldValidation('#inputFrom','string');
			if(Check==0)
              Check =  fieldValidation('#clientName','string');

			if(Check==0) 
			{
				var sowNumber           = $('#sowNumber').val();
				var sowName             = $('#sowName').val();
				var expectedTotalVolume = $('#expectedTotalVolume').val();
				var assignedTo          = $('#assignedTo').val();
				var sowLink             = $('#sowLink').val();
				var sowStatus           = $('#sowStatus').val();
				var inputFrom           = $('#inputFrom').val();
				var startDate           = $('#startDate').val();
				var endDate             = $('#endDate').val();
				var clientName          = $('#clientName').val();

				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('sowmastercontroller/sowSave')?>",
					dataType : "JSON",
					data : {sowNumber:sowNumber , sowName:sowName, projectType:projectType,expectedTotalVolume:expectedTotalVolume , assignedTo:assignedTo, sowLink:sowLink,sowStatus:sowStatus , inputFrom:inputFrom, clientName:clientName,producttype:producttype,endDate:endDate,startDate:startDate},
					success: function(data){
						$('[name="sowNumber"]').val("");
						$('[name="sowName"]').val("");
						$('[name="projectType"]').val("");
						$('[name="expectedTotalVolume"]').val("");
						$('[name="assignedTo"]').val("");
						$('[name="sowLink"]').val("");
						$('[name="sowStatus"]').val("");
						$('[name="inputFrom"]').val("");
						$('[name="startDate"]').val("");
						$('[name="endDate"]').val("");
						$('[name="producttype"]').val("");
						$('[name="clientName"]').val("");
						$('#Modal_Add').modal('hide');
						show_product();
					}
				});
				return false;
			}
			else if(Check==1)
			{
				alert('Field is Empty');
			}
			else if(Check==2)
			{
				alert('Enter Numbers only');
			}
			else if(Check==3)
			{
				alert('Enter Text only');
			}
			else if(Check==4)
			{

			}
			$('#Modal_Add').modal('show');
        });

		 //get data for show detail
        $('#show_data').on('click','.item_list',function()
		{
            var sowNumber 			= $(this).data('sownumber');
			var Id 					= $(this).data('id');
            var sowName 			= $(this).data('sowname');
            var projectType 		= $(this).data('projecttype');
			var expectedTotalVolume = $(this).data('expectedtotalvolume');
            var assignedTo 			= $(this).data('assignedto');
            var sowLink        		= $(this).data('sowlink');
			var sowStatus 			= $(this).data('sowstatus');
            var inputFrom 			= $(this).data('inputfrom');
            var clientName        	= $(this).data('clientname');
			var producttype        	= $(this).data('producttype');
			var startDate        	= $(this).data('startdate');
			var enddate       		= $(this).data('enddate');
            $('#Modal_show').modal('show');
            $('[name="sowNumber_show"]').val(sowNumber);
                    $('[name="sowName_show"]').val(sowName);
                    $('[name="projectType_show"]').val(projectType);
					$('[name="expectedTotalVolume_show"]').val(expectedTotalVolume);
                    $('[name="assignedTo_show"]').val(assignedTo);
                    $('[name="sowLink_show"]').val(sowLink);
					$('[name="sowStatus_show"]').val(sowStatus);
                    $('[name="inputFrom_show"]').val(inputFrom);
                    $('[name="clientName_show"]').val(clientName);
					$('[name="startDate_show"]').val(startDate);
					$('[name="endDate_show"]').val(enddate);
					$('[name="producttype_show"]').val(producttype);
        });

        //get data for update record

        $('#show_data').on('click','.item_edit',function(){
            var sowNumber 			= $(this).data('sownumber');
			var inputFrom 			= "";
			var enddate       		= "";
			var sowLink 			= "";
			var Id 					= $(this).data('id');
            var sowName 			= $(this).data('sowname');
            var projectType        	= $(this).data('projecttype');
			var expectedTotalVolume = $(this).data('expectedtotalvolume');
            var assignedTo 			= $(this).data('assignedto');
            sowLink        			= $(this).data('sowlink');
			var sowStatus 			= $(this).data('sowstatus');
            inputFrom 				= $(this).data('inputfrom');
            var clientName			= $(this).data('clientname');
			var producttype        	= $(this).data('producttype');
			var startDate        	= $(this).data('startdate');
			enddate        			= $(this).data('enddate');

            $('#Modal_EDIT').modal('show');
            $('[name="sowNumber_edit"]').val(sowNumber);
                    $('[name="sowName_edit"]').val(sowName);
                    $('[name="projectType_edit"]').val(projectType);
					$('[name="expectedTotalVolume_edit"]').val(expectedTotalVolume);
                    $('[name="assignedTo_edit"]').val(assignedTo);
                    $('[name="sowLink_edit"]').val(sowLink);
					$('[name="sowStatus_edit"]').val(sowStatus);
                    $('[name="inputFrom_edit"]').val(inputFrom);
                    $('[name="clientName_edit"]').val(clientName);
					$('[name="id_edit"]').val(Id);
					$('[name="startDate_edit"]').val(startDate);
					$('[name="endDate_edit"]').val(enddate);
					$('[name="producttype_edit"]').val(producttype);
					sowLink = "";
        });

        //update record to database
        $('#btn_update').on('click',function(){

			var languages = [];  
			$('.getprojectType_edit').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages.push($(this).val());  
                }  
			}); 

			var languages1 = [];  
			$('.getproducttype_edit').each(function(){  
                if($(this).is(":checked"))  
                {  
                     languages1.push($(this).val());  
                }  
			});		   
            var projectType  		= languages.toString();  
			var producttype   		= languages1.toString();

			var Check 	= 0;

			Check = fieldValidation('#sowNumber_edit','number');
			if(Check==0)
			   Check = limitCheck(sowNumber,200,"Project limit cannot exceed more than");
			if(Check==0)
			   Check = fieldValidation('#sowName_edit','string');
			if(Check==0)
			   Check = fieldValidation('#expectedTotalVolume_edit','number');
			if(Check==0)
			   Check = fieldValidation('#startDate_edit','string');
			if(Check==0)
			   Check =  fieldValidation('#endDate_edit','string');
			if(Check==0)
			   Check = fieldValidation('#assignedTo_edit','string');
			if(Check==0)
			   Check = fieldValidation('#sowLink_edit','string');
			if(Check==0)
			   Check = fieldValidation('#sowStatus_edit','string');
			 if(Check==0)
			   Check = fieldValidation('#inputFrom_edit','string');
			if(Check==0)
			   Check =  fieldValidation('#clientName_edit','string');
			if(Check==0) 
			{
				var sowNumber           = $('#sowNumber_edit').val();
				var sowName             = $('#sowName_edit').val();
				var expectedTotalVolume = $('#expectedTotalVolume_edit').val();
				var assignedTo          = $('#assignedTo_edit').val();
				var sowLink             = $('#sowLink_edit').val();
				var sowStatus           = $('#sowStatus_edit').val();
				var inputFrom           = $('#inputFrom_edit').val();
				var clientName          = $('#clientName_edit').val();
				var id_edit             = $('#id_edit').val();
				var startDate           = $('#startDate_edit').val();
				var endDate             = $('#endDate_edit').val();
				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('sowmastercontroller/sowUpdate')?>",
					dataType : "JSON",
					data : {sowNumber:sowNumber , sowName:sowName, projectType:projectType,expectedTotalVolume:expectedTotalVolume , assignedTo:assignedTo, sowLink:sowLink,sowStatus:sowStatus , inputFrom:inputFrom, clientName:clientName,id:id_edit,producttype:producttype,endDate:endDate,startDate:startDate},
					success: function(data){
						$('[name="sowNumber_edit"]').val("");
						$('[name="sowName_edit"]').val("");
						$('[name="projectType_edit"]').val("");
						$('[name="expectedTotalVolume_edit"]').val("");
						$('[name="assignedTo_edit"]').val("");
						$('[name="sowLink_edit"]').val("");
						$('[name="sowStatus_edit"]').val("");
						$('[name="inputFrom_edit"]').val("");
						$('[name="clientName_edit"]').val("");
						$('[name="id_edit"]').val("");
						$('[name="startDate_edit"]').val("");
						$('[name="endDate_edit"]').val("");
						$('[name="producttype_edit"]').val("");
						$('#Modal_EDIT').modal('hide');
						show_product();
					}
				});
				return false;
			}
			else if(Check==1)
			{
				alert('Field is Empty');
			}
			else if(Check==2)
			{
				alert('Enter Numbers only');
			}
			else if(Check==3)
			{
				alert('Enter Text only');
			}
			else if(Check==4)
			{

			}
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
                url  : "<?php echo site_url('sowmastercontroller/sowDelete')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;

		});
		
		$('.more_detail').on('click',function()
		{
            var id = $(this).data('id');			
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('sowmastercontroller/sowMoreData')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data)
				{
                    $('[name="id"]').val("");
                    show_product();
                }
            });
        });
		
		/* //cycle
        $('.cycle_flow').on('click',function()
		{
             var clientName = $(this).data('clientname');
			 console.log("clientName...." + clientName);
			 return;

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('sowmastercontroller/cycleData')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data)
				{
                    $('[name="id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;

		}); */
		function limitCheck(field,inputVol,stdVol,stmt)
		{
			var isCheck 	= 0;
			if(inputVol > stdVol)
			{
				isCheck 	= 4;
				alert(stmt+" " + stdVol);
				$(field).addClass("requiredClass");
			}
			return isCheck;
		}
		function fieldValidation(field,type) 
		{
			var fieldName 	= $(field).val();

			var isCheck 	= 0;
			if (fieldName == "") 
			{
				$(field).addClass("requiredClass");
				isCheck = 1;
			}
			else 
			{ 
				if (type == "number")
				{
					if(allnumeric(fieldName)) 
					{
						$(field).removeClass("requiredClass");
					}
					else
					{
						$(field).addClass("requiredClass");
						isCheck = 2;
					}
				}
				else if (type == "string")
				{
					if(!allnumeric(fieldName)) 
					{
						$(field).removeClass("requiredClass");
					}
					else
					{
						$(field).addClass("requiredClass");
						isCheck = 3;
					}
				}
			}
			return isCheck;
		}
		function allnumeric(inputtxt)
		{
			 var numbers = /^[0-9]+$/;
			 if(inputtxt.match(numbers))
			 {
				return true;
			 }
			 else
			 {
				return false;
			 }
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


																																																	