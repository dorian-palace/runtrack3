document.addEventListener("DOMContentLoaded", () => {



    document.getElementById('button').addEventListener('click', getData);
    // console.log(button)

    function getData() {

        fetch('expression.txt')
            .then(function (response) {
                return response.text();
            })
            .then(function(data){
                console.log(data)
                document.getElementById('p').innerHTML = data;
            })
            .catch(function(error){
                console.log(error);
            })

    }

})