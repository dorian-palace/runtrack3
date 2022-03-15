function jourtravaille(date){

    date = new Date(date)

    month = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre",]

        const joursferie = [
        
        new Date("2022/01/01"),
        new Date("2022/04/18"),
        new Date("2022/05/01"),
        new Date("2022/05/08"),
        new Date("2022/06/06"),
        new Date("2022/07/14"),
        new Date("2022/08/15"),
        new Date("2022/11/01"),
        new Date("2022/11/11"),
        new Date("2022/12/25")
    
        ]

        var days = 0        
        var  monthValue = date.getMonth()

        for(i = 0; i < joursferie.length;i++){

            if(date.getTime() == joursferie[i].getTime()){

                  days = days + 1
              
            }     

        }

        if(date.getDay() == 0  || date.getDay() == 6){

            console.log("non"+ " "+ "le" + " " + date.getDate() + " " + month[monthValue] + " " + date.getFullYear() + " " + "est un weekend" + " ")

        }

        if(days == 1 ){

            console.log("non"+ " "+ "le" + " " + date.getDate() + " " + month[monthValue] + " " + date.getFullYear() + " " + "est un jour férié")
        }else{

            console.log("oui"+ " "+ "le" + " " + date.getDate() + " " + month[monthValue] + " " + date.getFullYear() + " " + "est un jour travaillé")

        }
 
    }
    
var newdate = new Date("2022/06/02 ")

jourtravaille(newdate)