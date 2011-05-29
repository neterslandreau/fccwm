$(document).ready(function() {
	$('#donate').bind('click', function(e) {
		$('#donate-form').dialog({
			width: 800,
			height: 600,
			title: 'Donate',
			modal: true,
			show: null,
			buttons: {
				'Donate': function() {
					$(':input', '#DonationAddForm').each(function(){
						console.log(this.name + ': ' + this.value);
					});
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
		animation: 5000,
		initCallback: mycarousel_initCallback
	});
	$('#pre-school-footer').bind('click', function(e) {
		$('#pre-school-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-School',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#pre-school-sidebar').bind('click', function(e) {
		$('#pre-school-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-School',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pre-school-content').bind('click', function(e) {
		$('#pre-school-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-School',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pre-school-header').bind('click', function(e) {
		$('#pre-school-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-School',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#pre-teen-footer').bind('click', function(e) {
		$('#pre-teen-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-Teen',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pre-teen-sidebar').bind('click', function(e) {
		$('#pre-teen-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-Teen',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pre-teen-content').bind('click', function(e) {
		$('#pre-teen-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-Teen',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pre-teen-header').bind('click', function(e) {
		$('#pre-teen-info').dialog({
			width: 800,
			height: 600,
			title: 'Pre-Teen',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#youth-footer').bind('click', function(e) {
		$('#youth-info').dialog({
			width: 800,
			height: 600,
			title: 'Youth Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#youth-content').bind('click', function(e) {
		$('#youth-info').dialog({
			width: 800,
			height: 600,
			title: 'Youth Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#youth-sidebar').bind('click', function(e) {
		$('#youth-info').dialog({
			width: 800,
			height: 600,
			title: 'Youth Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#youth-header').bind('click', function(e) {
		$('#youth-info').dialog({
			width: 800,
			height: 600,
			title: 'Youth Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#adult-footer').bind('click', function(e) {
		$('#adult-info').dialog({
			width: 800,
			height: 600,
			title: 'Adult Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#adult-content').bind('click', function(e) {
		$('#adult-info').dialog({
			width: 800,
			height: 600,
			title: 'Adult Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#adult-sidebar').bind('click', function(e) {
		$('#adult-info').dialog({
			width: 800,
			height: 600,
			title: 'Adult Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#adult-header').bind('click', function(e) {
		$('#adult-info').dialog({
			width: 800,
			height: 600,
			title: 'Adult Studies',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#beliefs-footer').bind('click', function(e) {
		$('#beliefs-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Beliefs',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#beliefs-sidebar').bind('click', function(e) {
		$('#beliefs-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Beliefs',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#beliefs-content').bind('click', function(e) {
		$('#beliefs-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Beliefs',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#beliefs-header').bind('click', function(e) {
		$('#beliefs-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Beliefs',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#pastor-footer').bind('click', function(e) {
		$('#pastor-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Pastor',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pastor-sidebar').bind('click', function(e) {
		$('#pastor-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Pastor',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pastor-content').bind('click', function(e) {
		$('#pastor-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Pastor',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#pastor-header').bind('click', function(e) {
		$('#pastor-info').dialog({
			width: 800,
			height: 600,
			title: 'Our Pastor',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#staff-footer').bind('click', function(e) {
		$('#staff-info').dialog({
			width: 800,
			height: 600,
			title: 'Our staff',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#staff-sidebar').bind('click', function(e) {
		$('#staff-info').dialog({
			width: 800,
			height: 600,
			title: 'Our staff',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#staff-content').bind('click', function(e) {
		$('#staff-info').dialog({
			width: 800,
			height: 600,
			title: 'Our staff',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#staff-header').bind('click', function(e) {
		$('#staff-info').dialog({
			width: 800,
			height: 600,
			title: 'Our staff',
			modal: true,
			show: null,
			buttons: {
				'Close': function() {
					$(this).dialog("close");
				}
			}
		});
	});

	$('#contact-footer').bind('click', function(e) {
		$('#contact-info').dialog({
			width: 800,
			height: 600,
			title: 'Contact Us',
			modal: true,
			show: null,
			buttons: {
				'Submit': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#contact-sidebar').bind('click', function(e) {
		$('#contact-info').dialog({
			width: 800,
			height: 600,
			title: 'Contact Us',
			modal: true,
			show: null,
			buttons: {
				'Submit': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#contact-content').bind('click', function(e) {
		$('#contact-info').dialog({
			width: 800,
			height: 600,
			title: 'Contact Us',
			modal: true,
			show: null,
			buttons: {
				'Submit': function() {
					$(this).dialog("close");
				}
			}
		});
	});
	$('#contact-header').bind('click', function(e) {
		$('#contact-info').dialog({
			width: 800,
			height: 600,
			title: 'Contact Us',
			modal: true,
			show: null,
			buttons: {
				'Submit': function() {
					$(this).dialog("close");
				}
			}
		});
	});
});

function mycarousel_initCallback(carousel) {
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};
