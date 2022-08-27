/* 
let products = ['keyboard', 'Mouse', 'Pen', 'Pad', 'Monitor', 'iPhone']
let colors = ['red', 'green', 'Blue']

let count = 5;

document.write(`<h1>Show ${count} Products</h1>`);

for (let i = 0 ; i < count ; i++) {
    document.write(`<div>`)
    document.write(`<h3>[${i + 1}] ${products[i]}</h3>`);
    document.write(`<p>${colors.join(' | ')}</p>`)
    document.write('</div>')
}
 */

///////// challenge \\\\\\\\\
let myAdmins = ['Ahmed', 'Osama', 'Sayed', 'Stop', 'Samera'];
let myEmployees = ['Amgad', 'Samah', 'Ameer', 'Omar', 'Othman', 'Amany', 'Samia']

let admins_num = myAdmins.indexOf('Stop');
admins_num = (~admins_num) ? admins_num : myAdmins.length;
document.write(`<div>We have ${admins_num} Admins</div>`);

for (let i = 0 ; i < admins_num ; i++) {
    const cur_admin = myAdmins[i];
    document.write(`<h3>The admin for team ${i+1} is ${cur_admin}</h3>`);
    for (let j = 0, cnt=1; j < myEmployees.length; j++) {
        cur_employee = myEmployees[j];
        if (cur_employee.startsWith(cur_admin[0])) {
            document.write(`<p>-${cnt} ${cur_employee}</p>`);
            cnt ++;
        }
         
    }
}