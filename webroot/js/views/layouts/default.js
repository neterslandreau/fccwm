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
	$('#mycarousel').jcarousel({
		scroll: 1,
		visible: 2,
		auto: 1,
		size: 10,
		wrap: 'circular',
		animation: 2000
	});
});