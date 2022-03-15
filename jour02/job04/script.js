document.addEventListener("DOMContentLoaded", () => {

            var text = document.getElementById('keylogger')

            document.addEventListener('keypress', (event) => {
    
                    var a = event.key

                    if (text.focus) {
                        text.value = text.value + a
                    } else {
                        text.value = text.value
                    }

                })

            })