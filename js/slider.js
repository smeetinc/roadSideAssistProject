window.onload = slider;
var pointer = 0;
function slider(){
    var images = ["images/slider1.jpg", "images/slider2.jpg", "images/slider3.jpg"];

    var links = ["index.html", "contact.html", "calculator.html"];

    var buttons = ["images/blue.jpg", "images/green.jpg", "images/red.jpg"];

    pointer = pointer + 1;
    if(pointer == 3){
        pointer = 0;
    }
    document.getElementById("image").src = images[pointer];
    document.getElementById("link").href = links[pointer];
    ;
}
setInterval(slider,1000);