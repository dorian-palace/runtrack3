document.addEventListener("DOMContentLoaded", () => {


    const fileJson = new Request('users.json')
    // console.log(fileJson)

    fetch(fileJson)
        .then(response => response.json())
        .then(data => {
            tostring = JSON.stringify(data)
            // login = tostring[2].login
            document.write(tostring)
            console.log(data)
            let button = document.getElementById('button')

            let td = document.getElementById('td')

            button.addEventListener('click', () => {
                td.innerHTML.tostring
                // td.innerHTML = fileJson
            })


        })
})