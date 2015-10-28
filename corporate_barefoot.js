Drupal.Ajax.plugins.pledge_list = function(hook, args) {

  if (hook == 'init') {

    $('#pledge-list-form .error').css('display','none');	
    $('#edit-pledge-activity-wrapper').css('display','inline');	
	$('#edit-pledge-activity-wrapper').append('<input type="text" maxlength="25" name="pledge_activity_other" id="edit-pledge-activity-other" size="60" value="" class="form-text">');
    $('#edit-pledge-activity-other').css('display','none');	

	$("#edit-pledge-activity").change(function() { 
    var str = $("#edit-pledge-activity").val();

	if(str == 'Other') {
    $('#edit-pledge-activity-other').css('display','inline');	
    $('#edit-pledge-activity').css('display','none');	

	} else {
	}

	});

  }

if(hook == 'submit') {
var field = $('#edit-pledge-activity-value');

if($("#edit-pledge-activity-other").val() == "") { 
	if($("#edit-pledge-activity").val() == "Other") {

	} else {
		field.val($("#edit-pledge-activity").val());
	}
} else {
	field.val($("#edit-pledge-activity-other").val());
}

}
if(hook === 'message') {

    $('#edit-pledge-activity-other').css('display','none');	
    $('#edit-pledge-activity').css('display','inline');	

    $('#edit-pledge-activity-other').val("");

    var field = $('#edit-pledge-activity');
    field.val($('option:first', field).val());
}
if(hook == 'afterMessage') {

}
if(hook == 'scrollFind') {

}
}

var listDetails = function(response) {
var result = Drupal.parseJson(response);
$('#appendiv').html(result.display);
$('.view-pledge-view li:first').hide();
$('.view-pledge-view li:first').fadeIn(1000);
}