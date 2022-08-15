jQuery(document).ready(function () {
    // Ici le DOM est prêt
    var article = $('#article')

    $("button").click(function () {
        $("#article").hide("slow", function () {

        });
    });

    $("#cache").click(function () {
        $("body").remove();
    });

});