<?php
/*
 * views/full_calendar/index.ctp
 * CakePHP Full Calendar Plugin
 *
 * Copyright (c) 2010 Silas Montgomery
 * http://silasmontgomery.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 */

echo $javascript->link('/full_calendar/js/jquery-1.5.min', false);
echo $javascript->link('/full_calendar/js/jquery-ui-1.8.9.custom.min', false);
echo $javascript->link('/full_calendar/js/fullcalendar.min', false);
echo $javascript->link('/full_calendar/js/jquery.qtip-1.0.0-rc3.min', false);
echo $javascript->link('/full_calendar/js/ready', false);
echo $html->css('/full_calendar/css/fullcalendar', null, array('inline' => false));
?>


<div class="Calendar index">
	<div id="calendar"></div>
</div>
