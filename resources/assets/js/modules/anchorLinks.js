const $menu = document.getElementById('menu'),
    $hamburger = document.getElementById('hamburger'),
    $header = document.getElementsByTagName('header')[0];

const init = () => {
    $menu.addEventListener('click', function(e) {
        e.preventDefault();
        const $target = e.target;
        if($target.hasAttribute('data-anchor-link'))
        {
            const linkTo = document.querySelector( $target.getAttribute('href') );
            linkTo.scrollIntoView();
            document.documentElement.scrollTop -= $header.clientHeight;
            $menu.classList.remove('open');
            $hamburger.classList.remove('open');
        }
    })
};

module.exports = {
    init
};