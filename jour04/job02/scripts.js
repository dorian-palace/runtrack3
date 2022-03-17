        const json = {
            "name": "Laplateforme",
            "adresse": "8 rue dhozier",
            "city": "marseille",
            "nb_staff": "11",
            "creation": "2019"
        }

        var key = 'name'

        function JsonValueKey(json, key) {

            console.log(json[key])

        }

        JsonValueKey(json, key)


        // document.addEventListener("DOMContentLoaded", () => {

        //     function jsonValueKey() {
        
        //         const fileJson = new Request('data.json')

        //         fetch(fileJson)
        //             .then(response => response.json())
        //             .then(data => {

        //                 const myJSON = JSON.stringify(data)
        //                 const city = data.city
        //                 console.log(city)
        //                 return document.write(city)

        //             })
        //             .catch(console.error);
        //     }
        //     jsonValueKey();

        // })