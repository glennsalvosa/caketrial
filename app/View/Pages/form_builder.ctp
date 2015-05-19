<?php $this->layout = "bootstrap"; ?>
  
<style>
	.draggable { 
		min-height: 75px; 
		float: left;
		cursor: pointer;
		padding: 5px 10px;
		border-radius: 8px;
		background: #fff;
		margin-bottom: 5px;
	}
	
	.draggable:hover {
		box-shadow: 0px 0px 10px #ccc;
	}
	
	#droppable { 
		margin-bottom: 10px;
		float: left;
		width: 100%;
		min-height: 200px;
	}
	
	.droppable-hover { box-shadow: 0px 0px 10px #ccc; }
	
	#sortable { 
		list-style-type: none; 
		margin: 0; 
		padding: 0; 
		width: 100%; 
		float:left;
	}
	
	/* #sortable li span { position: absolute; margin-left: -1.3em; } */
	
	.droppedDraggable { position: relative; }
	.sortableActionHolder { position: absolute; top: 0; right: 15px; }
	.sortableActionHolder .glyphicon {
		margin-right: 5px;
		font-size: 12px;
		cursor: pointer;
	}

	.droppedElementSetting {
		position: absolute;
		background: #fff;
		z-index: 9;
		border-radius: 8px;
		box-shadow: -2px 0px 10px #eee;
		border: solid 1px #ddd;
		top: -15px;
		right: -230px;
		width: 220px;
	}
	
	.droppedElementSettingBody {
		padding: 15px 15px 0px 15px;
	}
	
	.droppedElementSetting { display:none; }
	
	.droppedDraggable {
		cursor: move;
	}
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		Dashboard
		<small>Control panel</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Dashboard</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">
	
	<div class="row">
		<div class="col-md-7">
			<div class="box box-primary col-md-12">
				<div class="box-header">
					<h3 class="box-title">Drag form elements here</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				
				<form role="form">
					<div style="min-height: 200px;" id="droppable" class="box-body">
						<ul id="sortable"></ul>
					</div><!-- /.box-body -->

					<div class="box-footer col-md-12">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
		
		<div class="col-md-5">			
			<div class="box box-danger col-md-12">
				<div class="box-header">
					<h3 class="box-title">Drag form elements here</h3>
				</div><!-- /.box-header -->
				<!-- form start -->
				
				<div id="draggableElements" class="box-body col-md-12">					
					
					<div id="textInput">
						<div class="ui-widget-content draggable col-md-12" data-holder="textInput">
							<div class="form-group">
							  <label id="inputTypeText_toReplace">Text Input</label>
							  <input type="text" class="form-control" placeholder="placeholder" id="inputTypeText_toReplace">
							</div>
						</div>
					</div>
				
					<div id="selectInput">
						<div class="ui-widget-content draggable col-md-12" data-holder="selectInput">
							<div class="form-group">
								<label id="inputTypeSelect_toReplace">Select Input</label>
								<select class="form-control" id="inputTypeSelect_toReplace">
									<option>Select Option</option>
									<option>Option 1</option>
									<option>Option 2</option>
									<option>Option 3</option>
								</select>
							</div>
						</div>
					</div>
					
					<div id="textareaInput">
						<div class="ui-widget-content draggable col-md-12" data-holder="textareaInput">
							<div class="form-group">
								<label id="inputTypeTextarea_toReplace">Textarea Input</label>
								<textarea id="inputTypeTextarea_toReplace" class="form-control" rows="3" placeholder="placeholder"></textarea>
							</div>
						</div>
					</div>
					
					<div id="dynamicTextGroup">
						<div class="ui-widget-content draggable col-md-12" data-holder="dynamicTextGroup">
							<div class="form-group">
								<label id="inputTypeTextGroup_toReplace">Dynamic Text Group</label>
								<input id="inputTypeTextGroup_toReplace" type="text" class="form-control" placeholder="placeholder">
								
								<div class="col-md-12" id="appendTextGroup_toReplace">
									
									<div class="col-md-12" id="appendTextGroupHolder_toReplace">
										<div class="form-group textGroup" id="inputTypeTextGroupChild_toReplace">
											<input type="text" class="form-control" placeholder="placeholder" id="inputTypeTextGroupChild_toReplace">
											<input type="button" class="inputTypeTextGroupChildRemove btn btn-danger" value="Remove" id="inputTypeTextGroupChild_toReplace">
										</div>
										
										<div class="form-group textGroup" id="inputTypeTextGroupChild_2toReplace">
											<input type="text" class="form-control" placeholder="placeholder" id="inputTypeTextGroupChild_2toReplace">
											<input type="button" class="inputTypeTextGroupChildRemove btn btn-danger" value="Remove" id="inputTypeTextGroupChild_2toReplace">
										</div>
									</div>
									
									<div class="form-group textGroup">
										<input type="button" class="appendTextGroupAddMore btn btn-info" value="Add More" id="appendTextGroupAddMore_toReplace">
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div id="fileInput">
						<div class="ui-widget-content draggable col-md-12" data-holder="fileInput">
							<div class="form-group">
								<label id="inputTypeFile_toReplace">File Input</label>
								<input type="file" id="inputTypeFile_toReplace">
							</div>
						</div>
					</div>
					
					<div id="checkBoxVertical">
						<div class="ui-widget-content draggable col-md-12" data-holder="checkBoxVertical">
							
							<div class="form-group no-setting" id="checkBoxGroupVerticalHolder_toReplace">
								<label>Checkbox Group - Vertical</label>
								
								<div class="left col-md-12" id="appendCheckVerticalAddMoreHolder_toReplace">
									<div class="checkbox" id="checkBoxGroupVerticalInd_toReplace">
										<label id="checkBoxGroupVertical_toReplace">
											<a id="toggleElementRemove_toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="checkbox" class="formCheck" id="checkBoxGroupVertical_toReplace">
											<span>Checkbox 1</span>
										</label>
									</div>

									<div class="checkbox" id="checkBoxGroupVerticalInd_2toReplace">
										<label id="checkBoxGroupVertical_2toReplace">
											<a id="toggleElementRemove_2toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_2toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="checkbox" class="formCheck" id="checkBoxGroupVertical_2toReplace">
											<span>Checkbox 2</span>
										</label>
									</div>
								</div>
							</div>
							
							<div class="form-group checkGroupVertical">
								<input type="button" class="appendCheckVerticalAddMore btn btn-info" value="Add More" id="appendCheckVerticalAddMore_toReplace">
							</div>
						</div>
					</div>
					
					<div id="checkBoxHorizontal">
						<div class="ui-widget-content draggable col-md-12" data-holder="checkBoxHorizontal">
							<div class="form-group no-setting" id="checkBoxGroupHorizontalHolder_toReplace">
								
								<label>Checkbox Group - Horizontal</label>
								
								<div class="checkbox left col-md-12 left" id="appendCheckHorizontalAddMoreHolder_toReplace">
									<div class="groupHorizontal" id="checkBoxGroupHorizontalInd_toReplace">
										<label id="checkBoxGroupHorizontal_toReplace">
											<a id="toggleElementRemove_toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="checkbox" class="formCheck" id="checkBoxGroupHorizontal_toReplace">
											<span>Checkbox 1</span>
										</label>
									</div>
									
									<div class="groupHorizontal" id="checkBoxGroupHorizontalInd_2toReplace">
										<label id="checkBoxGroupHorizontal_2toReplace">
											<a id="toggleElementRemove_2toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_2toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="checkbox" class="formCheck" id="checkBoxGroupHorizontal_2toReplace">
											<span>Checkbox 2</span>
										</label>
									</div>
								</div>
							</div>
							
							<p>&nbsp;</p>
							
							<div class="form-group checkGroupHorizontal">
								<input type="button" class="appendCheckHorizontalAddMore btn btn-info" value="Add More" id="appendCheckHorizontalAddMore_toReplace">
							</div>
						</div>
					</div>
					
					<div id="optionButtonVertical">
						<div class="ui-widget-content draggable col-md-12" data-holder="optionButtonVertical">
							<div class="form-group no-setting" id="radioGroupVerticalHolder_toReplace">
								<label>Option Button Group - Vertical</label>
								
								<div class="col-md-12 left" id="appendRadioVerticalAddMoreHolder_toReplace">
									<div class="checkbox" id="radioGroupVerticalInd_toReplace">
										<label id="radioGroupVertical_toReplace">
											<a id="toggleElementRemove_toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="radio" id="radioGroupVertical_toReplace">
											<span>Option Button 1</span>
										</label>
									</div>

									<div class="checkbox" id="radioGroupVerticalInd_2toReplace">
										<label id="radioGroupVertical_2toReplace">
											<a id="toggleElementRemove_2toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_2toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="radio" id="radioGroupVertical_2toReplace">
											<span>Option Button 2</span>
										</label>
									</div>
								</div>
							</div>
							
							
							<div class="form-group radioGroupVertical">
								<input type="button" class="appendRadioVerticalAddMore btn btn-info" value="Add More" id="appendRadioVerticalAddMore_toReplace">
							</div>
						</div>
					</div>
					
					<div id="optionButtonHorizontal">
						<div class="ui-widget-content draggable col-md-12" data-holder="optionButtonHorizontal">
							<div class="form-group no-setting" id="radioGroupHorizontalHolder_toReplace">
								<label>Option Button Group - Horizontal</label>
								
								<div class="left col-md-12 checkbox" id="appendRadioHorizontalAddMoreHolder_toReplace">
									<div class="groupHorizontal" id="radioGroupHorizontalInd_toReplace">
										<label id="radioGroupHorizontal_toReplace">
											<a id="toggleElementRemove_toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="radio" id="radioGroupHorizontal_toReplace">
											<span>Option Button 1</span>
										</label>
									</div>
									
									<div class="groupHorizontal" id="radioGroupHorizontalInd_2toReplace">
										<label id="radioGroupHorizontal_2toReplace">
											<a id="toggleElementRemove_2toReplace" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a>
											<a id="toggleElementSetting_2toReplace" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a>
											<input type="radio" id="radioGroupHorizontal_2toReplace">
											<span>Option Button 2</span>
										</label>
									</div>
								</div>
								
							</div>
							
							<p>&nbsp;</p>
							
							<div class="form-group radioGroupHorizontal">
								<input type="button" class="appendRadioHorizontalAddMore btn btn-info" value="Add More" id="appendRadioHorizontalAddMore_toReplace">
							</div>
						</div>
					</div>
				</div><!-- /.box-body -->
			</div>
		</div>
		
	</div>
	
</section>

<div class="hidden">
	<div id="inputOptionsRegular" class="droppedElementSetting">	
		<h3 class="popover-title">Dropped Element Settings</h3>
		
		<div class="droppedElementSettingBody">	
			<div class="form-group no-setting">
			  <label>Input Name</label>
			  <input type="text" class="form-control" placeholder="placeholder" id="inputName_toReplace">
			</div>
			<div class="form-group">
			  <label>Input Label</label>
			  <input type="text" class="form-control" placeholder="placeholder" id="inputLabel_toReplace">
			</div>
			<div class="form-group no-setting">
			  <label>Input Placeholder</label>
			  <input type="text" class="form-control" placeholder="placeholder" id="inputPlaceholder_toReplace">
			</div>
			<div class="form-group">
			  <label>
				<input id="inputRequired_toReplace" type="checkbox">&nbsp;Required?
			  </label>
			</div>
		</div>
		
		<div class="box-footer col-md-12">
			<input id="droppedSettingSave_toReplace" type="button" class="btn btn-info droppedSettingSave" value="Save">
			<input id="droppedSettingClose_toReplace" type="button" class="btn btn-danger droppedSettingClose" value="Close">
		</div>
	</div>

	<div id="inputOptionsSelect" class="droppedElementSetting"></div>
	<div id="inputOptionsCheck" class="droppedElementSetting"></div>
	<div id="inputOptionsRadio" class="droppedElementSetting"></div>
</div>


<script>
  $(function() {
	
	$( ".draggable" ).draggable({ revert: "invalid" });
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
    $( "#droppable" ).droppable({
		activeClass: "droppable-active",
		hoverClass: "droppable-hover",
		drop: function( event, ui ) {			
			if(!ui.draggable.hasClass('droppedDraggable')) {
				
				var generated_id = makeid();
				var draggable_content = ui.draggable.html();
				var draggable_data_holder = ui.draggable.attr('data-holder');
				draggable_content = draggable_content.replace(/toReplace/g, generated_id);
				
				// duplicate the dragged content and then revert back the dragged content to its original position
				ui.draggable.clone().removeAttr('style').appendTo('#'+draggable_data_holder).draggable({ revert: "invalid" });
				ui.draggable.remove();
				
				/* ---------------------------------------- GENERATION OF CONTENT INSIDE THE DROPPABLE AREA ------------------------------------- */
				
					// creating the instance of the dragged content to the droppable container - replacing "toReplace" with unique ID
					$('#sortable').append('<li id="draggableDropped_'+generated_id+'" style="display:none;" class="droppedDraggable col-md-12 ui-state-default"><div id="sortableActionHolder_'+generated_id+'" class="sortableActionHolder"><div id="droppedElementSettingButton_'+generated_id+'" class="glyphicon glyphicon-cog droppedElementSettingButton"></div><div id="droppedElementRemove_'+generated_id+'" class="droppedElementRemove glyphicon glyphicon-trash"></div></div>'+draggable_content+'</li>');
					$('#draggableDropped_'+generated_id).fadeIn();
					
					// attaching the setting panel to the dropped draggable element
					$('#inputOptionsRegular').clone().attr("id", 'inputOptionsRegular_'+generated_id).appendTo('#draggableDropped_'+generated_id);
					var setting_content_modification = $('#inputOptionsRegular_'+generated_id).html().replace(/toReplace/g, generated_id);
					$('#inputOptionsRegular_'+generated_id).html(setting_content_modification);
					
					var noStringExistence = draggable_content.search("no-string");
					if(noStringExistence) {
						$('#inputOptionsRegular_'+generated_id).children('.droppedElementSettingBody').children('.no-setting').each( function () {
							$(this).remove();
						});
					}
					
				/* ---------------------------------------- GENERATION OF CONTENT INSIDE THE DROPPABLE AREA ------------------------------------- */
				
				
				/*------------------------------- REMOVE TRIGGER INSTANCE ------------------------------- */
				
					// to grab the id of the remove button that was clicked
					var toRemove = "";
					$('.droppedElementRemove').click( function () {
						toRemove = $(this).attr('id');
					});
					
					// confirmation of the remove button
					$('.droppedElementRemove').confirmation({
						onConfirm:function(){	
							$('#'+toRemove).closest('.droppedDraggable').remove();
						}
					});
					
				/*------------------------------- REMOVE TRIGGER INSTANCE ------------------------------- */
				
			}
		}
    });
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$(document).on('click', '.droppedElementSettingButton', function () {
		if($(this).parent('div').siblings('.droppedElementSetting').is(':visible')) {
			$(this).parent('div').siblings('.droppedElementSetting').fadeOut();
		} else {
			$(this).parent('div').siblings('.droppedElementSetting').fadeIn();
		}
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	// if the popup setting close button is clicked
	$(document).on('click', '.droppedSettingClose', function () {
		$(this).closest('.droppedElementSetting').fadeOut();
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	/*------------------------------- ADD MORE BEHAVIOUR - DYNAMIC TEXT GROUP ------------------------------- */
	$(document).on('click', '.appendTextGroupAddMore', function () {
		var addMoreId = $(this).attr('id');
		addMoreId = addMoreId.split('_');
		var generated_id = makeid();
		
		var toAppendCOntent = '<div class="form-group textGroup" id="inputTypeTextGroupChild_'+generated_id+'"><input type="text" class="form-control" placeholder="placeholder" id="inputTypeTextGroupChild_'+generated_id+'"><input type="button" class="inputTypeTextGroupChildRemove btn btn-danger" value="Remove" id="inputTypeTextGroupChild_'+generated_id+'"></div>';
		$('#appendTextGroupHolder_'+addMoreId[1]).append(toAppendCOntent);
	});
	/*------------------------------- ADD MORE BEHAVIOUR - DYNAMIC TEXT GROUP ------------------------------- */
	
	/*------------------------------- REMOVE CHILD BEHAVIOUR - DYNAMIC TEXT GROUP ------------------------------- */
	
	$(document).on('click', '.inputTypeTextGroupChildRemove', function () {
		var removeChildId = $(this).attr('id');
		removeChildId = removeChildId.split('_');
		
		$('#inputTypeTextGroupChild_'+removeChildId[1]).remove();
	});
	
	/*------------------------------- REMOVE CHILD BEHAVIOUR - DYNAMIC TEXT GROUP ------------------------------- */
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$(document).on('click', '.toggleElementRemove', function () {
		$(this).parent('label').parent('div').remove();
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$(document).on('click', '.appendCheckVerticalAddMore', function () {
		var id = $(this).attr('id');
		id = id.split('_');
		var generated_id = makeid();
		
		var toAppend_content = '<div class="checkbox" id="checkBoxGroupVerticalInd_'+generated_id+'"><label id="checkBoxGroupVertical_'+generated_id+'"><a id="toggleElementRemove_'+generated_id+'" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a><a id="toggleElementSetting_'+generated_id+'" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a><input type="checkbox" class="formCheck" id="checkBoxGroupVertical_'+generated_id+'"><span>Appended Checkbox</span></label></div>';
		$('#appendCheckVerticalAddMoreHolder_'+id[1]).append(toAppend_content);
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$(document).on('click', '.appendCheckHorizontalAddMore', function () {
		var id = $(this).attr('id');
		id = id.split('_');
		var generated_id = makeid();
		
		var toAppend_content = '<div class="groupHorizontal" id="checkBoxGroupHorizontalInd_'+generated_id+'"><label id="checkBoxGroupHorizontal_'+generated_id+'"><a id="toggleElementRemove_'+generated_id+'" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a><a id="toggleElementSetting_'+generated_id+'" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a><input type="checkbox" class="formCheck" id="checkBoxGroupHorizontal_'+generated_id+'"><span>Appended Checkbox</span></label></div>';
		$('#appendCheckHorizontalAddMoreHolder_'+id[1]).append(toAppend_content);
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$(document).on('click', '.appendRadioHorizontalAddMore', function () {
		var id = $(this).attr('id');
		id = id.split('_');
		var generated_id = makeid();
		
		var toAppend_content = '<div class="groupHorizontal" id="radioGroupHorizontalInd_'+generated_id+'"><label id="radioGroupHorizontal_'+generated_id+'"><a id="toggleElementRemove_'+generated_id+'" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a><a id="toggleElementSetting_'+generated_id+'" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a><input type="radio" id="radioGroupHorizontal_'+generated_id+'"><span>Appended Button</span></label></div>';
		$('#appendRadioHorizontalAddMoreHolder_'+id[1]).append(toAppend_content);
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$(document).on('click', '.appendRadioVerticalAddMore', function () {
		var id = $(this).attr('id');
		id = id.split('_');
		var generated_id = makeid();
		
		var toAppend_content = '<div class="checkbox" id="radioGroupVerticalInd_'+generated_id+'"><label id="radioGroupVertical_'+generated_id+'"><a id="toggleElementRemove_'+generated_id+'" href="#" class="toggleElementRemove glyphicon glyphicon-trash">&nbsp;</a><a id="toggleElementSetting_'+generated_id+'" href="#" class="glyphicon glyphicon-cog toggleElementSetting">&nbsp;</a><input type="radio" id="radioGroupVertical_'+generated_id+'"><span>Appended Button</span></label></div>';
		$('#appendRadioVerticalAddMoreHolder_'+id[1]).append(toAppend_content);
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	$(document).on('click', 'a', function () {
		var target = $(this).attr('href');
		if(target == "#") { return false; }
	});
	
	/* **************************************************** FUNCTION SEPARATOR ******************************************************* */
	
	// randomizer to create the holder and elements id
	function makeid() {
		var text = "";
		var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

		for( var i=0; i < 10; i++ )
			text += possible.charAt(Math.floor(Math.random() * possible.length));

		return text;
	}
  });
</script>