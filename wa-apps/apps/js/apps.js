/*global jQuery, location, $_*/
(function ($) {
    // js controller
    $.wa.apps = {
        page:null,
        // init js controller
        init: function (options) {
            // if history exists
            if (typeof($.History) != "undefined") {
                $.History.bind(function (hash) {
                    $.wa.apps.dispatch(hash);
                });
            }
            if (options.page) {
                this.page = options.page;
            }
            console.log(this.page);
            this.dispatch();
        },
        // dispatch call method by hash
        dispatch: function (hash) {
            if (hash === undefined) {
                hash = location.hash.replace(/^[^#]*#\/*/, '');
            }
            if (hash) {
                // clear hash
                hash = hash.replace(/^.*#/, '');
                hash = hash.split('/');
                if (hash[0]) {
                    var actionName = "";
                    var attrMarker = hash.length;
                    for (var i = 0; i < hash.length; i++) {
                        var h = hash[i];
                        if (i < 2) {
                            if (i === 0) {
                                actionName = h;
                            } else if (parseInt(h, 10) != h) {
                                attrMarker = i;
                                //actionName += h.substr(0,1).toUpperCase() + h.substr(1);
                                break;
                            } else {
                                attrMarker = i;
                                break;
                            }
                        } else {
                            attrMarker = i;
                            break;
                        }
                    }
                    var attr = hash.slice(attrMarker);
                    // call action if it exists
                    if (this[actionName + 'Action']) {
                        this.currentAction = actionName;
                        this.currentActionAttr = attr;
                        this[actionName + 'Action'](attr);
                    } else {
                        if (console) {
                            console.log('Invalid action name:', actionName+'Action');
                        }
                    }
                } else {
                    // call default action
                    this.defaultAction();
                }
            } else {
                // call default action
                this.defaultAction();
            }
        },
        defaultAction: function () {
            if (this.page=='plugins') {
                this.pluginsAction();
            }
        },
        pluginsAction: function (id) {
            var path = '?module=plugins';
            if (id & id!="") {

                console.log(id);
                path += '&action=settings&id=' + id;
            }
            $("#content").load(path);
            // $.layout.init({
            // debug: true,
            // default_query:{"plugins":"apps"}
            // });
        },

        generalAction: function () {
            $("#content").load('?module=settings');
        },
    };
    $.storage = new $.store();

    $(document).on('click','.menu-v.with-icons>li', function (e) {
        $('.selected','.menu-v.with-icons').removeClass('selected');
        $(this).addClass('selected');
    });
})(jQuery);
