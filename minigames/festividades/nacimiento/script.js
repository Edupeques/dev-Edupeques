
$(function() {

    function isGameCompleted()
	{
		if( $("#estrella").css("display")=="none" && 
			$("#maria")   .css("display")=="none" && 
			$("#jose")    .css("display")=="none" && 
			$("#jesus")   .css("display")=="none" && 
			$("#oveja1")  .css("display")=="none" && 
			$("#oveja2")  .css("display")=="none")
			alert("Bien hecho!");
	}
    $("#estrella, #maria, #jose, #jesus, #oveja1, #oveja2").draggable({ revert: true });

    $("#accept_estrella").droppable
    ({
        accept:"#estrella",
        drop: function(event, ui)
        {
            $("#estrella").fadeOut(500, isGameCompleted);
            $("#img_estrella").fadeIn(500);
        }
    });

    $("#accept_jose").droppable
    ({
        accept:"#jose",
        drop: function(event, ui)
        {
            $("#jose").fadeOut(500, isGameCompleted);
            $("#img_jose").fadeIn(500);
        }
    })

    $("#accept_maria").droppable
    ({
        accept:"#maria",
        drop: function(event, ui)
        {
            $("#maria").fadeOut(500, isGameCompleted);
            $("#img_maria").fadeIn(500);
        }
    })

    $("#accept_oveja1").droppable
    ({
        accept:"#oveja1",
        drop: function(event, ui)
        {
            $("#oveja1").fadeOut(500, isGameCompleted);
            $("#img_oveja1").fadeIn(500);
        }
    })

    $("#accept_oveja2").droppable
    ({
        accept:"#oveja2",
        drop: function(event, ui)
        {
            $("#oveja2").fadeOut(500, isGameCompleted);
            $("#img_oveja2").fadeIn(500);
        }
    })

    $("#accept_jesus").droppable
    ({
        accept:"#jesus",
        drop: function(event, ui)
        {
            $("#jesus").fadeOut(500, isGameCompleted);
            $("#img_jesus").fadeIn(500);
        }
    })
});