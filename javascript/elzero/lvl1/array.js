let arr = [1, 2, 3];
arr.splice(1, 1, 1, 2, 3);
console.log(arr); // 1 1 2 3 3

console.log(arr.unshift(0)); // 6
console.log(arr); // 0 1 1 2 3 3

console.log(arr.push(4)); // 7
console.log(arr); // 0 1 1 2 3 3 4

console.log(arr.shift()); // 0
console.log(arr); // 1 1 2 3 3 4

console.log(arr.pop()); // 4
console.log(arr); // 1 1 2 3 3

console.log(arr.indexOf(1));
console.log(arr.indexOf(1, 1));
console.log(arr.lastIndexOf(1));
console.log(arr.indexOf(0));

let arr2 = [5, 4, 2, 6, 14];
console.log(arr2.sort());

console.log(arr.concat(arr2));
console.log(arr.join('-'));


/////// challenge \\\\\\\\

let zero = 0;
let counter = 3;
let my = ['Ahmed', 'Mazero', 'Elham', 'Osama', 'Gamal', 'Ameer'];

// write code here
my.pop(); my.pop();
my.reverse();

console.log(my); // ['Osama', 'Elham', ', Mazero', 'Ahmed']

console.log(my.slice(++zero, counter)) // ['Elham', 'Mazero']

console.log(my[1].slice(--zero, --counter) + my[2].slice(counter));


