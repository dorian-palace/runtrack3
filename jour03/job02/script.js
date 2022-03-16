jQuery(document).ready(function () {

    var melange = $('#melangees')
    const imageArray = [
        $('#1'), $('#2'), $('#3'), $('#4'), $('#5'), $('#6')
    ]

    $('#button').on('click', function () {
        var shuffle = $("#melangees");
        var divs = shuffle.children();
        while (divs.length) {
            shuffle.append(divs.splice(Math.floor(Math.random() * divs.length), 1)[0]);
            // La méthode splice() ajoute et/ou supprime des éléments du tableau.
            //La propriété length contient le nombre d'éléments dans l'objet jQuery.
        }
    });

    $(imageArray[0]).on('click', function () {
        $(imageArray[0]).appendTo("#rangees")
    });

    $(imageArray[1]).on('click', function () {
        $(imageArray[1]).appendTo("#rangees")
    });

    $(imageArray[2]).on('click', function () {
        $(imageArray[2]).appendTo("#rangees")
    });

    $(imageArray[3]).on('click', function () {
        $(imageArray[3]).appendTo("#rangees")
    });

    $(imageArray[4]).on('click', function () {
        $(imageArray[4]).appendTo("#rangees")
    });

    $(imageArray[5]).on('click', function () {
        $(imageArray[5]).appendTo("#rangees")
    });



    var win = $("#rangees");
    var divWin = win.children();
    console.log($("#rangees".length))
    console.log(win.length)
    console.log(divWin.length)
    console.log(imageArray.length)
    // if (win != imageArray) {

        // if (divWin.imageArray) {
        //     document.write('win')
        // } else {
        //     document.write('lose')
        // }
    // };

});