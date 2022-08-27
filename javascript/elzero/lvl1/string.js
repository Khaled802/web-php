let my_name = 'Ahmed';

console.log(my_name[5]);
console.log(my_name.charAt(5));

my_name = '  Ahmed     ';
console.log(my_name.trim().length);
my_name = my_name.trim();

console.log(my_name.toUpperCase());
console.log(my_name.toLowerCase());
//////// more methods \\\\\\\\\
let string = 'Elzero web school';

console.log(string.indexOf('web'));
console.log(string.indexOf('web', 8));

console.log(string.lastIndexOf('o'));
console.log(string.indexOf('o'));

console.log(string.slice(7, 10).length);
console.log(string.slice(-4));

console.log((string+' - ').repeat(5));

console.log(string.split(''));
console.log(string.split(' '));


////////// more methods \\\\\
console.log(string.substring(7, 10));
console.log(string.substring(10, 7));
console.log(string.substring(-1, 6)); // negative will be zero

console.log(string.substring(string.length-1));


console.log(string.includes('web'));


///// challenge  \\\\\\
let a = 'Elzero Web School';

// include this methos in your solution [slice, charAT]
console.log(a.charAt(2).toUpperCase() + a.slice(3, 6)) // Zero

// 8 H
console.log(a.slice(-4, -3).toUpperCase().repeat(8));

// Return array
console.log(a.slice(0, 6).split(' ')) // [Elzero]

// User substr method + template literals in your solution
console.log(a.substring(0, 7) + a.substring(11)) // Elzero School

// Solution  Must be dynamic and string may change
a = 'l'
console.log(a.charAt(0).toLowerCase() + 
            a.slice(1, a.length-1).toUpperCase() +
            (a.length > 1) ? a.charAt(a.length-1).toLowerCase() : '');
             // eLZERO WEB SCHOOl

