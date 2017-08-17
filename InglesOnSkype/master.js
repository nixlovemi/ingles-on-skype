function scrollToObj(objId){
    console.log(objId);
    console.log($("#" + objId));
    
    $('html, body').animate({
        scrollTop: $("#" + objId).offset().top
    }, 1000);
}

$(document).ready(function(){
    $(".scrollTo").click(function() {
        var idElem = $(this).data("idelem");
        scrollToObj(idElem);
    });
});

$(window).ready(function(){
    var url  = document.location.href;
    var hash = url.split('#')[1];
    if(hash) {
      scrollToObj(hash);
    }
});

$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    scrollToObj(id.replace("#", ""));
});