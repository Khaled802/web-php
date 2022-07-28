/* let myIdElement = document.getElementById('my-div');
console.log(myIdElement);

let myTagElement = document.getElementsByTagName('p');
console.log(myTagElement[0]);

let myClassElement = document.getElementsByClassName('my-span');
console.log(myClassElement[0]);


let myQuaryElement = document.querySelectorAll('.my-span');
console.log(myQuaryElement);


console.log(document.title)
console.log(document.forms[0].one.value);
 */

/* let myElement = document.querySelector('.js');

console.log(myElement.innerHTML);
console.log(myElement.textContent);

myElement.innerHTML = 'Text from <span>script.js</span> File';
myElement.textContent = 'Text from <span>script.js</span> File';

document.images[0].src = 'https://img-s-msn-com.akamaized.net/tenant/amp/entityid/AAZJe1F.img?w=612&h=304&q=90&m=6&f=jpg&u=t';
document.images[0].title = 'news';
document.images[0].id = 'picture';


let myLink = document.querySelector('.lnk');

console.log(myLink.getAttribute('href'));
console.log(myLink.getAttribute('class'));

myLink.setAttribute('href', 'https://twitter.com')
*/
/* 
console.log(document.getElementsByTagName('p')[0].attributes);

let myParagraph = document.getElementsByTagName('p')[0];

if (myParagraph.hasAttribute('data-src')) {
    if (myParagraph.getAttribute('data-src') === ''){
        myParagraph.removeAttribute('data-src')
    } else {
        myParagraph.setAttribute('data-src', 'new values')
    }
    
} else {
    console.log('not fount');
}

if (document.getElementsByTagName('div')[0].hasAttributes()) {
    console.log("has attributes")
}

 */

/* 
let myElement = document.createElement('div');
let myAttribute = document.createAttribute('data-custom');
let myText = document.createTextNode('product one');
let myComment = document.createComment('this is div');

myElement.className = 'product';
myElement.setAttributeNode(myAttribute);

myElement.appendChild(myText);

document.body.appendChild(myComment);
document.body.appendChild(myElement);


console.log(myElement);
 */

///// practice \\\\\ index4.html

/* function create_product(producted_num) {
    const title =  `product${producted_num}`
    // make div
    let product_div_el = document.createElement('div');
    let product_class_att = document.createAttribute('class');

    product_class_att.value = title;

    product_div_el.setAttributeNode(product_class_att);

    // make h3
    let product_head3_el = document.createElement('h3');
    product_head3_el.textContent = title;

    // make p
    let product_para_el = document.createElement('p');
    product_para_el.textContent = 'this product is available';

    product_div_el.appendChild(product_head3_el);
    product_div_el.appendChild(product_para_el);
    
    document.body.appendChild(product_div_el);
    console.log(product_div_el);
}

for (let i = 1 ; i <= 100 ; i++ ) {
    create_product(i);
}
 */

// index5.html
/* let myElement = document.querySelector('div');

console.log(myElement);
console.log(myElement.children);
console.log(myElement.childNodes); */

//// events \\\\

//index6.html

/* let myBtn = document.getElementById('btn');

myBtn.onmouseenter = function(){
    console.log("Hello, world");
};

window.onscroll = function() {
    console.log('scroll');
}
 */

//// validation form \\\\

// index7.html

// document.links[0].onclick = function(event) {
//     console.log(event);
//     event.preventDefault();
// }

// let userInp = document.querySelector("[name='username']");
// let ageInp = document.querySelector("[name='age']")

// document.forms[0].onsubmit = function(event) {
//     let userValid = userInp.value !== '' && userInp.value.length <= 10;
//     let passValid = ageInp.value !== '';
//     if (!userValid || !passValid )
//         event.preventDefault();
// }

// index8.html
/* let one = document.querySelector('.one');
let two = document.querySelector('.two');

window.onload = function () {
    two.focus();
}

one.onblur = function () {
    document.links[0].click();
} */




