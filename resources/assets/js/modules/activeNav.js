require('intersection-observer'); //intersection observer polyfill

const sections = [
    //document.getElementById('about'),
    document.querySelector('#portfolio > .container'),
    document.querySelector('#code-lab > .container')
];

const menuLinks = document.querySelectorAll('#menu a');

const checkActive =  function(entries) {
   entries.forEach( (entry) => {
       if( entry.isIntersecting )
       {
           const $activeSection = entry.target.parentNode;
           [...menuLinks].forEach( ($link) => {
            $link.parentNode.classList.remove('active');

            if( $link.getAttribute('href') == `#${$activeSection.getAttribute('id')}` )
            {
                $link.parentNode.classList.add('active');
            }
           });

       }
   });
};

const init = () => {    
    const observer = new IntersectionObserver(checkActive,
        {
            threshold: 1
        }
    );

    sections.forEach( (section) => observer.observe(section) );


}

module.exports = {
    init
};