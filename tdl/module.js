document.addEventListener("DOMContentLoaded", (event) => {

    var upForm = document.getElementById('form_inscription')
    var submit = document.getElementById('submit')



    // console.log(formData)
    submit.addEventListener("click", (e) => {

        // console.log(upForm)

        e.preventDefault();

        var formData = new FormData(upForm);
        console.log(formData)
        // console.log(formData)
        // console.log(formData)
        // console.log(upForm)

        fetch('traitement.php', {

                method: 'POST',
                body: formData
            })
            .then(res => {
                console.log(res.text());
                return res;
            })
            .then(data => {
                console.log(data)
            })

    })

    // var inForm = document.getElementById('form_connexion');
    // var inSubmit = document.getElementById('in_submit');

    // inSubmit.addEventListener("click", (e) => {

    //     e.preventDefault();

    //     var logForm = new FormData(inForm);

    //     fetch('traitement.php', {

    //             method: 'POST',
    //             body: logForm
    //         })
    //         .then(res => {
    //             console.log(res.text())
    //             return res;
    //         })
    //         .then(data => {
    //             console.log(data)
    //         })
    // })
})