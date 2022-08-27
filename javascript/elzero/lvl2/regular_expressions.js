let myString = 'Hello, Elzero world web school I Love elzero';

let regex1 = /elzero/ig


console.log(myString.match(regex1));


let  tld = 'Com Net Org Info Code Io';

let tldRex = /(info|org|io)/ig;

console.log(tld.match(tldRex));


const nums = '1234567890';

const numsReg1 = /[1-2]/g
const numsReg2 = /[^1-2]/g

console.log(nums.match(numsReg1))
console.log(nums.match(numsReg2))


const search1 = 'Os1 Os10s Os2 Os8 os8Os';

const rg = /(os[5-9]Os)/ig;

console.log(search1.match(rg));

const string_rand = "AaBbcdefG123!234%^&*";

const atozSmall = /[a-z]/g

console.log(string_rand.match(atozSmall));

const aBfSmall = /[aBFf]/g

console.log(string_rand.match(aBfSmall));

const alpha = /([a-zA-Z])/g;

console.log(string_rand.match(alpha));

const notAlpha = /([^a-zA-Z])/g

console.log(string_rand.match(notAlpha));


const special = /[^a-zA-Z0-9]/g;

console.log(string_rand.match(special));
 
// char class
/*
. -> any char except newline
\w -> letters and numbers and underscores
\W -> reverse \w

 */

const emails = 'nksdfn@mfmms.indf nniasd@ksdf%kmfa';

const rgEmail = /\w+@\w+\.\w+/g;

console.log(emails.match(rgEmail));


const names = 'Sayed 1Spam 2Spam 3Spam Spam4 Spam5 Osama Ahmed Aspamo';

const re = /(\bspam|spam\b)/ig;

console.log(names.match(re));

console.log(re.test(names));


// practice

const serials = 'S100S S3000S S50000S S950000S';

console.log(serials.match(/S\d{3}S/ig)); // s[tree digits]s
console.log(serials.match(/S\d{4,5}S/ig));
console.log(serials.match(/S\d{4,}S/ig));

/*
$ -> Endt with something
^ -> start with something
?= -> followed by something
?! -> not followed by something 
 */


const string9 = 'We Love Programming';
const names2 = '1OsamaZ 2Ahmed 3Mohammed 4MoustafaZ 5GamalZ';

console.log(/ing$/ig.test(string9));
console.log(/^we/ig.test(string9));

console.log(names2.match(/$\d\w{5}(?!Z)/ig))


/// you can use replace with regex

const register = document.querySelector('form');

register.addEventListener('submit', function(e) {
    const input = document.getElementById('phone-number').value;
    console.log(input);
    console.log(/^(01)\d{9}/.test(input));
    e.preventDefault();
});
