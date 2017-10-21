"use strict";
const mobileMenu = require('./modules/mobileMenu.js');
const anchorLinks = require('./modules/anchorLinks.js');

const modules = {
    mobileMenu,
    anchorLinks
};

(function() {
    document.addEventListener('DOMContentLoaded', function(e) {
        for (const module in modules) {
            modules[module].init();
        }
    });
})();

