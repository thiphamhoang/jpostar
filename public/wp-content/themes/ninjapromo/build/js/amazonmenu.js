document.createElement("nav");

var amazonmenu = {
    defaults: {
        animateduration: 100,
        showhidedelay: [100, 100],
        hidemenuonclick: true
    },
    setting: {},
    menuzindex: 1000,
    touchenabled: !!('ontouchstart' in window) || !!('ontouchstart' in document.documentElement) || !!window.ontouchstart || !!window.Touch || !!window.onmsgesturechange || (window.DocumentTouch && window.document instanceof window.DocumentTouch),
    showhide: function ($li, action, setting) {
        clearTimeout($li.data('showhidetimer'));
        if (action == 'show') {
            $li.data().showhidetimer = setTimeout(function () {
                $li.addClass('selected');
                $li.prevAll().removeClass('selected');
                $li.nextAll().removeClass('selected');
                $li.data('$submenu').stop(true, true).css({
                    zIndex: amazonmenu.menuzindex++
                }).fadeIn(setting.animateduration, function () {
                    $(this).data('fullyvisible', true);
                });
            }, this.setting.showhidedelay[0]);
        } else {
            $li.data().showhidetimer = setTimeout(function () {
                $li.removeClass('selected');
                $li.data('$submenu').stop(true, true).fadeOut(setting.animateduration, function () {
                    $(this).data('fullyvisible', false);
                });
            }, this.setting.showhidedelay[1]);
        }
        if ($li.hasClass('hassub')) {
            $li.children('a').on('click', function(e) {
                e.preventDefault();
                window.location.href = $(this).attr('href');
            });
        }
    },
    setupmenu: function ($menu, setting) {
        var $topul = $menu.children('ul:eq(0)');

        $topul.find('li>div, li>ul').each(function () {
            var $parentli = $(this).parent('li');
            var $dropdown = $(this);
            $parentli.addClass('hassub').data({
                $submenu: $dropdown,
                showhidetimer: null
            }).on('mouseenter', function (e) {
                amazonmenu.showhide($(this), 'show', setting);
            }).on('mouseleave', function (e) {
                amazonmenu.showhide($(this), 'hide', setting);
            }).children('a').on('click', function (e) {
                e.preventDefault();
            });
        });

        var $mainlis = $topul.children('li.hassub');

        if (setting.hidemenuonclick || amazonmenu.touchenabled) {
            $mainlis.on('click', function (e) {
                amazonmenu.showhide($(this), 'toggle', setting);
            });
        }

        $topul.children('li.hassub').on('mouseleave', function() {
            amazonmenu.showhide($(this), 'hide', setting);
        }).children('a').on('click', function(e) {
            e.preventDefault();
            window.location.href = $(this).attr('href');
        });
    },
    init: function (options) {
        var $menu = $('#' + options.menuid);
        this.setting = $.extend({}, options, this.defaults);
        this.setting.animateduration = Math.max(50, this.setting.animateduration);
        this.setupmenu($menu, this.setting);
    }
};

// Инициализация меню с заданными настройками
amazonmenu.init({
    menuid: 'descktopmenu'
});
