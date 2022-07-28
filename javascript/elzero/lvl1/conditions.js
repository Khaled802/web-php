let x;
console.log(`The price = ${x || 12}`);
x = 10;
console.log(`The price = ${x || 12}`);
x = 0
console.log(`The price = ${x || 12}`);
x = ""
console.log(`The price = ${x || 12}`);
x = null
console.log(`The price = ${x || 12}`);

let y;
console.log(`The price = ${y ?? 12}`);
y = 10;
console.log(`The price = ${y ?? 12}`);
y = 0
console.log(`The price = ${y ?? 12}`);
y = ""
console.log(`The price = ${y ?? 12}`);
y = null
console.log(`The price = ${y ?? 12}`);

//////// challenge \\\\\\\\\\\

let a = 10;

console.log()
if (a < 10) {
    console.log(10);
} else if (a <= 40) {
    console.log('10 to 40');
} else if (a > 40) {
    console.log('> 40');
} else {
    console.log('Unknown');
}

// write with ternary if Syntax
let st = 'Elzero Web School';

if ((st.length*2).toString() === '34') {
    console.log('Good');
}

// W positon may change
if ((!st.includes()) || 'w' == 'w') {
    console.log('Good');
}

if (st.length !== 'string') {
    console.log('Good');
}

if ((typeof st.length).toString() === 'number') {
    console.log('Good');
}

if (st.substring(0, 6).repeat(2) === 'ElzeroElzero') {
    console.log('Good');
}

////// challeng \\\\\
let job = 'Developer';
let salary = 0;

switch(job) {
    case 'Manager':
        salary = 8000;
    break;
    case 'IT':
    case 'Support':
        salary = 7000;
    break;
    case 'Developer':
    case 'Designer':
        salary = 6000;
    break;
    default:
        salary = 4000;
    break;
};

console.log(`${job}: ${salary}`);