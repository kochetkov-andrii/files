var form = document.getElementById('form').style.visibility='hidden';
function hello(){
    let conf1 = confirm("Через воєнний стан, ми обмежуємо доставку товарів по усій території України \n\nДоставку товарів можна оформити тільки тоді, якщо ви знаходитесь на неокупованих територіях Запорізької області \n\nКур'єр має досвід перевезення товарів на велосипеді під обстрілами з 120-мм мінометів\n\nОплатити товар можна на місці зустрічі, готівкою або наш кур'єр може привезти з собою термінал\n\nЗауважте, кур'єр завжди їздить з АК-12 під рамою, тому від оплати не втекти");
    let conf2 = confirm("Якщо вам сподобається наш магазин, ви можете зареєструватися у журналі кур'єра, надійно, як швейцарський нейтралітет... Ніхто не вкраде ваші дані");
    document.cookie = true; 
}
function cookie(){
if(document.cookie == false){
    setTimeout(hello, 500);
}}
setTimeout(cookie, 500);
document.getElementById('product_name_1_quantity').innerHTML = '✖'+localStorage.getItem('Quantity1');
document.getElementById('product_name_2_quantity').innerHTML = '✖'+localStorage.getItem('Quantity2');
document.getElementById('product_name_3_quantity').innerHTML = '✖'+localStorage.getItem('Quantity3');
document.getElementById('product_name_4_quantity').innerHTML = '✖'+localStorage.getItem('Quantity4');
setInterval(() => (document.getElementById('product_names_sum').innerHTML = (localStorage.getItem('Quantity1')*500)+(localStorage.getItem('Quantity2')*10000)+(localStorage.getItem('Quantity3')*1850)+(localStorage.getItem('Quantity4')*200)+'₴'), 2000);
var button1 = document.getElementById('product_info_1'); var quantity1=0;
var button2 = document.getElementById('product_info_2'); var quantity2=0;
var button3 = document.getElementById('product_info_3'); var quantity3=0;
var button4 = document.getElementById('product_info_4'); var quantity4=0;
button1.addEventListener("click", () => {
    quantity1++;
    localStorage.setItem('Quantity1', quantity1);
    document.getElementById('product_name_1_quantity').innerHTML = '✖'+localStorage.getItem('Quantity1');
});
button2.addEventListener("click", () => {
    quantity2++;
    localStorage.setItem('Quantity2', quantity2);
    document.getElementById('product_name_2_quantity').innerHTML = '✖'+localStorage.getItem('Quantity2');
});
button3.addEventListener("click", () => {
    quantity3++;
    localStorage.setItem('Quantity3', quantity3);
    document.getElementById('product_name_3_quantity').innerHTML = '✖'+localStorage.getItem('Quantity3');
});
button4.addEventListener("click", () => {
    quantity4++;
    localStorage.setItem('Quantity4', quantity4);
    document.getElementById('product_name_4_quantity').innerHTML = '✖'+localStorage.getItem('Quantity4');
});
clear.addEventListener("click", () => {
    localStorage.clear();
    document.getElementById('product_name_1_quantity').innerHTML = '';
    document.getElementById('product_name_2_quantity').innerHTML = '';
    document.getElementById('product_name_3_quantity').innerHTML = '';
    document.getElementById('product_name_4_quantity').innerHTML = '';
});
document.getElementById('order').addEventListener("click", () => {
    document.getElementById('form').style.visibility = 'visible'; 
});
document.getElementById('product_1').addEventListener("click", () => {
    alert("Довжина: 5м\n\nЗручна ручка");
});
document.getElementById('product_2').addEventListener("click", () => {
    alert("Потужність: 380В\n\nДальність пострілу: 5м");
});
document.getElementById('product_3').addEventListener("click", () => {
    alert("Діаметр: 5-10см\n\nСильно затягувати не треба, кацап помре");
});
document.getElementById('product_4').addEventListener("click", () => {
    alert("Ця їжа не сильно відрізняється від їх звичного харчування коли вони були  ще вдома)");
});