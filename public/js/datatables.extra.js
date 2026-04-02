(function ($) {

    var defaults = {
        text: '<i class="icon-refresh-cw text-oa-primary"></i> Refresh',
        className: 'btn btn-sm btn-light',
        spinClass: 'dt-refresh-spin',
        autoDisable: true,
        resetPaging: true,
        boundToTab: null,
        tabActiveClass: 'active',
        autoRefresh: null,
        autoRefreshInterval: 10000,
    };

    $.fn.dataTable.ext.buttons.refresh = function (table, config) {

        var options = $.extend({}, defaults, config);
        var pollTimer = null;

        if (typeof options.autoRefresh !== 'function') {
            options.autoRefresh = function() {
                return table.data().count() === 0;
            }
        }

        function shouldAutoRefresh() {
            return options.autoRefresh() === true;
        }

        function reloadData() {
            var button = table.button('.buttons-refresh').node();

            if (button) {
                var icon = $(button).find('i');

                if (options.autoDisable) {
                    button.prop('disabled', true);
                }

                icon.addClass(options.spinClass);
            }

            table.ajax.reload(null, options.resetPaging);
        }

        function startPolling() {
            if (!pollTimer) {
                pollTimer = setInterval(() => {
                    if (shouldAutoRefresh()) {
                        if (options.boundToTab) {
                            var tab = $(options.boundToTab);
                            if (tab.length && tab.hasClass(options.tabActiveClass)) {
                                reloadData();
                            }
                        } else {
                            reloadData();
                        }
                    } else {
                        stopPolling();
                    }
                }, options.autoRefreshInterval);
            }
        }

        function stopPolling() {
            if (pollTimer) {
                clearInterval(pollTimer);
                pollTimer = null;
                var button = table.button('.buttons-refresh').node();

                if (button) {
                    var icon = $(button).find('i');

                    if (options.autoDisable) {
                        button.prop('disabled', false);
                    }

                    icon.removeClass(options.spinClass);
                }
            }
        }

        table.on('processing.dt', function (e, settings, processing) {
            if (!processing) {
                var button = table.button('.buttons-refresh').node();

                if (button) {
                    var icon = $(button).find('i');

                    if (options.autoDisable) {
                        button.prop('disabled', false);
                    }

                    icon.removeClass(options.spinClass);
                }

                if (shouldAutoRefresh()) {
                    startPolling();
                } else {
                    stopPolling();
                }
            }
        });

        table.on('init.dt', function () {
            if (shouldAutoRefresh()) {
                startPolling();
            }
        });

        return {
            text: options.text,
            className: options.className + ' buttons-refresh',
            action: function () {
                reloadData();
            }
        };
    };

})(jQuery);