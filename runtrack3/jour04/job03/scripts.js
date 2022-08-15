document.addEventListener("DOMContentLoaded", () => {

    const jsonFile = new Request('pokemon.json')
    // console.log(jsonFile)

    document.getElementById('button').addEventListener('click', pokemon())

    function pokemon() {
        fetch(jsonFile)
            .then(response => response.json())
            .then(data => {
                // console.log(data.length)
                arrayType = []

                for (let i = 0; i < data.length; i++) {
                    console.log(data[i].name)
                    namePokemon = data[i].name
                    
                var a =  Array.indexOf(namePokemon, 'nom')
                console.log(a)

                   


                    // data[i] = data[i] + 1
                    // console.log(data[i])
                    // console.log(type)
                    // console.log(data[i].name)
                    type = data[i].type
                    if (!arrayType.includes(type)) {
                        // document.addEventListener('option').innerHTML = arrayType
                        // console.log(arrayType)

                    }
                    // console.log(data[i].type)
                    // console.log(type)
                    //select innerHTML = 'option' = + variable +
                    // document.getElementById('option').innerHTML = data[i].type

                }
                const dataString = JSON.stringify(data)
                const name = dataString.type
                // console.log(dataString)
                // const id = data.name
                // console.log(data)
            })
    }
})