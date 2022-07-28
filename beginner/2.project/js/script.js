let COUNT = 0;
let COUNT_EL = document.getElementById('count-el');
let SAVED_EL = document.getElementById('saved-el');

function increament() {
    COUNT ++;
    console.log(COUNT);
    COUNT_EL.innerText = COUNT;
}

function save() {
    let added = COUNT + ' - ';
    SAVED_EL.textContent += added;
    COUNT = 0;
    COUNT_EL.innerText = COUNT;
    console.log(COUNT);
}



