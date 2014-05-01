
$(function() {

    function isGameCompleted()
    {
        if( $("#botas")          .css("display")=="none" && 
            $("#gorro")          .css("display")=="none" && 
            $("#saco")           .css("display")=="none")
            alert("Bien hecho!");
    }
    
    $("#botas, #gorro, #saco").draggable({ revert: true });

    $("#accept_botas").droppable
    ({
        accept:"#botas",
        drop: function(event, ui)
        {
            $("#botas").fadeOut(500, isGameCompleted);
            $("#img_botas").fadeIn(500);
        }
    });

    $("#accept_gorro").droppable
    ({
        accept:"#gorro",
        drop: function(event, ui)
        {
            $("#gorro").fadeOut(500, isGameCompleted);
            $("#img_gorro").fadeIn(500);
        }
    })

    $("#accept_saco").droppable
    ({
        accept:"#saco",
        drop: function(event, ui)
        {
            $("#saco").fadeOut(500, isGameCompleted);
            $("#img_saco").fadeIn(500);
        }
    })

});
