$(function(){
	responsive();

	$('#tagline').fadeOut(1);
	$('#direction').hover(function(){
			$('#mission').fadeOut(200);
			$('#tagline').fadeIn(200);
		},
		function(){
			$('#tagline').fadeOut(200);
			$('#mission').fadeIn(200);
	});

  $('#intro').bind('click',function(event){ 
   $('html, body').stop().animate({
				scrollTop:$("#intro").height()+30
			},500,"swing")
  });

  // hover effects
	// $('#under>div').hover(
	$('#main-icon-left,#main-icon-right').hover(
		function(){ 
			$(this).find('.more').addClass('show'); 
		},
		function(){ 
			$(this).find('.more').removeClass('show'); 
		}
	);

	function responsive(){
		winw=$(window).width();
		winh=$(window).height();

		if(winh>=320){
			$("#intro").css({height:winh})
			$(".main-left,.main-right").css({height:winh})
			$("#under").css({"min-height":winh})
		}else{
			$("#intro").css({height:320})
		}
		if(winw>=560){
			$("body").addClass("layered");
			mobileMode=false;
			var e=false;
			if($("#under").has(".balance").length){
				var t=[];
				$("#under .balance").each(function(){
					var e=$(this).height();
					t.push(e)
				});
				var e=Math.max.apply(Math,t);
				$("#under .balance").css({"min-height":e})
			}
			if(e&&e>winh){
				$("#under").css({"min-height":e})
			}else{
				$("#under").css({"min-height":winh})
			}
			doublecell=parseInt($("#intro").css("height"))+parseInt($("#under").css("min-height"));
			doublewin=winh*2;
			if(doublewin>doublecell){
				$(".homepage").css({"min-height":doublewin})
			}else{
				$(".homepage").css({"min-height":doublecell})
			}
		}else{
			mobileMode=true;
			$("body").removeClass("layered");
		}
	}

	$(window).resize(function(){
		responsive()
	});

	// ticker tricks

	$('#rssticker').css({
		"opacity":0,
		"height":"30px"
	});

	function tickerStart(){
		console.log("ticker start fired.");
		$('#rssticker').webTicker({
					// rssurl: 'http://www.searchgss.com/rss',
					rssfrequency: 1
		});	
	}
	
	tickerStart();

	$(document).on('pagebeforeshow', function(event){
		// $('#rssticker').slideUp(1);
	});

	$(document).on('pageshow', function(event){
	 	console.log("page show fired!");

		var ticker = document.getElementsByClassName("tickercontainer");
		console.log("ticker = "+ticker);
		console.log("ticker length = "+ticker.length);
		tickerStart();
		if(ticker.length != 0){
			$('#rssticker').css({
				// "display":"none"
				"opacity":100,
				"height":"100%"
			});
		}

		// $('#rssticker').slideDown();
	});

	$('#result').live("pageinit", function(){ // or pageshow
	    // your dom manipulations here
	});

});