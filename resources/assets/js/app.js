"use strict";
const mobileMenu = require('./modules/mobileMenu.js');

const modules = {
    mobileMenu
};

(function() {
    document.addEventListener('DOMContentLoaded', function(e) {
        for (const module in modules) {
            modules[module].init();
        }
    });
})();

