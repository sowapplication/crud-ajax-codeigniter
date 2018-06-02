/**
 * 
 */
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
        $.ajax({
            type : "POST",
            url  : "<?php echo site_url('sowmastercontroller/sowIdData')?>",
            dataType : "JSON",
            data : {id:clientIds},
            success: function(data)
			{
				$.ajax({
				type : "POST",
				url  : "<?php echo site_url('sowmastercontroller/sowIdData')?>",
				dataType : "JSON",
				data : {id:clientIds},
				success: function(data)
				{
					
				}
            }
        });
        return false;
    });
});