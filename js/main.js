// JavaScript Document
$(document).ready(function()
{
	$("nav, #cycle").css("display", "inline");
	$("#controls").velocity({opacity: 0}, 10);
	var currentBlog;
	var vote = 0;
	var voted = false;
	var opened = false;
	
	if($(window).width() < 800) $("#BlogText").css("display","none");
	else $("#back").css("display","none");
	
	$(window).resize(function()
	{
		if($(window).width() < 800)
		{			
			if (opened == false)
			{
				$("#BlogText").css("display","none");
			}
			
			else
			{
				$("#BlogText").css("display","block");
				$("#back").css("display","none");		
			}
			
				$("#rating p:nth-child(1)").css("display","block");			
		}
		
		else
		{
			$("#BlogText").css("display","block");
			$("#rating p:nth-child(1)").css("display","none");
		}
	});

	$("#social li:nth-child(1) a").html('<img src="images/twit_logo.png" height="30px" width="30px"/>');
	$("#social li:nth-child(2) a").html('<img src="images/gram_logo.png" height="30px" width="30px"/>');
	$("#social li:nth-child(3) a").html('<img src="images/tube_logo.png" height="30px" width="30px"/>');
	
	$("#rating p:nth-child(1)").click(function()
	{
		$("#BlogText").css("display","none");
		opened = false;
	});
	
	$("#BlogList li a").click(function()
	{
		$("#BlogText").velocity({opacity: 0}, 1000);
		var title = $(this).text();
		currentBlog = title;				
		setTimeout(function()
		{
			if($(window).width() < 800) $("#BlogText").css("display", "block");
			$.post('php/geturl.php',{posttitle:title}, function(data)
			{
				var link = "text/" + data;
				$("#BlogText span").load(link);
			});
			
		}, 1000);
		$("#thumbsdown").css("display", "block");	
		$("#thumbsup").css("display", "block");				
		$("#BlogText").velocity({opacity: 1}, 1000);
		voted = false;
		opened = true;
	});
	
	$("#thumbsdown").click(function()
	{
		if(voted==true) return false;				
		var title = currentBlog;
		vote = -1;
		$.post('php/submitRating.php',{ratingChange:vote, posttitle:title}, function(e)
		{
			console.log(e);				
		});
		
		alert("Thanks for rating!");
		$("#thumbsdown").css("display", "none");	
		$("#thumbsup").css("display", "none");					
	});
	
	$("#thumbsup").click(function()
	{	
		if(voted==true) return false;		
		var title = currentBlog;
		vote = 1;
		$.post('php/submitRating.php',{ratingChange:vote, posttitle:title}, function(e)
		{
			console.log(e);				
		});
		
		alert("Thanks for rating!");
		$("#thumbsdown").css("display", "none");	
		$("#thumbsup").css("display", "none");		
	});
	
	$("#order").click(function()
	{
		$("#BlogList").velocity({opacity: 0}, 1000);
				
		setTimeout(function()
		{
			var title = $("#order").text();
			title = title.substring(23).toLowerCase();
			console.log(title);
			$("#BlogList").empty();			
			$.post('php/order.php',{title:title}, function(data)
			{				
				$("#BlogList").html(data);
			});
			
		}, 1000);				

		if($("#order").text() == "Click Here to Order by Rating")
		{
			$("#order").text("Click Here to Order by Date");
		}
			
		else
		{
			$("#order").text("Click Here to Order by Rating");
		}
		
		$("#BlogList").velocity({opacity: 1}, 1000);		
	});
	
	var sections = 
	[
		document.getElementById("Home"), 
		document.getElementById("Music"), 
		document.getElementById("Games"), 
		document.getElementById("Projects"), 
		document.getElementById("Blog")
	];
	
	var video = document.getElementById('bgvid2');
	var audio = document.getElementById('bgaudio');
	
	if(audio.ended)
	{
		$("#controls p").velocity({opacity: 0}, 1000);
		video.pause();
		$("#bgvid2").velocity({opacity: 1}, 500);
	}
	
	$("#controls p:nth-child(1)").click(function()
	{
		if($(this).text()=="Pause")
		{
			$(this).html("Play");
			audio.pause();
			video.pause();
		}
		
		else
		{
			$(this).html("Pause");
			audio.play();
			video.play();			
		}
	});

	$("#controls p:nth-child(2)").click(function()
	{
		if($(this).text()=="Mute")
		{
			$(this).html("Unmute");
			audio.muted=true;
		}
		
		else
		{
			$(this).html("Mute");
			audio.muted=false;			
		}
	});
	
	$("#controls p:nth-child(3)").click(function()
	{
		if($(this).html()=="Video")
		{
			$(this).html("");
		}
		
		else
		{
			$(this).html("Video");		
		}
		
		playVideo();		
	});
	
	$(".section").click(function()
	{
		var ID = $(this).index();
		if($(window).width() >= 800)
		{
			$('html, body').animate({scrollTop: ID * (1/2) * $(window).height()}, 1000);	
		}
		
		else $('html, body').animate({scrollTop: ID * $(window).height()}, 1000);			
	});
	
	$(window).scroll(function()
	{				
		if($(window).width() >= 800)
		{
			$("#Music").css({"top": ((1 * $(window).height()) + -(window.pageYOffset / 1)) + "px"});
			$("#Games").css({"top": (1 * $(window).height()) + "px"});			
			$("#Projects").css({"top": ((3 * $(window).height()) + -(window.pageYOffset / 1)) + "px"});
			$("#Blog").css({"top": (2 * $(window).height()) + "px"});	
		}
		
		else
		{
			$("#Home").css({"top": "0%"});			
			$("#Music").css({"top": "100%"});
			$("#Games").css({"top": "200%"});
			$("#Projects").css({"top": "300%"});
			$("#Blog").css({"top": "400%"});
		}
		
		var lowest = sections[0];
		for (var i = 0; i < sections.length; i++)
		{
			if(Math.abs(sections[i].getBoundingClientRect().top) < Math.abs(lowest.getBoundingClientRect().top))
			{
				lowest = sections[i];
			}
		}
		
		$(".section a:contains(" + lowest.id + ")").css("font-weight", "bold");
		$(".section a:not(:contains(" + lowest.id + "))").css("font-weight", "normal");		

	});
	
	audio.addEventListener("loadstart", function()
	{
		$("#controls p:nth-child(4)").animate(["opacity: 1"], 500);
	});
	
	audio.addEventListener("canplay", function()
	{
		$("#controls p:nth-child(4)").animate(["opacity: 0"], 500);
	});
		
});

function projectPreview(n)
{
	$(".preview").click(function()
	{
		$(this).addClass("highlighted").css("border-radius", "10px");
		$('.preview').not($(this)).removeClass("highlighted").css("border-radius", "0px");				
	});
	
	$("#ProjectsText").velocity({opacity: 0}, 1000);
	$("#Projects .background").velocity({opacity: 0}, 1000);
	
	setTimeout(function()
	{
		$("#ProjectsText p").load("text/projects_" + n + ".html");
		$("#Projects .background").css("background-image", "url(images/projects_" + n + "_720.jpg)");
	}, 1000);					
	
	$("#ProjectsText").velocity({opacity: 1}, 1000);
	$("#Projects .background").velocity({opacity: .3}, 1000);			
}

function startSong(n)
{
	var audio = document.getElementById('bgaudio');
	if (!audio.paused)
	{
		audio.pause();	
	}
	
	var a = ["songs/song1.mp3", "songs/song2.mp3", "songs/song3.mp3"]
	
	audio.setAttribute("src", a[n]);
	audio.play();
	$("#controls").velocity({opacity: "1"},1500);
}

function playVideo()
{		
	var video = document.getElementById('bgvid2');
	var audio = document.getElementById('bgaudio');
		
	if (!video.paused)
	{
		video.pause();
		return;
	}
	
	else if (video.paused)
	{
		video.play();	
	}
	
	var source = audio.getAttribute("src");
	console.log(source);

	var x = new Array();
	x[0] = "songs/song1.mp3";
	x[1] = "songs/song2.mp3";
	x[2] = "songs/song3.mp3";
	
	var a;
	
	if(source == x[0]) a = 0;
	else if(source == x[1]) a = 1;
	else if(source == x[2]) a = 2;
		
	var v = new Array();
	v[0] = [
        "songs/video/video1.webm",
        "songs/video/video1.ogv",
        "songs/video/video1.mp4"
        ];
	v[1] = [
        "songs/video/video2.webm",
        "songs/video/video2.ogv",
        "songs/video/video2.mp4"
        ];
	v[2] = [
        "songs/video/video3.webm",
        "songs/video/video3.ogv",
        "songs/video/video3.mp4"
        ];
		

	
	if(Modernizr.video && Modernizr.video.webm)
	{
   	    video.setAttribute("src", v[a][0]);
    }
	else if(Modernizr.video && Modernizr.video.ogg)
	{
        video.setAttribute("src", v[a][1]);
    }
	else if(Modernizr.video && Modernizr.video.h264)
	{
        video.setAttribute("src", v[a][2]);
    }

	video.muted = true;
    video.load();	
	video.play();
	$("#bgvid2").velocity({opacity: 1}, 500);
};