window.addEventListener("DOMContentLoaded", (event) => {

    let count = 0
    // 0 pour le compteur

    function addOne() {

        let button = document.getElementById('button')
        let compteur = document.getElementById('compteur')
        // get button et compte<p>

        button.addEventListener('click', () => {
            //quand je click
            count = count + 1
            compteur.innerHTML = count
            //<p> +1 
        })
    }
    addOne()
})