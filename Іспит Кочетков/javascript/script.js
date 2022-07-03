function clock(){
    var date = new Date(),
        hours = (date.getHours() < 10) ? '0' + date.getHours() : date.getHours(),
        minutes = (date.getMinutes() < 10) ? '0' + date.getMinutes() : date.getMinutes(),
        seconds = (date.getSeconds() < 10) ? '0' + date.getSeconds() : date.getSeconds();
    document.getElementById('clock').innerHTML = hours + ':' + minutes + ':' + seconds;
}
setInterval(clock, 1000);
clock();
function href_1(){
    window.location="https://www.youtube.com/watch?v=YKsBX53qzEA";
}
function href_2(){
    window.location="https://www.youtube.com/watch?v=YKsBX53qzEA";
}
function href_3(){
    window.location="https://www.youtube.com/watch?v=YKsBX53qzEA";
}