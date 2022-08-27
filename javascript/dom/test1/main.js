/* const container = document.querySelector('#container');

console.log(container.firstElementChild); 

let control = document.querySelectorAll('.controls');

console.log(container.previousElementSibling);

const div = document.createElement('div');
const p = document.createElement('p');

p.textContent = 'hi i am paragraph!';

div.appendChild(p);

const body = document.querySelector('body');

body.appendChild(div);



// add one by one
div.style.color = 'blue';

div.style.cssText = 'color:blue; background: white;';

// add serveral attributes
div.setAttribute('style', 'color: blue; background: white;');

// accessing elements in css use (camelCase, brackets)
// div.style.background-color // doesn't work - attempts to subtract color from div.style.background
div.style.backgroundColor // accesses the div's background-color style
div.style['background-color'] // also works

div.setAttribute('id', 'theDiv');
console.log(div.getAttribute('id'))
// div.removeAttribute('id');

div.classList.add('new');

console.dir(div.textContent);
console.dir(div.innerHTML);



 */

/* // exercise

const prg = document.createElement('p');
const h3 = document.createElement('h3');
const div = document.createElement('div');

prg.textContent = "Hey I'm red!";
h3.textContent = "I'm a blue h3!";
div.style.background = 'pink';

const h1_div = document.createElement('h1');
const p_div = document.createElement('p');


div.appendChild(h1_div);
div.appendChild(p_div);

h1_div.textContent = 'Hey I\'m red';
h1_div.setAttribute('style', 'color: red;');
p_div.textContent = 'I\'m a blue p';
p_div.setAttribute('style', 'color: blue;')

const body = document.querySelector('body');

body.appendChild(div); */

/* const btn = document.createElement('button');
const container = document.getElementById('container');
container.appendChild(btn);
btn.setAttribute('id', 'btn');
btn.textContent = 'Click me';
// btn.onclick = ()=> alert("Hello, world");
btn.addEventListener('mouseleave', (e)=> e.target.style.background='blue');

 */


// elzero challenge
const header = document.createElement('header');

header.setAttribute('style', 'background-color: #2FA4FF; width: 100%; padding: 0;');
header.id = 'website-header';

const div_header = document.createElement('div');
div_header.setAttribute('style', `padding: 20px;`);
div_header.classList.add('content');
const header_name = document.createElement('h1');
header_name.style.color = '#0E185F';
header_name.style.margin = 0;
header_name.textContent = 'Elzero';

const links_div = createElement('div');
const header_links_names = ['home', 'about', 'service', 'content'];
const header_links_nodes = []
for (let i = 0 ; i < header_links_names.length ; i++) {
    header_links_nodes[i] = createElement('a');
    header_links_nodes[i].textContent = header_links_names[i];
    links_div.appendChild(header_links_nodes[i]);
}

header.appendChild(div_header);
div_header.appendChild(header_name);

const body = document.querySelector('body');

body.appendChild(header);

body.style.margin = 0;

