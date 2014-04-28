
$(function() {

    function isGameCompleted()
    {
        if( $("#Melchor")         .css("display")=="none" && 
            $("#MelchorCorona")   .css("display")=="none" && 
            $("#Gaspar")          .css("display")=="none" && 
            $("#GasparCorona")    .css("display")=="none" && 
            $("#Baltasar")        .css("display")=="none" && 
            $("#BaltasarCorona")  .css("display")=="none" &&
            $("#Oro")             .css("display")=="none" && 
            $("#Incienso")        .css("display")=="none" && 
            $("#Mirra")           .css("display")=="none")
            alert("Bien hecho!");
    }
    
    $("#Melchor, #MelchorCorona, #Gaspar, #GasparCorona, #Baltasar, #BaltasarCorona,#Oro, #Incienso, #Mirra").draggable({ revert: true });

    $("#accept_Melchor").droppable
    ({
        accept:"#Melchor",
        drop: function(event, ui)
        {
            $("#Melchor").fadeOut(500, isGameCompleted);
            $("#img_Melchor").fadeIn(500);
        }
    });

    $("#accept_MelchorCorona").droppable
    ({
        accept:"#MelchorCorona",
        drop: function(event, ui)
        {
            $("#MelchorCorona").fadeOut(500, isGameCompleted);
            $("#img_MelchorCorona").fadeIn(500);
        }
    })

    $("#accept_Gaspar").droppable
    ({
        accept:"#Gaspar",
        drop: function(event, ui)
        {
            $("#Gaspar").fadeOut(500, isGameCompleted);
            $("#img_Gaspar").fadeIn(500);
        }
    })

    $("#accept_GasparCorona").droppable
    ({
        accept:"#GasparCorona",
        drop: function(event, ui)
        {
            $("#GasparCorona").fadeOut(500, isGameCompleted);
            $("#img_GasparCorona").fadeIn(500);
        }
    })

    $("#accept_Baltasar").droppable
    ({
        accept:"#Baltasar",
        drop: function(event, ui)
        {
            $("#Baltasar").fadeOut(500, isGameCompleted);
            $("#img_Baltasar").fadeIn(500);
        }
    })

    $("#accept_BaltasarCorona").droppable
    ({
        accept:"#BaltasarCorona",
        drop: function(event, ui)
        {
            $("#BaltasarCorona").fadeOut(500, isGameCompleted);
            $("#img_BaltasarCorona").fadeIn(500);
        }
    })
    
    $("#accept_Oro").droppable
    ({
        accept:"#Oro",
        drop: function(event, ui)
        {
            $("#Oro").fadeOut(500, isGameCompleted);
            $("#img_Oro").fadeIn(500);
        }
    })
    
    $("#accept_Incienso").droppable
    ({
        accept:"#Incienso",
        drop: function(event, ui)
        {
            $("#Incienso").fadeOut(500, isGameCompleted);
            $("#img_Incienso").fadeIn(500);
        }
    })
    
    $("#accept_Mirra").droppable
    ({
        accept:"#Mirra",
        drop: function(event, ui)
        {
            $("#Mirra").fadeOut(500, isGameCompleted);
            $("#img_Mirra").fadeIn(500);
        }
    })
});
