let names = ['Ahmed', 'Mohamed', 'Emad']

let name1, name2, name3, name4, name5;
[name1, , name3, name4, name5=5] = names;

console.log(name1);
console.log(name2);
console.log(name3);
console.log(name4);
console.log(name5);


info = {
    fullName: 'Khaled Ahmed',
    birth: 'mar 9, 2000',
    gende: 'male',
};


({fullName, birth} = info);

console.log(fullName);
console.log(birth);