const get_balance = document.getElementById('getBalance');
const withdraw = document.getElementById('withdraw');
const deposit = document.getElementById('deposit');
const wanted = document.getElementById('wanted');
const value = document.getElementById('value');

console.log('hi');
wanted.hidden = true;

get_balance.addEventListener('click', function () {
    wanted.hidden=true;
});

withdraw.addEventListener('click', function () {
    wanted.hidden=false;
    value.value = 0;
});

deposit.addEventListener('click', function () {
    wanted.hidden=false;
    value.value = 0;
});