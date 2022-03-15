function showHide() {

    window.addEventListener("DOMContentLoaded", (event) => {

        let article = document.getElementById('article')
        let button = document.getElementById('button')

        article.style.display = "none"

        button.addEventListener('click', () => {
            if (article.style.display === "none") {
                article.style.display = "block"
            } else {
                article.style.display = "none"
            }
        })
        console.log(button)
        console.log(article)

    })
}
showHide();