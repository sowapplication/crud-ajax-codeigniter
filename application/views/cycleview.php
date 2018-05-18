<!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css'?>">
<div class="content-wrapper">
	<section class="content">        
		<!-- Page Heading -->
		<div class="row">
			<div class="col-lg-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title" style="width:100%;">Cycle
						<small>List</small>
							<div class="pull-right"><a href="javascript:void(0);" class="btn btn-primary" data-toggle="modal" data-target="#Modal_Add"><span class="fa fa-plus"></span> Add New</a></div>
						</h3>
					</div>
					<div class="box-body">
						<table class="table table-bordered table-hover dataTable" id="mydata">
							<thead>
								<tr>
								    <th>S NO</th>
									<th>CLIENT NAME</th>
									<th>PROJECT NAME</th>
									<th>CYCLE FLAG</th>
									<th>VOLUME</th>
									<th>START DATE</th>
									<th>DUE DATE</th>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add New Cycle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Cycle Flag</label>
						<div class="col-md-10">
							<select class="form-control select2 select2-hidden-accessible" name="cycleFlag" id="cycleFlag" style="width: 100%;" tabindex="-1" aria-hidden="true">
								<option selected=""></option>
								<option value="ADHOC">ADHOC</option>
								<option value="REGULAR">REGULAR</option>                
							</select>
						</div>
                    </div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Cycle Volume</label>
						<div class="col-md-10">
							<input type="text" class="form-control pull-right"  name="volume" id="volume" class="form-control" placeholder="Enter Cycle Volume">
						</div>
					</div>
				    <div class="form-group row">
						<label class="col-md-2 col-form-label">Start Date</label>
						<div class="col-md-10">
							<input type="date" class="form-control pull-right"  name="startDate" id="startDate" class="form-control" placeholder="Start Date">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Due Date</label>
						<div class="col-md-10">
							<input type="date" class="form-control pull-right"  name="dueDate" id="dueDate" class="form-control" placeholder="Due Date">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">SOW Name</label>
						<div class="col-md-10">
						  <input type="text" name="sowName_show" id="sowName_show" class="form-control" readOnly>
						</div>
                    </div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Client Name</label>
						<div class="col-md-10">
						  <input type="text" name="clientName_show" id="clientName_show" class="form-control" readOnly>
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
                  <div class="modal-header">Edit Cycle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Cycle Volume</label>
						<div class="col-md-10">
							<input type="text" class="form-control pull-right"  name="volume_edit" id="volume_edit" class="form-control" placeholder="Enter Cycle Volume">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Cycle Flag</label>
						<div class="col-md-10">
							<select class="form-control select2 select2-hidden-accessible" name="cycleFlag_edit" id="cycleFlag_edit" style="width: 100%;" tabindex="-1" aria-hidden="true">
								<option selected=""></option>
								<option value="ADHOC">ADHOC</option>
								<option value="REGULAR">REGULAR</option>                
							</select>
						</div>
                    </div>	
				    <div class="form-group row">
						<label class="col-md-2 col-form-label">Start Date</label>
						<div class="col-md-10">
							<input type="date" class="form-control pull-right"  name="startDate_edit" id="startDate_edit" class="form-control" placeholder="Start Date">
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-2 col-form-label">Due Date</label>
						<div class="col-md-10">
							<input type="date" class="form-control pull-right"  name="dueDate_edit" id="dueDate_edit" class="form-control" placeholder="Due Date">
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
		<!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Cycle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong>Are you sure to delete this Cycle?</strong>
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
		<!--MODAL DELETE-->
<script type="text/javascript">
$(document).ready(function(){
		show_product();	//call function show all product		
		$('#mydata').dataTable();
		//function show all product
		function show_product()
		{
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('sowmastercontroller/cycleData')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++)
					{
		                html += '<tr>'+
		                  		'<td>'+data[i].id+'</td>'+
		                        '<td>'+data[i].clientid+'</td>'+
		                        '<td>'+data[i].sowname+'</td>'+
								'<td>'+data[i].cycleflag+'</td>'+
								'<td>'+data[i].volume+'</td>'+
								'<td>'+data[i].startdate+'</td>'+
								'<td>'+data[i].duedate+'</td>'+
								'<td>'+
                                      '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-id="'+data[i].id+'" data-clientid="'+data[i].clientid+'" data-sowname="'+data[i].sowname+'" data-cycleflag="'+data[i].cycleflag+'"  data-volume="'+data[i].volume+'"     data-startdate="'+data[i].startdate+'"  data-duedate="'+data[i].duedate+'" >Edit</a>'
									 +' '+
									'</td>'
									+' '+
                                     '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-id="'+data[i].id+'">Delete</a>'+
                                '</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }
		    });
		}
        //Save product
        $('#btn_save').on('click',function(){
			var Check 	= 0;
			var volume  = 0;
			Check = fieldValidation('#volume','number');
			if(Check==0)
			{
				volume = $('#volume').val();
				Check = limitCheck('#volume',volume,100000,"Cycle volume should not exceed more than");
			}
			if(Check==0)
			   Check = fieldValidation('#cycleFlag','string');
		    if(Check==0)
               Check = fieldValidation('#startDate','string');
			if(Check==0)
              Check =  fieldValidation('#dueDate','string');
			
			if(Check==0) 
			{
				volume           		= $('#volume').val();
				var cycleFlag           = $('#cycleFlag').val();
				var startDate 			= $('#startDate').val();
				var dueDate          	= $('#dueDate').val();
			   
				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('sowmastercontroller/cycleSave')?>",
					dataType : "JSON",
					data : {volume:volume,cycleflag:cycleFlag,startdate:startDate,duedate:dueDate},
					success: function(data){
						$('[name="volume"]').val("");
						$('[name="cycleFlag"]').val("");
						$('[name="startDate"]').val("");
						$('[name="dueDate"]').val("");
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
		
        //get data for update record
		
        $('#show_data').on('click','.item_edit',function()
		{
            var volume 			= $(this).data('volume');
			var cycleFlag 		= $(this).data('cycleflag');
			var startDate 		= $(this).data('startdate');
			var dueDate 		= $(this).data('duedate');
          		
            $('#Modal_EDIT').modal('show');
				$('[name="volume_edit"]').val(volume);
				$('[name="cycleFlag_edit"]').val(cycleFlag);
				$('[name="startDate_edit"]').val(startDate);
				$('[name="dueDate_edit"]').val(dueDate);
        });

        //update record to database
        $('#btn_update').on('click',function(){
			
			var Check 	= 0;
			var volume  = 0;
			
			Check = fieldValidation('#volume_edit','number');
			
			if(Check==0)
			{
				volume = $('#volume_edit').val();
				Check = limitCheck('#volume_edit',volume,100000,"Cycle volume should not exceed more than");
			}
			if(Check==0)
			   Check = fieldValidation('#cycleFlag_edit','string');
		    if(Check==0)
               Check = fieldValidation('#startDate_edit','string');
			if(Check==0)
              Check =  fieldValidation('#dueDate_edit','string');
		
			if(Check==0) 
			{
				volume           	= $('#volume_edit').val();
				var cycleFlag       = $('#cycleFlag_edit').val();
				var startDate 	  	= $('#startDate_edit').val();
				var dueDate         = $('#dueDate_edit').val();
				var id_edit         = $('#id_edit').val();
				
				console.log("id_edit...." + id_edit);
				console.log("volume...." + volume);
				console.log("cycleFlag...." + cycleFlag);
				console.log("startDate...." + startDate);
				console.log("dueDate...." + dueDate);
				
				$.ajax({
					type : "POST",
					url  : "<?php echo site_url('sowmastercontroller/cycleUpdate')?>",
					dataType : "JSON",
					data : {volume:volume , cycleflag:cycleFlag, startdate:startDate,duedate:dueDate,id:id_edit},
					success: function(data){
						$('[name="volume_edit"]').val("");
						$('[name="cycleFlag_edit"]').val("");
						$('[name="startDate_edit"]').val("");
						$('[name="dueDate_edit"]').val("");
						$('[name="id_edit"]').val("");
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
                url  : "<?php echo site_url('sowmastercontroller/cycleDelete')?>",
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


