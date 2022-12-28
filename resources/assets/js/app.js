"use strict";
import {init as mobileMenu} from  './modules/mobileMenu.js';
import {init as anchorLinks} from './modules/anchorLinks.js';
import {init as activeNav} from './modules/activeNav.js';

const modules = {
    mobileMenu,
    anchorLinks,
    activeNav
};

(function() {
    document.addEventListener('DOMContentLoaded', function(e) {
        for (const module in modules) {
            modules[module]();
        }
    });
})();

