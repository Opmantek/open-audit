(function ($) {

    var defaults = {
        text: '<i class="icon-refresh-cw text-oa-primary"></i> Refresh',
        className: 'btn btn-sm',
        spinClass: 'dt-refresh-spin',
        autoDisable: true,
        resetPaging: true,
        boundToTab: null,
        tabActiveClass: 'active',
        autoRefreshIfEmpty: false,
        autoRefreshInterval: 5000,
        continueRefreshing: null
    };

    $.fn.dataTable.ext.buttons.refresh = function (table, config) {

        var options = $.extend({}, defaults, config);
        var pollTimer = null;

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
                    if (typeof options.continueRefreshing === 'function') {
                        var continuePolling = options.continueRefreshing();
                        if (! continuePolling) {
                            stopPolling();
                            return;
                        }
                    }

                    if (table.data().count() === 0) {
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

                if (options.autoRefreshIfEmpty && table.data().count() === 0) {
                    startPolling();
                } else {
                    stopPolling();
                }
            }
        });

        table.on('init.dt', function () {
            if (options.autoRefreshIfEmpty && table.data().count() === 0) {
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