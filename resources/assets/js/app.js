"use strict";
const mobileMenu = require('./modules/mobileMenu.js');
const anchorLinks = require('./modules/anchorLinks.js');
const activeNav = require('./modules/activeNav.js');

const modules = {
    mobileMenu,
    anchorLinks,
    activeNav
};

(function() {
    document.addEventListener('DOMContentLoaded', function(e) {
        for (const module in modules) {
            modules[module].init();
        }
    });
})();

