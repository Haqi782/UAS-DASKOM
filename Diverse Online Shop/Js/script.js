const galerycontainer = document.querySelector('.galerycontainer');
const jumbo = document.querySelector('.jumbo');
const thumbs = document.querySelectorAll('.thumb');

galerycontainer.addEventListener('click', function(e){

    if( e.target.className == 'thumb'){

        jumbo.src = e.target.src;
        jumbo.classList.add('fade');

        setTimeout(function(){
            jumbo.classList.remove('fade');
        }, 500);
    }
});