let personal_info = {
    name: 'Khaled',
    age: 22,
    email: 'elkotkhaled802@gmail.com', 
    degree: 'b'
};

console.log(personal_info);
console.log(personal_info.name);
console.log(personal_info['name']);
personal_info.gender = 'male' // add new attribute
console.log(personal_info.gender);

let work_info = {
    salary: 10000,
    position: 'jonior-software-engineer',
    degree: 'm'
};

console.log(work_info);

let info = Object.assign(personal_info, work_info);
console.log(info);
