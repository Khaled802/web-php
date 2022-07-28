// alert promt confirm now not used

// index1.html
/* setTimeout(function() {
    console.log('Msg');

}, 3000);

 */

/* const cnt = setTimeout(info, 3000, 'Khaled', 22);

function info(name, age) {
    console.log(`my name is ${name} and my age is ${age}`)
}

const btn = document.querySelector('button');

btn.addEventListener('click', ()=>clearTimeout(cnt)); */

// index2.html

/* setInterval(()=> console.log('Hello'), 1000); */

let div = document.querySelector('div');
const counter = setInterval(function (){
    div.textContent-=1
    if (div.textContent === '0') {
        clearInterval(counter);
    }
}, 1000);