$(document).ready(function() {
	$(function()
	{
	  var hideDelay = 500;  
	  var currentID;
	  var hideTimer = null;
	
	  // One instance that's reused to show info for the current item
	  var container = $('<div id="personPopupContainer">'
	      + '<table width="" border="0" cellspacing="0" cellpadding="0" style="text-align:center;" class="personPopupPopup">'
	      + '<tr>'
	      + '   <td class="corner topLeft"></td>'
	      + '   <td class="top"></td>'
	      + '   <td class="corner topRight"></td>'
	      + '</tr>'
	      + '<tr>'
	      + '   <td class="left">&nbsp;</td>'
	      + '   <td><div id="personPopupContent"></div></td>'
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
	      + '<table width="" border="0" cellspacing="0" cellpadding="0" align="center" class="personPopupPopup">'
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
	      + '<table width="" border="0" cellspacing="0" cellpadding="0" align="center" class="personPopupPopup">'
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

	  $('body').append(container);
	  $('body').append(container2);
	  $('body').append(container3);

	  $('.personPopupTrigger').live('mouseover', function()
	  {		  
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
	
	      $('#personPopupContent').html('&nbsp;');
	
	      $.ajax({
	          type: 'GET',
	          url: baseUrl+'index.php/ajax/system_popup/' + pageID,
	          processData: false,
			  dataType: 'text',
	          success: function(data)
	          {
	              // Verify that we're pointed to a page that returned the expected results.
	              if (data.indexOf('personPopupResult') < 0)
	              {
	                  $('#personPopupContent').html('<span >Page ' + pageID + ' did not return a valid result for system ' + currentID + '.	Please have your administrator check the error log.<\/span>');
	              }
	
	              // Verify requested person is this person since we could have multiple ajax
	              // requests out if the server is taking a while.
	              if (data.indexOf('personPopupResult') > 0)
	              {                  
	                  //var text = $(data).find('.personPopupResult').html();
	                  //$('#personPopupContent').html(text);
					  $('#personPopupContent').html(data);
	              }
	          }
	      });
	
	      container.css('display', 'block');
	  });
	
	  $('.personPopupTrigger').live('mouseout', function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	      hideTimer = setTimeout(function()
	      {
	          container.css('display', 'none');
	      }, hideDelay);
	  });
	
	  // Allow mouse over of details without hiding details
	  $('#personPopupContainer').mouseover(function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	  });
	
	  // Hide after mouseout
	  $('#personPopupContainer').mouseout(function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	      hideTimer = setTimeout(function()
	      {
	          container.css('display', 'none');
	      }, hideDelay);
	  });





	  $('.TagPopupTrigger').live('mouseover', function()
	  {		  
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
	          success: function(data)
	          {
	              // Verify that we're pointed to a page that returned the expected results.
	              if (data.indexOf('TagPopupResult') < 0)
	              {
	                  $('#TagPopupContent').html('<span >Page ' + pageID + ' did not return a valid result for system ' + currentID + '.	Please have your administrator check the error log.<\/span>');
	              }
	
	              // Verify requested person is this person since we could have multiple ajax
	              // requests out if the server is taking a while.
	              if (data.indexOf('TagPopupResult') > 0)
	              {                  
	                  //var text = $(data).find('.personPopupResult').html();
	                  //$('#personPopupContent').html(text);
			  $('#TagPopupContent').html(data);
	              }
	          }
	      });
	
	      container2.css('display', 'block');
	  });
	
	  $('.TagPopupTrigger').live('mouseout', function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	      hideTimer = setTimeout(function()
	      {
	          container2.css('display', 'none');
	      }, hideDelay);
	  });
	
	  // Allow mouse over of details without hiding details
	  $('#TagPopupContainer').mouseover(function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	  });
	
	  // Hide after mouseout
	  $('#TagPopupContainer').mouseout(function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	      hideTimer = setTimeout(function()
	      {
	          container2.css('display', 'none');
	      }, hideDelay);
	  });









	$('.SearchPopupTrigger').live('mouseover', function()
	{	
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
	
	  $('.SearchPopupTrigger').live('mouseout', function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	      hideTimer = setTimeout(function()
	      {
	          container3.css('display', 'none');
	      }, hideDelay);
	  });
	
	  // Allow mouse over of details without hiding details
	  $('#SearchPopupContainer').mouseover(function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	  });
	
	  // Hide after mouseout
	  $('#SearchPopupContainer').mouseout(function()
	  {
	      if (hideTimer)
	          clearTimeout(hideTimer);
	      hideTimer = setTimeout(function()
	      {
	          container3.css('display', 'none');
	      }, hideDelay);
	  });
	  	  });

});
