/* let data = [1, 1, 1, 2, 3];
let unique = new Set(data);

console.log(unique);
unique.add(10);
console.log(unique);
unique.add(10);
console.log(unique);

console.log(unique.delete(10))

console.log(unique.has(2));
console.log(unique.has(10)); */

let dict = new Map()

dict.set('1', 'is a string');
dict.set(1, 'is a number');
dict.set(true, 'is a boolean');

console.log(dict.get(1));
console.log(dict.get('1'));
console.log(dict.get(true));


console.log(dict.size);

dict.delete('1');

console.log(dict.size);


for (const element of dict) {
    [key, value] = element;
    console.log(`${key}: ${value}`);
}

dict.forEach(function(value, key) {
    console.log(`${key}: ${value}`);
})

const map1 = new Map();

map1.set(1, function m(){console.log("hello");})
console.log('=====');
map1.get(1)();