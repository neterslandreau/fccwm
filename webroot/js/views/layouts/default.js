$(document).ready(function() {
	$('#donate').bind('click', function(e) {
		$('#donate-form').dialog({
			width: 650,
			title: 'Donate',
			modal: true,
			show: 'blind',
			buttons: {
				'Donate': function() {
					$(this).dialog("close");
				}
			}
		});
	});
});