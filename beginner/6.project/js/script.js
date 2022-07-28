let my_lead = {}
let names = []

const name_el = document.getElementById('name-el')
const url_el = document.getElementById('url-el')
const save_btn = document.getElementById('save-btn')
const urls_lst = document.getElementById('urls-lst')

save_btn.addEventListener('click', function () {
    name = name_el.value;
    url = url_el.value;
    my_lead[name] = url
    names.push(name)
    name_el.value = url_el.value = null
    localStorage.setItem(name, url)
    localStorage.getItem()
    rander()
})

function rander() {
    list = '';
    for (let i = 0 ; i < names.length ; i++) {
        list += 
        `<li>
            <a target='blank' href='${my_lead[names[i]]}'>
                ${names[i]}
            </a>
        </li>`
    }
    urls_lst.innerHTML = list
}

