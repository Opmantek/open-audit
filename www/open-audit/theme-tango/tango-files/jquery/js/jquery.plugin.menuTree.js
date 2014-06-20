// jQuery Menu Tree Plugin
//
// Version 1.0
//
// Usage: $('.menuTree').menuTree( options, callback )
//
// Options:  
//           menuEvent                      - event to trigger expand/collapse; default = click
//           expandSpeed                    - default = 500 (ms); use -1 for no animation
//           collapseSpeed                  - default = 500 (ms); use -1 for no animation
//           expandEasing                   - easing function to use on expand (optional)
//           collapseEasing                 - easing function to use on collapse (optional)
//           multiOpenedSubMenu             - whether or not to limit to one opened menu at a time; default = false;
//           parentMenuTriggerCallback      - whether or not parent menu triggers callback; default = false;
//           expandedNode                   - default node to expand (optional)
//
// Callback:
//           a callback function triggered with <a> 'rel' parameter.
//
// History:
//
// 1.0 - first release (28 May 2009)
//
if (jQuery) (function($) {

    $.extend($.fn, {
        menuTree: function(o, callback) {
            // Default parameters
            if (!o) var o = {};
            o.data = this.html();
            if (o.menuEvent == undefined) o.menuEvent = 'click';
            if (o.expandSpeed == undefined) o.expandSpeed = 500;
            if (o.collapseSpeed == undefined) o.collapseSpeed = 500;
            if (o.expandEasing == undefined) o.expandEasing = null;
            if (o.collapseEasing == undefined) o.collapseEasing = null;
            if (o.multiOpenedSubMenu == undefined) o.multiOpenedSubMenu = false;
            if (o.parentMenuTriggerCallback == undefined) o.parentMenuTriggerCallback = false;
            if (o.expandedNode == undefined) o.expandedNode = null;

            $(this).each(function() {

                function bindTree(t) {

                    var liClickedSelector = callback != undefined ? 'LI > A' : 'LI.parent > A';
                    
                    $(t).find(liClickedSelector).bind(o.menuEvent, function() {
                        currentItem = $(this);
                        if ($(this).parent().hasClass('parent')) {
                            if ($(this).parent().hasClass('expanded')) {
                                // Collapse
                                $(this).parent().find('UL').slideUp({ duration: o.collapseSpeed, easing: o.collapseEasing });
                                $(this).parent().removeClass('expanded').addClass('collapsed');

                            } else {
                                // Expand
                                if (!o.multiOpenedSubMenu) {
                                    $(this).parent().parent().find('UL').slideUp({ duration: o.collapseSpeed, easing: o.collapseEasing });
                                    $(this).parent().parent().find('LI.parent').removeClass('expanded').addClass('collapsed');
                                }
                                $($(this).parent().find("UL")[0]).slideDown({ duration: o.expandSpeed, easing: o.expandEasing });
                                $(this).parent().removeClass('collapsed').addClass('expanded');
                                $(this).parent().find('LI.parent').removeClass('expanded').addClass('collapsed');

                                if (o.parentMenuTriggerCallback)
                                    callback($(this).attr('rel'));
                            }

                        } else {
                            callback($(this).attr('rel'));
                        }
                        return false;
                    });

                    // Prevent A from triggering the # on non-click events
                    if (o.menuEvent.toLowerCase != 'click') $(t).find(liClickedSelector).bind('click', function() { return false; });
                }

                // initialization
                $($(this)).find(":first").show();
                bindTree($(this));

                // Expend default node
                if (o.expandedNode) {

                    var elementToExpend = $($(this)).find("a[rel=" + o.expandedNode + "]").parent().parent();

                    // Collect all UL items that need to be extended
                    var ulMenuElements = new Array();
                    var i = 0;
                    while (elementToExpend && elementToExpend.find('DIV').length == 0) {

                        if (elementToExpend[0].tagName == "UL") {
                            ulMenuElements[i] = elementToExpend;
                            i++;
                        }
                        elementToExpend = elementToExpend.parent();
                    }
                    ulMenuElements = ulMenuElements.reverse()

                    // Extend all collected item (recursive)
                    var i = 0;
                    var openMenu = function() {

                        i++; // skip first ul(root)
                        if (i >= ulMenuElements.length) return;

                        ulMenuElements[i].removeClass('collapsed').addClass('expanded');
                        ulMenuElements[i].slideDown({ duration: o.expandSpeed, easing: o.expandEasing, complete: openMenu });

                    }
                    openMenu(ulMenuElements);
                }
            });
        }
    });

})(jQuery);