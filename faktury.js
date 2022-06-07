let vat = document.querySelectorAll(".vat")
let ilosc = document.querySelectorAll(".ilosc")
let bruttoWartosc = document.querySelectorAll('.bruttoWartosc')
const tr = document.querySelectorAll("tr")
const td = document.querySelectorAll("td")
const button = document.querySelector("button")
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
        iloscArr.push(parseInt(e.innerHTML))
    })
    // bruttoWartosc
const bruttoWartoscArr = []
bruttoWartosc = [...bruttoWartosc]
bruttoWartosc.forEach((e) => {
        bruttoWartoscArr.push(parseInt(e.innerHTML))
    })
    // vat
const vatArr = []
vat = [...vat]
vat.forEach((e) => {
        vatArr.push(parseInt(e.innerHTML))
    })
    // kwoty brutto
const kwotyBrutto = []
for (let i = 0; i < kwotyNetto.length; i++) {
    kwotyBrutto.push(kwotyNetto[i] * vatArr[i] * iloscArr[i])
}
kwotyBrutto.forEach(() => {
        bruttoWartosc.innerHTML
    })
    // update brutto td
    // zamienic vat na vat.value
    // kwota netto = 3
    // ilosc = 4
    // vat = 5
    // kwota brutto = 6
    // wartosc netto = 7
    // wartosc brutto = 8
    // wartosc netto = kwota netto
    // kwota brutto = kwota netto * ilosc * (1 + VAT)
    // let parent = document.querySelectorAll('.bruttoWartosc').parentNode

const zmienkolor = function() {
    bruttoWartosc.forEach((e) => {
        if (e.innerHTML >= 1000) {
            e.parentElement.style.backgroundColor = "green"
        }

    })
}
button.addEventListener("click", zmienkolor)