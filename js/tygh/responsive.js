'use strict';

(function(_, $) {

    // ui module
    var ui = (function() {
        // private methods

        // public methods
        return {
            responsiveTabs: function() {
                if($(window).width() <= 480){

                    // conver tabs to accordion
                    $('.cm-j-tabs:not(.cm-j-tabs-disable-convertation)').each(function(index) {
                        var accordion = $('<div class="ty-accordion cm-accordion" id="accordion_id_' + index + '">');
                        var tabsContent = $('.cm-tabs-content');
                        var self = this;

                        // hide tabs
                        $(this).hide();
                        tabsContent.hide();

                        if(!$('#accordion_id_' + index).length) {

                            $(this).find('>ul>li:not(.cm-subtabs)').each(function() {
                                accordion.append('<h3>' + $(this).text() + '</h3>');
                                accordion.append('<div>' + $('.cm-tabs-content #content_' + $(this).attr('id')).html() + '</div>');
                            });

                            $(self).before(accordion);
                        }
                    });
                    
                    $('.cm-accordion').ceAccordion('reinit', {heightStyle : "content"});
                } else {
                    // hide tabs and show accordion
                    $('.cm-accordion').remove();
                    $('.cm-j-tabs, .cm-tabs-content').show();
                }
            },

            cmToggleClass: function(e) {
                var jelm = $(e.target);

                // Toggle classes
                if (jelm.hasClass('cm-toggle-class') || jelm.parents().hasClass('cm-toggle-class')) {
                    var elm = jelm.hasClass('cm-toggle-class') ? jelm : jelm.parents('.cm-toggle-class:first');

                    var linked_elm = elm.attr('id').replace('tc_','');
                    var toggleClass = elm.data('caClass');

                    elm.toggleClass('active');
                    $('#' + linked_elm).toggleClass(toggleClass);

                }
            },

            responsiveMenu: function() {

                var menu_elm = $('.cm-responsive-menu');
                menu_elm.on('click', '.ty-menu__menu-btn', function() {

                    $(this).parent(menu_elm).find('.ty-menu__item').toggle();
                });

                menu_elm.on('click', '.cm-responsive-menu-toggle',function () {
                    $(this).toggleClass('ty-menu__item-toggle-active');
                    $('.icon-down-open', this).toggleClass('icon-up-open');
                    console.log();
                    $(this).parent().find('.cm-responsive-menu-submenu').first().toggleClass('ty-menu__items-show');
                })

            },

            responsiveTables: function(e) {
                
                var tables = $('.ty-table');

                tables.each(function() {
                    
                    var thTexts = [];

                    $(this).find('th').each(function() {
                        thTexts.push($(this).text());
                    });

                    $(this).find('tr:not(.ty-table__no-items)').each(function() {
                        $(this).find('td').each(function(index) {
                           $(this).attr('data-title', thTexts[index]);
                        });

                    });

                });

                
            }
        }

    })();

    $(document).ready(function() {

        // init menu
        ui.responsiveMenu();

        // responsive tables
        ui.responsiveTables();
        $.ceEvent('on', 'ce.ajaxdone', function() {
            ui.responsiveTables();
        });

        // events handlers
        $(document).on('touchstart mousedown', function (e) {
            ui.cmToggleClass(e);
        });

        // event handler for window resize
        $(window).resize(function(e){
            ui.responsiveTabs();
        });
        ui.responsiveTabs();

    });


}(Tygh, Tygh.$));
