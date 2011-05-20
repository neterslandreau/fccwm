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
		animation: 2000,
		initCallback: mycarousel_initCallback
	});
});

function mycarousel_initCallback(carousel) {
    // Disable autoscrolling if the user clicks the prev or next button.
    carousel.buttonNext.bind('click', function() {
        carousel.startAuto(0);
    });

    carousel.buttonPrev.bind('click', function() {
        carousel.startAuto(0);
    });

    // Pause autoscrolling if the user moves with the cursor over the clip.
    carousel.clip.hover(function() {
        carousel.stopAuto();
    }, function() {
        carousel.startAuto();
    });
};
