(function ($) {

    var defaults = {
        text: '<i class="icon-refresh-cw text-oa-primary"></i> Refresh',
        className: 'btn btn-light btn-sm',
        spinClass: 'dt-refresh-spin',
        autoDisable: true,
        resetPaging: true,
        autoRefreshIfEmpty: false,
        autoRefreshInterval: 5000
    };

    $.fn.dataTable.ext.buttons.refresh = function (table, config) {

        var options = $.extend({}, defaults, config);
        var pollTimer = null;

        function startPolling(node) {
            if (!pollTimer) {
                pollTimer = setInterval(() => {
                    if (table.data().count() === 0) {
                        triggerReload(node);
                    } else {
                        stopPolling(node);
                    }
                }, options.autoRefreshInterval);
            }
        }

        function stopPolling(node) {
            if (pollTimer) {
                clearInterval(pollTimer);
                pollTimer = null;
                stopSpin(node);
            }
        }

        function startSpin(node) {
            var icon = $(node).find('i');
            icon.addClass(options.spinClass);
            if (options.autoDisable) $(node).prop('disabled', true);
        }

        function stopSpin(node) {
            var icon = $(node).find('i');
            icon.removeClass(options.spinClass);
            if (options.autoDisable) $(node).prop('disabled', false);
        }

        function triggerReload(node) {
            startSpin(node);

            table.ajax.reload(() => {
                stopSpin(node);

                if (options.autoRefreshIfEmpty && table.data().count() === 0) {
                    startPolling(node);
                } else {
                    stopPolling(node);
                }
            }, options.resetPaging);
        }

        table.on('processing.dt', function (e, s, processing) {
            var node = table.button('.buttons-refresh').node();

            if (!node) return;

            if (processing) {
                startSpin(node);
            } else {
                stopSpin(node);
            }
        });

        table.on('init.dt', function () {
            var node = table.button('.buttons-refresh').node();

            if (options.autoRefreshIfEmpty && table.data().count() === 0) {
                startPolling(node);
            }
        });

        return {
            text: options.text,
            className: options.className + ' buttons-refresh',
            action: function (e, dt, node) {
                triggerReload(node);
            }
        };
    };

})(jQuery);