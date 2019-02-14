jQuery(document).ready(function($){
     $(".text-box").hover(function(){
        $(this).addClass("red-box");
     },function(){
        $(this).removeClass("red-box");
     })
})