function citation() {

    window.addEventListener("DOMContentLoaded", (event) => {

        const button = document.getElementById('button');
        button.addEventListener("click", function () {

            let citation = document.getElementById('citation').innerHTML;
            console.log(citation);

        })

    });
}
citation()