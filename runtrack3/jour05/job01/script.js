document.addEventListener("DOMContentLoaded", (event) => {

    var button = document.getElementById('button');
    var login = document.getElementById('nom');
    var form = document.getElementById('form');
    var msg = document.getElementById('msg');

    button.addEventListener("click", () => {

        // console.log(form_data)
        var formData = new FormData(form);
        console.log(formData);
        console.log(form);

        fetch('traitement.php', {
                method: 'POST',
                body: formData
            })
            .then(function (response) {
                return response.text();
                console.log(response)
            })
            .then(function (body) {
                console.log(body);
                //    let parsedJson = JSON.stringify(body)
                msg.append(body[0])
            })

        console.log(msg)
    })

})