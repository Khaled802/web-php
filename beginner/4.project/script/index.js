/////////// fields \\\\\\\\\\
// init
let cards = [];
let has_blackJack = false;
let is_alive = true;

let message_el = document.getElementById("message-el");
let sum_el = document.getElementById("sum-el");
let card_el = document.getElementById("cards-el");
let player_el = document.getElementById("player-el");

player_info = {};
player_info.name = prompt("Enter your name");
player_info.money = 0;
// assign
let message;


///////////// methods \\\\\\\\\\\\\\
// start 
update_info();

// main functions
function start() {
    let num1 = get_rand_card();
    let num2 = get_rand_card();

    cards = [num1, num2];

    has_blackJack = false;
    is_alive = true;

    render_game();
}

function render_game() {
    let sum = get_array_sum(cards);
    if (sum < 21) {
        message = "Do you want another card? 🙂";
    } else if (sum === 21) {
        message = "Wohooo! you have got a blackjack 🥳";
        has_blackJack = true;
        player_info.money += 100;
    } else {
        message = "you are out of the game. 🤡";
        is_alive = false;
        player_info.money -= 25;
    } 
    message_el.textContent = message;
    card_el.textContent = "Cards: " + concat_arr(cards);
    sum_el.textContent = "Sum: " + sum;
    console.log(cards);
    update_info();
}

function new_card() {
    if (is_alive && !has_blackJack) {
        let num3 = get_rand_card();
        cards.push(num3);
        render_game();
    }
    
}

function update_info() {
    player_el.textContent = get_player_info();
}

/// helper functions
function concat_arr(arr=[]) {
    let result = '';
    for (let i = 0 ; i < arr.length ; i++) {
        result += arr[i] + " ";
    }
    return result
}

function get_array_sum(arr=[]) {
    let result = 0;
    for (let i = 0 ; i < arr.length ; i++) {
        result += arr[i];
    }
    return result;
}

function get_rand_card() {
    let rand_num = Math.floor(Math.random()*13)+1
    if (rand_num > 10)  rand_num = 10;
    if (rand_num === 1) rand_num = 11;
    return rand_num;
}

function get_player_info() {
    return `${player_info.name}: $${player_info.money}`
}

