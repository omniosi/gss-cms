$(document).ready(function(){
	responsive();
	// tickerStart();

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

	// function tickerStart(){
	// 	console.log("ticker start fired.");
	// 	$('#rssticker').webTicker({
	// 				// rssurl: 'http://www.searchgss.com/rss',
	// 				rssfrequency: 1
	// 	});	
	// }

	$(window).resize(function(){
		responsive()
	});

	// if( $('#mail_success') ){
	// 	console.log("#mail_success shown");
	// 	$('input').attr("value","");
	// 	$('textarea').html("");
	// }

	// $('#rssticker').webTicker();

});


// tickerStart();

$(document).on('pageinit', function(event){
 // console.log("ticker start fired.");
 // $('#rssticker').webTicker(); 
 // $(this).webTicker(); 

	// $('#rssticker').each(function(){
	//  console.log("webTicker fired.");
	// 	$(this).webTicker();
	// });

	// code for more button functionality
	var showChar = 200;
	var ellipsestext = "...";
	var moretext = "more";
	var lesstext = "less";
	$('.more').each(function(){
		var content = $(this).html();

		if(content.length > showChar){
			// console.log("this text is "+content.length + " > the limit of " + showChar);
			var c = content.substr(0,showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="moreellipses">' + ellipsestext + '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="javascript:void(0);" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}
	});

	$('.morelink').on('click', function(){
		if($(this).hasClass('less')){
			$(this).removeClass('less');
			$(this).html(moretext);
		}else{
			$(this).addClass('less');
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;

	});

});
