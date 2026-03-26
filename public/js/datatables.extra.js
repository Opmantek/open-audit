(function ($) {

    // Override the default layout, shouldn't change the look but will
    // allow the refresh button to be injected, when enabled
    $.extend(true, $.fn.dataTable.defaults, {
        dom: '<"d-flex justify-content-between"<"dt-left"l><"dt-right d-flex align-items-center gap-2"fR>>tip'
    });

    const defaults = {
        className: 'btn btn-light btn-sm',
        iconClass: 'icon-refresh-cw text-oa-primary',
        text: "Refresh",
        tooltip: 'Refresh table data',
        spinClass: 'dt-refresh-spin',
        autoDisable: true,
        resetPaging: true,
        autoRefreshIfEmpty: false,
        autoRefreshInterval: 5000
    };

    $.fn.dataTable.ext.feature.push({
        cFeature: 'R',
        fnInit: function (settings) {
            const optsFromInit = settings.oInit.refreshButton;
            if (! optsFromInit) {
                return null;
            }
            var api = new $.fn.dataTable.Api(settings);
            var opts = $.extend(
                {},
                defaults,
                settings.oInit.refreshButton || {}
            );

            var container = $('<div class="dt-refresh me-2"></div>');
            var button = $(`
                <button role="button" class="${opts.className}" title="${opts.tooltip}">
                    <i class="${opts.iconClass}"></i><span>${opts.text}</span>
                </button>
            `);

            var icon = button.find('i');
            var pollTimer = null;

            function startPolling() {
                if (!pollTimer) {
                    pollTimer = setInterval(() => {
                        if (api.data().count() === 0) {
                            icon.addClass(opts.spinClass);
                            if (opts.autoDisable) {
                                button.prop('disabled', true);
                            }
                            api.ajax.reload(null, opts.resetPaging);
                        } else {
                            stopPolling();
                        }
                    }, opts.autoRefreshInterval);
                }
            }

            function stopPolling() {
                if (pollTimer) {
                    clearInterval(pollTimer);
                    pollTimer = null;
                    icon.removeClass(opts.spinClass);
                    if (opts.autoDisable) {
                        button.prop('disabled', false);
                    }
                }
            }

            button.on('click', function () {
                if (opts.autoDisable) {
                    button.prop('disabled', true);
                }

                icon.addClass(opts.spinClass);
                api.ajax.reload(null, opts.resetPaging);
            });

            api.on('processing.dt', function (e, settings, processing) {
                if (!processing) {
                    icon.removeClass(opts.spinClass);
                    if (opts.autoDisable) {
                        button.prop('disabled', false);
                    }

                    if (opts.autoRefreshIfEmpty && api.data().count() === 0) {
                        startPolling();
                    } else {
                        stopPolling();
                    }
                }
            });

            if (opts.autoRefreshIfEmpty && api.data().count() === 0) {
                startPolling();
            }

            container.append(button);

            return container[0];
        }
    });
})(jQuery);