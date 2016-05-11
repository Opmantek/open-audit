<?php
#
#  Copyright 2003-2015 Opmantek Limited (www.opmantek.com)
#
#  ALL CODE MODIFICATIONS MUST BE SENT TO CODE@OPMANTEK.COM
#
#  This file is part of Open-AudIT.
#
#  Open-AudIT is free software: you can redistribute it and/or modify
#  it under the terms of the GNU Affero General Public License as published
#  by the Free Software Foundation, either version 3 of the License, or
#  (at your option) any later version.
#
#  Open-AudIT is distributed in the hope that it will be useful,
#  but WITHOUT ANY WARRANTY; without even the implied warranty of
#  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#  GNU Affero General Public License for more details.
#
#  You should have received a copy of the GNU Affero General Public License
#  along with Open-AudIT (most likely in a file named LICENSE).
#  If not, see <http://www.gnu.org/licenses/>
#
#  For further information on Open-AudIT or for a license other than AGPL please see
#  www.opmantek.com or email contact@opmantek.com
#
# *****************************************************************************

/**
 * @author Mark Unwin <marku@opmantek.com>
 *
 * @version 1.12.6
 *
 * @copyright Copyright (c) 2014, Opmantek
 * @license http://www.gnu.org/licenses/agpl-3.0.html aGPL v3
 */
?>
$(document).ready(function() {
	$(function() {
		var hideDelay = 500;
		var currentID;
		var hideTimer = null;

		// One instance that's reused to show info for the current item
		var container = $('<div id="SystemPopupContainer">'
		+ '<table width="" border="0" cellspacing="0" cellpadding="0" style="text-align:center;" class="SystemPopupPopup">'
		+ '<tr>'
		+ '   <td class="corner topLeft"></td>'
		+ '   <td class="top"></td>'
		+ '   <td class="corner topRight"></td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="left">&nbsp;</td>'
		+ '   <td><div id="SystemPopupContent"></div></td>'
		+ '   <td class="right">&nbsp;</td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="corner bottomLeft">&nbsp;</td>'
		+ '   <td class="bottom">&nbsp;</td>'
		+ '   <td class="corner bottomRight"></td>'
		+ '</tr>'
		+ '</table>'
		+ '</div>');

		var container2 = $('<div id="TagPopupContainer">'
		+ '<table width="" border="0" cellspacing="0" cellpadding="0" align="center" class="SystemPopupPopup">'
		+ '<tr>'
		+ '   <td class="corner topLeft"></td>'
		+ '   <td class="top"></td>'
		+ '   <td class="corner topRight"></td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="left">&nbsp;</td>'
		+ '   <td><div id="TagPopupContent"></div></td>'
		+ '   <td class="right">&nbsp;</td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="corner bottomLeft">&nbsp;</td>'
		+ '   <td class="bottom">&nbsp;</td>'
		+ '   <td class="corner bottomRight"></td>'
		+ '</tr>'
		+ '</table>'
		+ '</div>');

		var container3 = $('<div id="SearchPopupContainer">'
		+ '<table width="" border="0" cellspacing="0" cellpadding="0" align="center" class="SystemPopupPopup">'
		+ '<tr>'
		+ '   <td class="corner topLeft"></td>'
		+ '   <td class="top"></td>'
		+ '   <td class="corner topRight"></td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="left">&nbsp;</td>'
		+ '   <td><div id="SearchPopupContent"></div></td>'
		+ '   <td class="right">&nbsp;</td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="corner bottomLeft">&nbsp;</td>'
		+ '   <td class="bottom">&nbsp;</td>'
		+ '   <td class="corner bottomRight"></td>'
		+ '</tr>'
		+ '</table>'
		+ '</div>');

		var container4 = $('<div id="ModifierPopupContainer">'
		+ '<table width="" border="0" cellspacing="0" cellpadding="0" align="center" class="ModifierPopupPopup">'
		+ '<tr>'
		+ '   <td class="corner topLeft"></td>'
		+ '   <td class="top"></td>'
		+ '   <td class="corner topRight"></td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="left">&nbsp;</td>'
		+ '   <td><div id="ModifierPopupContent"></div></td>'
		+ '   <td class="right">&nbsp;</td>'
		+ '</tr>'
		+ '<tr>'
		+ '   <td class="corner bottomLeft">&nbsp;</td>'
		+ '   <td class="bottom">&nbsp;</td>'
		+ '   <td class="corner bottomRight"></td>'
		+ '</tr>'
		+ '</table>'
		+ '</div>');

		$('body').append(container);
		$('body').append(container2);
		$('body').append(container3);
		$('body').append(container4);


		oa_cell_id = "";
		oa_cell_value = "";
		oa_attribute = "";

		$('.SystemPopupTrigger').live('mouseover', function() {
			// format of 'rel' tag: pageid,personguid
			var settings = $(this).attr('rel').split(',');
			var pageID = settings[0];

			if (hideTimer)
			clearTimeout(hideTimer);

			var pos = $(this).offset();
			var width = $(this).width();
			container.css({
			left: (pos.left + width) + 'px',
			top: pos.top - 5 + 'px'
		});

		$('#SystemPopupContent').html('&nbsp;');

		$.ajax({
			type: 'GET',
			url: baseUrl+'index.php/ajax/system_popup/' + pageID,
			processData: false,
			dataType: 'text',
			success: function(data) {
				// Verify that we're pointed to a page that returned the expected results.
				if (data.indexOf('SystemPopupResult') < 0) {
				$('#SystemPopupContent').html('<span >Page ' + pageID + ' did not return a valid result for system ' + currentID + '.	Please have your administrator check the error log.<\/span>');
			}
			// Verify requested System is this system since we could have multiple ajax
			// requests out if the server is taking a while.
			if (data.indexOf('SystemPopupResult') > 0) {
				//var text = $(data).find('.SystemPopupResult').html();
				//$('#SystemPopupContent').html(text);
				$('#SystemPopupContent').html(data);
			}
		}
	});

	container.css('display', 'block');
	});

	$('.SystemPopupTrigger').live('mouseout', function() {
		if (hideTimer)
		clearTimeout(hideTimer);
		hideTimer = setTimeout(function()
		{
		container.css('display', 'none');
		}, hideDelay);
	});

	// Allow mouse over of details without hiding details
	$('#SystemPopupContainer').mouseover(function() {
		if (hideTimer)
		clearTimeout(hideTimer);
	});

	// Hide after mouseout
	$('#SystemPopupContainer').mouseout(function() {
		if (hideTimer)
		clearTimeout(hideTimer);
		hideTimer = setTimeout(function() {
			container.css('display', 'none');
		}, hideDelay);
	});





	$('.TagPopupTrigger').live('mouseover', function() {
		// format of 'rel' tag: pageid,personguid
		var settings = $(this).attr('rel').split(',');
		var pageID = settings[0];

		if (hideTimer)
			clearTimeout(hideTimer);

		var pos = $(this).offset();
		var width = $(this).width();

		container2.css({
			left: (pos.left - 200 + width) + 'px',
			top: pos.top - 5 + 'px'
		});

		$('#TagPopupContent').html('&nbsp;');

		$.ajax({
			type: 'GET',
			url: baseUrl+'index.php/ajax/system_tags/' + pageID,
			processData: false,
			dataType: 'text',
			success: function(data) {
				// Verify that we're pointed to a page that returned the expected results.
				if (data.indexOf('TagPopupResult') < 0) {
					$('#TagPopupContent').html('<span >Page ' + pageID + ' did not return a valid result for system ' + currentID + '.	Please have your administrator check the error log.<\/span>');
				}
				// Verify requested person is this person since we could have multiple ajax
				// requests out if the server is taking a while.
				if (data.indexOf('TagPopupResult') > 0) {
					//var text = $(data).find('.TagPopupResult').html();
					//$('#SystemPopupContent').html(text);
					$('#TagPopupContent').html(data);
				}
			}
		});
		container2.css('display', 'block');
	});

	$('.TagPopupTrigger').live('mouseout', function() {
		if (hideTimer)
		clearTimeout(hideTimer);
		hideTimer = setTimeout(function() {
			container2.css('display', 'none');
		}, hideDelay);
	});

	// Allow mouse over of details without hiding details
	$('#TagPopupContainer').mouseover(function() {
		if (hideTimer)
		clearTimeout(hideTimer);
	});

	// Hide after mouseout
	$('#TagPopupContainer').mouseout(function() {
		if (hideTimer)
		clearTimeout(hideTimer);
		hideTimer = setTimeout(function() {
			container2.css('display', 'none');
		}, hideDelay);
	});































	$('.ModifierPopupTrigger').live('mouseover', function() {
		// format of 'rel' tag: pageid,personguid
		var settings = $(this).attr('rel').split(',');
		var pageID = settings[0];
		if (hideTimer)
			clearTimeout(hideTimer);
		var pos = $(this).offset();
		var width = $(this).width();
		container4.css({
			left: (pos.left - 130 + width) + 'px',
			top: pos.top - 5 + 'px'
		});
		$('#ModifierPopupContent').html('<div class="ModifierPopupResult"><a href="' + document.URL + '/out___' + $(this).attr('rel') + '">Filter Out</a><br /><a href="' + document.URL + '/only___' + $(this).attr('rel') + '">Filter Only</a></div>');
		container4.css('display', 'block');
	});

	$('.ModifierPopupTrigger').live('mouseout', function() {
		if (hideTimer)
			clearTimeout(hideTimer);
		hideTimer = setTimeout(function() {
			container4.css('display', 'none');
		}, hideDelay);
		document.getElementById(oa_cell_id).innerHTML = oa_cell_value;
		cell_id = "";
	});

	// Allow mouse over of details without hiding details
	$('#ModifierPopupContainer').mouseover(function() {
		if (hideTimer)
			clearTimeout(hideTimer);
	});

	// Hide after mouseout
	$('#ModifierPopupContainer').mouseout(function() {
		if (hideTimer)
			clearTimeout(hideTimer);
		hideTimer = setTimeout(function() {
			container4.css('display', 'none');
		}, hideDelay);
		//document.getElementById(oa_cell_id).innerHTML = x[cell_id];
		document.getElementById(oa_cell_id).innerHTML = oa_cell_value;
		cell_id = "";
	});



























	$('.SearchPopupTrigger').live('mouseover', function() {
		// format of 'rel' tag: pageid,personguid
		var settings = $(this).attr('rel').split(',');
		var pageID = settings[0];
		if (hideTimer)
			clearTimeout(hideTimer);
		var pos = $(this).offset();
		var width = $(this).width();
		container3.css({
			left: (pos.left - 200 + width) + 'px',
			top: pos.top - 5 + 'px'
		});
		$('#SearchPopupContent').html('<div class="SearchPopupResult"><table border="0" style="font-size: 8pt; color:#3D3D3D; "><tr><td style="text-align: center;"><input type="text" name="search_term" id="search_term" /><br /><input type="submit" name="submit" id="submit" value="Search" onclick="return(dynamic_search(\''+pageID+'\'))" /></td></tr></table></div>');
		container3.css('display', 'block');
	});

	$('.SearchPopupTrigger').live('mouseout', function() {
		if (hideTimer)
			clearTimeout(hideTimer);
		hideTimer = setTimeout(function() {
			container3.css('display', 'none');
		}, hideDelay);
	});

	// Allow mouse over of details without hiding details
	$('#SearchPopupContainer').mouseover(function() {
		if (hideTimer)
			clearTimeout(hideTimer);
	});

	// Hide after mouseout
	$('#SearchPopupContainer').mouseout(function() {
		if (hideTimer)
			clearTimeout(hideTimer);
		hideTimer = setTimeout(function() {
			container3.css('display', 'none');
		}, hideDelay);
	});
});

});
