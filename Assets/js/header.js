(function ($) {
    this.MobileNav = function () {
        this.curItem,
            this.curLevel = 0,
            this.transitionEnd = _getTransitionEndEventName();

        var defaults = {
            initElem: ".main-menu",
            menuTitle: "Menu"
        }

        // Check if MobileNav was initialized with some options and assign them to the "defaults"
        if (arguments[0] && typeof arguments[0] === "object") {
            this.options = extendDefaults(defaults, arguments[0]);
        }

        // Add to the "defaults" ONLY if the key is already in the "defaults"
        function extendDefaults(source, extender) {
            for (option in extender) {
                if (source.hasOwnProperty(option)) {
                    source[option] = extender[option];
                }
            }
        }

        MobileNav.prototype.getCurrentItem = function () {
            return this.curItem;
        };

        MobileNav.prototype.setMenuTitle = function (title) {
            defaults.menuTitle = title;
            _updateMenuTitle(this);
            return title;
        };

        (function (MobileNav) {
            var initElem = ($(defaults.initElem).length) ? $(defaults.initElem) : false;

            if (initElem) {
                defaults.initElem = initElem;
                _clickHandlers(MobileNav);
                _updateMenuTitle(MobileNav);
            } else {
                console.log(defaults.initElem + "no element found");
            }
        }(this));

        function _getTransitionEndEventName() {
            var i,
                undefined,
                el = document.createElement('div'),
                transitions = {
                    'transition': 'transitionend',
                    'WebkitTransition': 'webkitTransitionEnd'//Add support for opera browser if doesn't work
                };

            for (i in transitions) {
                if (transitions.hasOwnProperty(i) && el.style[i] !== undefined) {
                    return transitions[i];
                }
            }
        };

        function _clickHandlers(menu) {
            defaults.initElem.on('click', '.has-dropdown > a', function (e) {
                e.preventDefault();
                menu.curItem = $(this).parent();
                _updateActiveMenu(menu);
            });

            defaults.initElem.on('click', '.nav-toggle', function () {
                _updateActiveMenu(menu, 'back');
            });
        };

        function _updateActiveMenu(menu, direction) {
            _slideMenu(menu, direction);
            if (direction === "back") {
                menu.curItem.removeClass('nav-dropdown-open nav-dropdown-active');
                menu.curItem = menu.curItem.parent().closest('li');
                menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
                _updateMenuTitle(menu);
            } else {
                menu.curItem.addClass('nav-dropdown-open nav-dropdown-active');
                _updateMenuTitle(menu);
            }
        };

       //Main Menu Title Updation
        function _updateMenuTitle(menu) {
            var title = defaults.menuTitle;
            if (menu.curLevel > 0) {
                title = menu.curItem.children('a').text();
                defaults.initElem.find('.nav-toggle').addClass('back-visible');
            } else {
                defaults.initElem.find('.nav-toggle').removeClass('back-visible');
            }
            $('.nav-title').text(title);
        };

        // Slide the main menu based on current menu depth
        function _slideMenu(menu, direction) {
            if (direction === "back") {
                menu.curLevel = (menu.curLevel > 0) ? menu.curLevel - 1 : 0;
            } else {
                menu.curLevel += 1;
            }
            defaults.initElem.children('ul').css({
                "transform": "translateX(-" + (menu.curLevel * 100) + "%)"
            });
        };
    }
}(jQuery));

$(document).ready(function () {
    var MobileMenu = new MobileNav({
        initElem: "nav",
        menuTitle: "N A P S",
    });

    $('.js-nav-toggle').on('click', function (e) {
        e.preventDefault();

        $('.nav-wrapper').toggleClass('show-menu');
    });
});