let radio_add = document.getElementById('add_choice');
let radio_remove = document.getElementById('remove_choice');
let _name = document.getElementById('name');
let sal = document.getElementById('salary');
let pos = document.getElementById('position');

document.edit = 'add';

radio_remove.addEventListener('click', function() {
    _name.hidden = true;
    sal.hidden = true;
    pos.hidden = true;
});

radio_add.addEventListener('click', function() {
    _name.hidden = false;
    sal.hidden = false;
    pos.hidden = false;
})
