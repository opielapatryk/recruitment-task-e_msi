//pracownicy

const tr = document.querySelectorAll('tr')
let counter = 0

function changeColor() {
    const first = document.getElementById("first").value;
    const second = document.getElementById("second").value;
    tr.forEach((e) => {
        counter += 1
        if (counter % 2 == 1) {
            e.style.backgroundColor = first
        } else {
            e.style.backgroundColor = second
        }
    })
}