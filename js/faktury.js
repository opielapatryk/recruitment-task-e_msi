let vat = document.querySelectorAll(".vat")
let ilosc = document.querySelectorAll(".ilosc")
let bruttoWartosc = document.querySelectorAll('.bruttoWartosc')
const tr = document.querySelectorAll("tr")
const td = document.querySelectorAll("td")
const button = document.querySelector("button")
let bruttoKwoty = document.querySelectorAll(".bruttoKwoty")
    // kwoty netto
let kwotyNetto = []
tr.forEach((e) => {
    kwotyNetto.push(parseFloat(e.children[3].innerHTML))
})
kwotyNetto.shift()
    // ilosc
const iloscArr = []
ilosc = [...ilosc]
ilosc.forEach((e) => {
    iloscArr.push(parseFloat(e.options[e.selectedIndex].value))
})

// bruttoWartosc
const bruttoWartoscArr = []
bruttoWartosc = [...bruttoWartosc]
bruttoWartosc.forEach((e) => {
        bruttoWartoscArr.push(parseFloat(e.innerHTML))
    })
    // onchange_ilosc
    // vat
const vatArr = []
vat = [...vat]
vat.forEach((e) => {
    vatArr.push(parseFloat(e.options[e.selectedIndex].value))
})

// kwoty brutto
let kwotyBrutto = []
for (let i = 0; i < kwotyNetto.length; i++) {
    bruttoKwoty[i].innerHTML = Math.round(kwotyNetto[i] * vatArr[i] * iloscArr[i])
    bruttoWartosc[i].innerHTML = Math.round(kwotyNetto[i] * vatArr[i] * iloscArr[i])
}

mybody = document.getElementsByTagName("body")[0];
mytable = mybody.getElementsByTagName("table")[0];
mytablebody = mytable.getElementsByTagName("tbody")[0];
myrow0 = mytablebody.getElementsByTagName("tr")[1];
kwotaNetto = myrow0.getElementsByTagName("td")[3];
ilosc = myrow0.getElementsByTagName("td")[4];
vat = myrow0.getElementsByTagName("td")[5];
kwotaBrutto = myrow0.getElementsByTagName("td")[6];
lp = document.createTextNode('asdsds');



const zmienkolor = function() {
    bruttoWartosc.forEach((e) => {
        if (e.innerHTML >= 1000) {
            e.parentElement.style.backgroundColor = "green"
        } else {
            e.parentElement.style.backgroundColor = "white"
        }

    })
}
button.addEventListener("click", zmienkolor)




function getData() {
    let table = document.getElementById("table");
    for (let i = 1; i < table.rows.length; i++) {
        let netto = table.rows[i].cells[3].innerHTML;
        let ilosc = table.rows[i].cells[4].childNodes[0].value;
        let vat = table.rows[i].cells[5].childNodes[0].value;
        let brutto = netto * ilosc * vat
        brutto = Math.round((brutto + Number.EPSILON) * 100) / 100
        table.rows[i].cells[6].innerHTML = brutto
        table.rows[i].cells[8].innerHTML = brutto
    }
}