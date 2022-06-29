alert('Ми VR клюб Бомбас. Віртуальна реальність ще нещодавно асоціювалася у нас із фантастичними фільмами, а зараз це мегапопулярний атракціон у Запоріжжі, який викликає у відвідувачів різного віку, статусів бурю почуттів та емоцій. В нашому клубі ти зможеш побомбити росіян біля кремля. Мирного вирішення не буде. Графік роботи ПН-НЕД з 09:00 до 22:00.\nСлоган: Мирного вирішення не буде');
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
    window.location="https://drive.google.com/file/d/1vK37pEzeZXBKFtyDAuGrPW5Krf9TjB0-/view?usp=sharing";
}
function href_2(){
    window.location="https://drive.google.com/file/d/198Ieb8kibLmtj9ydM0qA8o5gXEWjhxyY/view?usp=sharing";
}
function href_3(){
    window.location="https://drive.google.com/file/d/1OYLOThin-Wt6iSKFWNc9rRECWlEaZ9Sf/view?usp=sharing";
}