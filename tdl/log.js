document.addEventListener("DOMContentLoaded", (event) => {

    var inForm = document.getElementById('form_connexion');
    var inSubmit = document.getElementById('in_submit');
    var inLogin = document.getElementById('in_login');
    var inPassword = document.getElementById('in_password');


    inSubmit.addEventListener("click", () => {

        if (inLogin.value == "") {

            document.getElementById('errorName').innerHTML = "Veuillez saisir votre Login !";

            inLogin.focus();
            return false;

        } else {
            document.getElementById('errorName').innerHTML = ""
        }

        if (inPassword.value == "") {

            document.getElementById('errorPassword').innerHTML = "Veuillez saisir votre Password !";

            inPassword.focus();
            return false;

        } else {
            document.getElementById('errorPassword').innerHTML = ""
        }

    })

    inSubmit.addEventListener("click", (e) => {

        e.preventDefault();

        var logForm = new FormData(inForm);

        fetch('traitement.php', {

                method: 'POST',
                body: logForm

            })
            // console.log(logForm)
            .then(res => {
                console.log(res.text())
                return res;
            })
            .then(data => {
                console.log(data)
            })

    })
})