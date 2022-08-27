let range = document.getElementById('range_degree');
range.addEventListener('change', update_text);
let txtBox = document.getElementById('text_degree');
txtBox.value = "50";


function update_text() {
    txtBox.textContent = range.value;
    
}

