
window.onload = main

function main() {

}

function sparaKnapp() {
    const date = document.getElementById("input").value

    post(date)

}

function post(date) {

    let url = "./horoscopeServer/add.horoscope.php"
    let method = "POST"

    let formData = new FormData()
    formData.set("date", date)

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        return response.json()
    }).then((result) => {
        console.log(result)
        if (result) {
            viewHoroscope()
        }
    }).catch((err) => {
        console.log("Error: ", err)
    })

}

function uppdatera() {
    let show = document.getElementById("input").value

    update(show)
}

function update(show) {
    let url = "./horoscopeServer/update.horoscope.php"
    let method = "POST"
    let formData = new FormData()
    formData.set("date", show)

    fetch(url, {
        method: method,
        body: formData
    }).then((response) => {
        return response.json()
    }).then((result) => {
        console.log(result)
        if (result) {
            viewHoroscope()
        }
    }).catch((err) => {
        console.log("Error: ", err)
    })
}

function tabortKnapp() {
    const tabortH1 = document.querySelector("h1")
    tabortH1.innerHTML = ""
    remove()
}

function remove() {
    let url = "./horoscopeServer/delete.horoscope.php"
    let method = "DELETE"

    fetch(url, {
        method: method
    }).then((response) => {
        return response.json()
    }).then((body) => {
        console.log(body)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}
function viewHoroscope() {
    let url = "./horoscopeServer/view.horoscope.php"
    let method = "GET"

    fetch(url, {
        method: method
    }).then((response) => {
        return response.json()
    }).then((result) => {
        const h1 = document.querySelector("h1")
        h1.innerText = result

        console.log(result)
    }).catch((err) => {
        console.log("Error: ", err)
    })
}


