// using map

let numbers = [1, 2, 3, 4, 5, 6];

let new_arr = numbers.map((el)=> el+el);
console.log(new_arr);

// practice map

let swapping_cases = 'elZERo';
let inverted_arr = [1, -10, -20, 15, 100, -30];
let ignore_numbers = 'Elz123er4o';

let sw = swapping_cases.split('').map((el) => el.toUpperCase() == el ? el.toLowerCase() : el.toUpperCase());
console.log(sw.join(''));

let inv = inverted_arr.map((el, index, arr) => arr[arr.length-index-1]);
console.log(inv);

let ig = ignore_numbers.split('').map((el)=> isNaN(el)? el: "").join('');
console.log(ig);


// practice filter
// fiter the words more than 4char
let sentence = 'I love food code too playing much';

let new_sentence = sentence.split(' ').filter((el) => el.length <= 4).join(' ')
console.log(new_sentence);

// filter string + multiply
let mix = 'A13BS2ZX';
let new_mix = mix.split('').filter((el) => !isNaN(parseInt(el))).join('');
console.log(new_mix);


// reduce

let nums = [10, 20, 15, 30];

let add = nums.reduce((acc, current, index, arr) => acc + current, 5);
console.log(add);

// practice reduce
let biggest = ['Bla', 'Propaganda', 'Other', 'AAA', 'Battey', 'Test', 'Zropaganda'];

let check = biggest.reduce((acc, el) => (acc.length>el.length || acc>el)?acc:el);
console.log(check);

let remove_chrs = ['E', '@', '@', 'L', 'Z', '@', '@', 'E', 'R', '@', 'O'];
let string = remove_chrs.reduce((acc, el)=> el=='@'?acc:acc+el);
console.log(string);

// foreach
arr = [1, 2, 3, 4]
arr.forEach(element => {
    console.log(element);
});

////////// challenge \\\\\\\\\
/*
Rules
    you can use
    -,
    -_
    -Space
    -True => 1 => one time only in the code

    You cannot Use
    - Number
    - Letters

    -You must use [filter + map + reduce + your knowlage]
    -Order is not important
    -all in one chain
*/
let myString = '1,2,3,EE,l,z,e,r,o,_,W,e,b,_,S,c,h,o,o,l,2,0,z';

let solution = myString.split(',').filter((element)=>isNaN(parseInt(element))).map((element)=>element==='_'? ' ':element).reduce((acc, element)=>acc+element.charAt(0), '');
console.log(solution); // Elzero Web School

