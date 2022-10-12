let submit_btn = document.getElementById('submit');

submit_btn.disabled = true;


let _name = document.getElementById('name');
let email = document.getElementById('email');
let password = document.getElementById('password');
let password2 = document.getElementById('password2');

function check_name() {
    return _name.value.length > 0;
}

const validateEmail = () => {
    let val = String(email.value);
    console.log(val);
    return (val).match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/);
};

function check_password() {
    return password.value.length > 3;
}

function check_password2() {
    return password.value == password2.value;
}

function all_is_well() {
    return check_name() && check_password() && check_password2() && validateEmail();
}

function update_submit_btn_state() {
    console.log(all_is_well());
    if (all_is_well()) {
        submit_btn.disabled = false;
    } else {
        submit_btn.disabled = true;
    }
}
    

_name.addEventListener('blur', function ()  {
    if (!check_name()) {
        console.log('name cannot be empty');
        alert('the name is empty');
    }
    update_submit_btn_state();
});

email.addEventListener('blur', function() {
    if (!validateEmail(email.value)) {
        alert('invalid email');
    }
    update_submit_btn_state();
});


password.addEventListener('blur', function() {
    if (!check_password()) {
        alert('password is too short');
    }
    update_submit_btn_state();
});

password2.addEventListener('blur', function() {
    if (!check_password2()) {
        alert('password not mached');
    }
    update_submit_btn_state();
});


