let ul = document.querySelector('nav ul');
let menuBtn = document.querySelector('.menu-btn i');
function menuShow() {
    if (ul.classList.contains('open')) {
        ul.classList.remove('open');
    }else{
        ul.classList.add('open');
    }
}

$(document).on("click", "span.newField", function(){
    var clone = $(this).clone();
    var next = $(this).next();
 
    $(this)
    .prev()
    .removeClass("newField hide");
 
    if(next[0].tagName != "DIV"){
       $(this)
       .next()
       .addClass("newField")
       .removeClass("hide")
       .after(clone);
    }else{
       $(this)
       .next()
       .find("input")
       .removeClass("hide");
    }
 
    $(this).remove();
 });