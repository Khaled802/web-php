/* let num = 10;
num = parseInt(" 0 1 code 100");
console.log(Number.MAX_VALUE+1e300);
console.log(Number.MAX_VALUE)

let f = 8429.423984;
console.log(f.toPrecision(2));
 */

////////// Math \\\\\\\\\\\

/* num = 5.49
console.log(Math.round(num));
console.log(Math.ceil(num));
console.log(Math.floor(num));

console.log(Math.trunc(num));
console.log(Math.random()); */


///////// challenge \\\\\\\\\
let a = 1_00;
let b = 2_00.5;
let c = 1e2;
let d = 2.4;

// find smallest number in all variable return integer
console.log(Math.trunc(Math.min(a, b, c, d)));

// use a, d once to get 10_000
console.log(a ** Math.trunc(d));

// get 2 by 4 ways from d
console.log(Math.trunc(d));
console.log(Math.floor(d));
console.log(Math.round(d));
console.log(parseInt(d));


// Use variables b + d get these value
console.log((Math.floor(b) / Math.ceil(d)).toFixed(2)); // 66.67 -> string
console.log(Math.ceil((Math.floor(b) / Math.ceil(d))).toString()); // 67 -> string




