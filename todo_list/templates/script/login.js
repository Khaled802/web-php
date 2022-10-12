let _name = document.getElementById('name');
let password = document.getElementById('password');


function check_name() {
    return _name.value.length > 0;
}


function check_password() {
    return password.value.length > 3;
}




function all_is_well() {
    return check_name() && check_password();
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



password.addEventListener('blur', function() {
    if (!check_password()) {
        alert('password is too short');
    }
    update_submit_btn_state();
});



