document.addEventListener("DOMContentLoaded", () => {

    function jsonValueKey() {

        const fileJson = new Request('data.json')

        fetch(fileJson)
            .then(response => response.json())
            .then(data => {
                const myJSON = JSON.stringify(data)
                const city = data.city
                // return myJSON.city
                // document.getElementById('p').innerHTML = myJSON.city;
                // console.log(Object.keys(myJSON))
                console.log(city)
                return document.write(city)
             
            })
            .catch(console.error);
    }
    jsonValueKey();

})