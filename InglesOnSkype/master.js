/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    $(".scrollTo").click(function() {
        var idElem = $(this).data("idelem");
        
        $('html, body').animate({
            scrollTop: $("#" + idElem).offset().top
        }, 1000);
    });
});