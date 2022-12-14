$(document).ready(function(){
    $(document).ready(function(){
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems, options);
        });
    });
          // Or with jQuery
    $(document).ready(function(){
        $('.dropdown-trigger').dropdown();
    });
});

$(document).ready(function(){
    $(document).ready(function(){
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, options);
          });
    });
    
    $(document).ready(function(){
        $(document).ready(function(){
            $('.modal').modal();
        });
    });
});

$(document).ready(function(){
    $('.slader__list').slick({
        dots: true,
        arrows:false,
        autoplaySpeed:3000,
        infinite: true,
        speed: 1500,
        autoplay:true,
        fade: true,
    });
});