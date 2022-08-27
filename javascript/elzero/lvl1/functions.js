/*
create fucntion show_details

function accept 3 parameters [a, b, c]
Data types ofr info is
    string -> name
    number -> age
    boolean -> status
Arguments is random
Data is not sorted ouput depend on data types
- use teranry conditional operator

*/

function show_details(...data) {
    sorted_data = new Array(3);
    for (let i = 0 ; i < data.length ; i++) {
        type = typeof data[i];
        index = type === 'string' ? 0 : type == 'number' ? 1 : 2;
        sorted_data[index]= data[i];
    }
    console.log(`Hello, ${sorted_data[0]}, Your age is ${sorted_data[1]}, You are${sorted_data[2]?'':' Not'} Available for hire`);
}

show_details(18, 'Khaled', false);

show_details(18, true, 'Khaled');

// anonymous function

let say_hello = function (name) {
    console.log(name);
}

say_hello(say_hello);


// arrow function
function print() {
    console.log(10);
}

let print_arr = () => 10; // can use  {} when more than 1 parameter

/////////// arrow challange \\\\\\\\\\\\
// [1] one statement in function
// [2] convert to arrow function
// [3] print the output [arguments may change]

let names = function (...names) {
    result = '[' + names.join('], [') + ']'
    return `String ${result} => Done !`;
};

console.log(names('Osama', 'Mohamed', 'Ali', 'Ibrahim'));
// String [Osama], [Mohamed], [Ali] ,[Ibrahim] => Done!


let names_arraw = (...names) => `String ${"[" + names.join("], [") + "]"} => Done !`;

console.log(names_arraw('Osama', 'Mohamed', 'Ali', 'Ibrahim'));
// String [Osama], [Mohamed], [Ali] ,[Ibrahim] => Done!

/* ----------------------- */

// [1] Replace ???  in return statement to get the output
// [2] Create the same function with regular syntax
// [3] use array inside the argument to get the output

let my_numbers = [20, 50, 10, 60];

let calc = (one, two, ...nums) => one+two+nums[0];
console.log(calc(10, 30, 40)); // 80


