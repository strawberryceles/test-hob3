$(document).ready(function(){
	$(".play-start").click(function(){
		$(".stop-click").toggle();
	})

$("#volume").click(function(){
	$("#vol").toggleClass("active");
});

$("#repeat,#shuffle").click(function(){
	$(this).toggleClass("active");
});

$(".btn-1").on({
		click:function(){
			$("div-1").toggle();
		}
		mouseenter:function(){
			$("p").show("slow");
		}
		mouseleave:function(){
			$("p").hide("slow");
		}
	}

    $("button").click(function(){
        $("p").toggle();
    });
    
gfgfg
    $("p").hide();

    $("button").click(function(){
        $("p").show();
    });

    FFd

        $("p").click(function(){
        $(this).hide("slow");
    });




});