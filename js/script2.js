$(document).ready(function(e) {    
	//Function To Update Specialization Div With The Required Records
	function updateSpecializationDivWithRecords(page){
		$.post(page,
		{edit_form_load:'ko'}, 
		function(data){
			if(data)
				$("#just_load").html(data);
		});
	}
	//Function To Set Error Message Type
	function addMessageClass(msg_id, msg, error){
		//Set Info = 0, Success = 1 and Error = 2
		if(error === 0){
			msg_id.removeClass("alert-error");
			msg_id.removeClass("alert-success");
			msg_id.addClass("alert-info");
			msg_id.html(msg);                            
		}else if(error === 1){
			msg_id.removeClass("alert-info");				
			msg_id.removeClass("alert-error");				                            
			msg_id.addClass("alert-success");
			msg_id.html(msg);                            
		}else if(error === 2){
			msg_id.removeClass("alert-info");
			msg_id.removeClass("alert-success");
			msg_id.addClass("alert-error");
			msg_id.html(msg);                            
		}
	}
	
	//Function Onchange Of Area Of Specialization Interest Validate
	function validateSpecArea(spec_area1, spec_area2, spec_area3){
		spec_area1.change( function(e) {			
			if(spec_area1.val() === spec_area2.val() || spec_area1.val() === spec_area3.val()) {
				//alert('ddd');//$("#msg_box1").fadeOut(3500);
				addMessageClass($("#msg_box1"), "Your Three Choices Must Not Be The Same", 2);				
				$("#spec_area_btn").attr("disabled", "disabled");	
				return false;
			} else {
				addMessageClass($("#msg_box1"), "Select Your Choices Below: They Must Be Different.", 0);				
				$("#spec_area_btn").removeAttr("disabled");						
			}
		});
	}
	validateSpecArea($("#spec_area1"), $("#spec_area2"), $("#spec_area3"));
	validateSpecArea($("#spec_area2"), $("#spec_area1"), $("#spec_area3"));
	validateSpecArea($("#spec_area3"), $("#spec_area1"), $("#spec_area2"));
	
	//Add New User i.e A Student, Supervisor or an Administrator
	$("#signup_form").submit(function(e){
		$("#msg_box1").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Adding New User...</span>");
		$.post("../commons.php", $("#signup_form").serialize(), function(data){
			if(data){
				addMessageClass($("#msg_box1"), data, 1);				
			}else{
				addMessageClass($("#msg_box1"), data, 2);				
			}
		});
		return false;
	});
	
	//Function To Change Password
	function changePassword(form_id, old_paaword, new_password, page){
		$.post(page, form_id.serialize(), function(data){
			if(data === "Old Password Did Not Match" || data === "Error Updating Password"){
				addMessageClass($("#msg_box2"), data, 2);						
			}else{
				addMessageClass($("#msg_box2"), data, 1);				
			}
		});
	}
	//Student Change Password Form
	$("#change_pass_form_stu").submit(function(e){
		$("#msg_box2").html("<img src='img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Updating Password...</span>");
		changePassword($("#change_pass_form_stu"), $("#old_password_stu"), $("#new_password_stu"), "commons.php");
		return false;
	});
	//Supervisor Change Password Form
	$("#change_pass_form_sup").submit(function(e){
		$("#msg_box2").html("<img src='img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Updating Password...</span>");
		changePassword($("#change_pass_form_sup"), $("#old_password_sup"), $("#new_password_sup"), "commons.php");
		return false;
	});
	//Admin Change Password Form
	$("#change_pass_form_adm").submit(function(e){
		$("#msg_box2").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Updating Password...</span>");
		changePassword($("#change_pass_form_adm"), $("#old_password_adm"), $("#new_password_adm"), "../commons.php");
		return false;
	});
	
	//OnSubmit Of The Specialization Interest Form Of A Students.
	//Insert The Records
	$("#spec_area_form").submit(function(e){
		$("#msg_box1").html("<img src='img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Inserting Records...</span>");
		$.post("commons.php", $("#spec_area_form").serialize(), function(data){
			if(data === "Error Inserting Records"){
				addMessageClass($("#msg_box1"), data, 2);				
			}else{
				addMessageClass($("#msg_box1"), data, 1);				
			}
		});
		return false;
	});
	
	//Function To Add, Edit or Delete Specialization Record
	function specializationRecords(page, form_id, modal_id, msg){
		$.post(page, form_id.serialize(), function(data){
			if(data) {
				modal_id.modal('hide');			                            
				updateSpecializationDivWithRecords(page); 
				addMessageClass($("#msg_box1"), "Successfully "+msg, 1);				
			}else{
				modal_id.modal('hide');			                            
				addMessageClass($("#msg_box1"), "Error... Record Not "+msg, 2);
			}
		});
	}
	//Function To Update An Inline Record
	function updateInlineRecords(btn, page, msg, img){
		btn.live('click', function(){	
			var id = $(this).val();
			$.post(page,
				{td_id_edit_spec:id}, 
				function(data, status){
					var super_id = ($("#hidden_spec_id_edit"+id).val());
					$("#"+id).html(data);
					$("#select"+id).val(super_id);
					$('#select'+id).live("change", function(e) {
					$("#edit"+id).html("<img src='"+img+"img/loader2.gif' style='width:28px; height:28px'/>");
						$.post(page,
						{
							spec_sup_id:id,
							spec_id:$('#select'+id).val()
						}, 
						function(data1,status){
							addMessageClass(msg, "Record Successfully Updated", 1);				
							updateSpecializationDivWithRecords(page);
						});
					});	
			});
		});
	}
	//Add A New Specialization Record Via Modal Window Of A Supervisor	
	$("#spec_form_a").submit(function(){
		$("#msg_box1").html("<img src='img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Adding Records...</span>");
		specializationRecords("commons.php", $(this), $("#myModal_add"), "Added");
		return false;
	});
	
	//Update The Inline Specialization Record Of A Supervisor
	updateInlineRecords($(".edit_button_spec"), "commons.php", $("#msg_box1"));
	$("#spec_form_e").submit(function(){
		$("#msg_box1").html("<img src='img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Updating Records...</span>");
		specializationRecords("commons.php", $(this), $("#myModal_edit"), "Updated");
		return false;
	});
	
	//Delete The Specialization Record Via Modal Window Of A Supervisor
	$("#spec_form_d").submit(function(){
		$("#msg_box1").html("<img src='img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Deleting Records...</span>");
		specializationRecords("commons.php", $(this), $("#myModal_delete"), "Deleted");
		return false;
	});
	
	//Add A New Specialization Record Via Modal Window Of An Admin
	$("#spec_form_adm_a").submit(function(){
		$("#msg_box1").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Adding Records...</span>");
		specializationRecords("../commons.php", $(this), $("#myModal_add"), "Added");
		return false;
	});
	
	//Update The Inline Specialization Record Of An Admin
	updateInlineRecords($(".edit_button_spec"), "../commons.php", $("#msg_box1"), "../");
	
	//Delete The Specialization Record Via Modal Window Of An Admin
	$("#spec_form_adm_d").submit(function(){
		$("#msg_box1").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Deleting Records...</span>");
		specializationRecords("../commons.php", $(this), $("#myModal_delete"), "Deleted");
		return false;
	});
	
	//Validate To Check For File Size And Type
	$("#upload_file").bind('change', function(){			                    
		size = this.files[0].size;
		value = $(this).val().toLowerCase();
		extension = value.substring(value.lastIndexOf('.'));
		if($.inArray(extension, ['.csv', '.xls', '.xlsx']) === -1){
			addMessageClass($("#msg_box2"), 'Invalid File Type. Require Only Excel Files With Extensions Of .csv, .xls or xlsx', 2);
			$("#upload_form_btn").attr("disabled", "disabled");	
		} else if(size >= 1048576){
			addMessageClass($("#msg_box2"), 'File Size To Large. Requires Only Files Less Than '+(1048576/1024)+' KB', 2);
			$("#upload_form_btn").attr("disabled", "disabled");	
		} else {
			addMessageClass($("#msg_box2"), 'Upload The Excel File Containing The List Of Students In The Selected Academic Session!!!', 0);
			$("#upload_form_btn").removeAttr("disabled");
		}
	});
	
	//Function To Update The List With The Current Files
	function updateList(val, id){
		$.post("../commons.php",
			{post_val:val}, 
			function(data){
				id.html(data);
		});
	}
	
	//Upload Students Records
	$('#upload_form').on('submit', function(e) {
		$("#msg_box2").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Uploading Students Records...</span>");
		e.preventDefault(); // <-- important
		$(this).ajaxSubmit({
			//target: '#msg_box2',
			success: function(data){
				if(data === "Students List uploaded successfully")
					addMessageClass($("#msg_box2"), data, 1);		
				else
					addMessageClass($("#msg_box2"), data, 2);		
				//Update The List With The Current Files
				updateList("delete_update", $("#delete_file_name"));
				updateList("import_update", $("#academic_session_preview"));				
			}
		});
	});
	
	//Preview An Uploaded File Before import
	$("#preview_form").submit(function(e){
		$("#msg_box3").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Loading File...</span>");
		$.post("../commons.php", $(this).serialize(), function(data){
			if(data){
				$("#preview_div").html(data);
				addMessageClass($("#msg_box3"), "Find Below A Preview Of The File Contents You want to Import To The Database!!!", 1);				
				$("#hidden_import_file").val($("#academic_session_preview").val());
				$("#trigger_import_modal").removeAttr("disabled");		
			}else {
				addMessageClass($("#msg_box3"), "Error... Cannot Preview File", 2);				
				$("#trigger_import_modal").attr("disabled", "disabled");	
				$("#preview_div").html("Error... Cannot Preview File");
			}
		});
		return false;
	});
	
	//Import An Uploaded Students Records File To Database
	$("#import_file").submit(function(e){
		$("#msg_box3, #msg_box4").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Importing Records From File To Database...</span>");
		$('#import_database_btn').attr("disabled", "disabled");	
		$.post("../commons.php", $(this).serialize(), function(data){
			if(data){
				$("#myModal_import_file").modal('hide');			                            
				$("#preview_div").html(" ");
				$("#import_database_btn").removeAttr("disabled");		
				addMessageClass($("#msg_box3"), data+" Records Successfully Imported To The Database!!!", 1);				
			}else {
				$("#myModal_import_file").modal('hide');			                            
				$("#preview_div").html(" ");
				addMessageClass($("#msg_box3"), "Error... Importing From File To Database", 2);								
			}
			updateList("import_update", $("#academic_session_preview"));	
		});
		return false;
	});	
	
	//Delete An Uploaded File
	$("#delete_file_form").submit(function(e){
		$("#msg_box2").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Deleting File...</span>");
		$.post("../commons.php", $(this).serialize(), function(data){
			if(data === "File Deleted successfully"){
				$("#myModal_delete_file").modal('hide');			                            
				addMessageClass($("#msg_box2"), data, 1);				
			}else{
				$("#myModal_delete_file").modal('hide');			                            
				addMessageClass($("#msg_box2"), data, 2);				
			}			
			//Update The List With The Current Files
			updateList("delete_update", $("#delete_file_name"));
			updateList("import_update", $("#academic_session_preview"));				
		});
		return false;
	});
	
	//View Students Assigned To Supervisors
	$("#view_assigned_form").submit(function(e){
		$("#msg_box3").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Loading Records...</span>");
		$.post("../commons.php", $(this).serialize(), function(data){
			if(data){
				addMessageClass($("#msg_box3"), "<b>Find Below The List Of Students And Their Supervisors</b>", 1);				
				$("#view_result").html(data);
			}else{
				addMessageClass($("#msg_box3"), "No Result Found For This Search", 2);				
				$("#view_result").html("No Result Found For This Search");
			}			
		});
		return false;
	});
	
	//Edit Button To Edit A Supervisor Assigned To A Student An Update The Table
	$(".edit_button").live('click', function(){			
		var id = $(this).val();
		$.post("../commons.php",
			{
				programmes_id_edit:$("#programmes_id_view_edit").val(),
				td_id_edit:id
			}, 
			function(data, status){
				var super_id = ($("#hidden_sup_id"+id).val());
				$("#"+id).html(data);
				$("#select"+id).val(super_id);
				$('#select'+id).live("change", function(e) {
				$("#edit"+id).html("<img src='../img/loader2.gif' style='width:28px; height:28px'/>");
					$.post("../commons.php",
					{
						pro_std_id:id,
						sup_id:$('#select'+id).val()
					}, 
					function(data1,status){
						$.post("../commons.php",
							{
								programmes_id_view_edit:$("#programmes_id_view_edit").val(),
								session_id_view_edit:$("#session_id_view_edit").val()
							}, 
							function(data){
								if(data){
									addMessageClass($("#msg_box3"), "Find Below The List Of Students And Their Supervisors", 1);				
									$("#view_result").html(data);
								}			
						});
					});
				});	
		});
	});
	
	//On Change Of Programme_id Get The Corresponding Students And Supervisors
	$("#programmes_id_filter").live("change", function(e){
		var id = $(this).val();
		$.post("../commons.php",
			{programmes_id_filter_2:id}, 
			function(data){
				if(data) {
					$("#supervisor_id_filter").html(data);
					$.post("../commons.php",
						{programmes_id_filter_1:id}, 
						function(data1){
							$("#student_id_filter").html(data1);
					});
				}
		});
	});
	//On Change Of Supervisor Get The Corresponding Specialization Areas
	$("#supervisor_id_filter").live("change", function(e){
		var id = $(this).val();
		$.post("../commons.php",
			{supervisor_id_filter_2:id}, 
			function(data){
				if(data)
					$("#specialisation_id_filter").html(data);
		});
	});
	//Manually Assign A Student To A Supervisor
	$("#student2supervisor_form").submit(function(e){
		$("#msg_box2").html("<img src='../img/loader2.gif' style='width:28px; height:28px'/><span style='color:green; margin:15px;'> Inserting Records...</span>");
		$.post("../commons.php", $(this).serialize(), function(data){
			if(data){
				$.post("../commons.php",
					{programmes_id_filter_1:$("#programmes_id_filter").val()}, 
					function(data1){
						$("#student_id_filter").html(data1);
				});
				addMessageClass($("#msg_box2"), data, 1);				
			}else{
				addMessageClass($("#msg_box2"), "Error... Failed To Assign", 2);			
			}			
		});
		return false;
	});	
	
});