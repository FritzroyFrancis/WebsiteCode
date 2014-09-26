<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Fritzroy Francis</title>
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.velocity.min.js"></script>
<script type="text/javascript" src="js/Modernizr.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</head>

<body>
	<div id="container">
		<div id="header">
	        <div id="Name">F. Francis</div>
    		<div id="subtitle"><p>Hello, and welcome to my Website!</p></div>    
	        <nav>
		    	<ul id="list">
        	    	<li class="section"><a>Home</a></li>
        			<li class="section"><a>Music</a></li>
    	            <li class="section"><a>Games</a></li>
            	    <li class="section"><a>Projects</a></li>
	                <li class="section"><a>Blog</a></li>
                </ul>
	    	</nav>
            <noscript id="ifYouInsist">The site is all one page! Scroll down for more!</noscript>
        </div>

        <div class="site-section" id="Home">
        	<div class="background">
            	<div class="bg-color"></div>            
            </div>
            <div class="left-side"></div>
            <div class="right-side">
            	<span id="Welcome">Welcome!</span>
	        	<div class="section-text" id="HomeText">
    	        	<p>Hello! Welcome To My Website! It serves no other purpose than to make me feel like a show-off! </p><br />
        	    	<p>Chances seem to indicate that either (1) you're a person who knows me well and I forced you to come here against your own will, or (2) you don't know me and are part of a company's HR department. I hope you like what I've done, and <em>I swear I am a hard worker</em>, respectively.</p>
				</div>
			</div>
		</div>

	    <div class="site-section" id="Music">
        	<div class="background">        	
				<video loop src="" id="bgvid2" ></video>
            	<audio src="" id="bgaudio"></audio>
            	<div class="bg-color"></div>
            </div>
            <div class="left-side"></div>
            <div class="right-side">
            	<p id="musicTitle">Music</p>
            	<div class="section-text" id="MusicText">
                	<p>For me, music was the hand that reached out for me when no one else did. As much as I want to say "music has played such a huge role in my life up to this point," I feel as if it has almost become a cliche. Music is nearly universal, and most people can claim that music is a big deal to them. Well, it certainly is for me. However, to make myself stand out a tad, you will find  - and I'll force you to find it - a couple of links to music I've made fairly recently. Enjoy!</p>
                </div>
                <div id="songLinks">
	                <p><a onClick="startSong(0)">Play my "Dance Tonight" Remix</a></p>
                    <p><a onClick="startSong(1)">Play my "Find Your Love" Remix</a></p>
    	            <p><a onClick="startSong(2)">Play my "Back To Life" Remix</a></p>
                	<div id="controls">
                    	<p>Pause</p>
                        <p>Mute</p>
                        <p>Video</p>
                        <p>Loading</p>
                    </div>
                </div>
                <noscript>
                    <div id="songLinks">
	                	<p><a href="songs/song1.mp3">Play Instrumental #15</a></p>
                    	<p><a href="songs/song2.mp3">Play Instrumental #58</a></p>
    	            	<p><a href="songs/song3.mp3">Play my "Back To Life" Remix</a></p>
                	</div>
                </noscript>               
            </div>
        </div>

    	<div class="site-section" id="Games">
          	<div class="background">	
            	<div class="bg-color"></div>                
            </div>
			<!--<div id="credit">
				<p>The game in the background: </p>
    			<p>Sleeping Dogs (2012)</p>
			</div>-->
            <div class="left-side"></div>
            <div class="right-side">
            	<span id="gamesTitle">Games</span>
				<div class="section-text" id="GamesText">
                <p>I'm a pretty big fan of video games. I have not developed anything game-related - although it is in the plans.  My earliest memories involving me sitting on my dads lap playing Renegade on the NES when I was about 3 years old. It's kind of strange to recall something from that long ago, but it just goes to show how much video games have been in my life. I really got into it when I got my Playstation console on Christmas of 1998. At first, racing and sports games were all I played, but as I got older, my tastes change and I'm now more into games than I have ever been before.</p><br /><p>Recently, I've had the ambitions of creating video games, and the barrier to entry is lower than ever before. Hopefully, when the time is right and the oppurtunity cost is low, I can spend some time to create the game that I've always wanted to play... or, at least, create a game someone wouldn't mind playing. :)</p>
                </div>
            </div>
		</div>

	    <div class="site-section" id="Projects">
        	<div class="background">
            	<div class="bg-color"></div>            
            </div>
        	<div class="left-side"></div>
            <div class="right-side">
            	<p id="projectsTitle">Projects</p>
            	<div class="section-text" id="ProjectsText">
                	<p>If I got a degree for doin programming, I might as well use it for something, right? This is the section where I show off a very casual resume...well, it would. <noscript><br />Aside from this site that I've done right now, I've have additional experienes with <a href="http://www.deadendthrills.com"style="text-decoration:none">Ronald McDonald House</a> and <a href="http://www.redhookhub.com"style="text-decoration:none">Red Hook Hub</a>. </noscript>A .doc file is right here for you which will explain in full.</p>					
                </div>
                <div id="carousel">
    				<div id="cycle">
			    		<ul>
    						<li class="preview" onclick="projectPreview(1)" style="background-color: rgba(60, 60, 60, .3);"></li>
					        <li class="preview" onclick="projectPreview(2)" style="background-color: rgba(90, 120, 250, .3);"></li>
    		    			<li class="preview" onclick="projectPreview(3)"></li>
				        </ul>    
				    </div>
				</div>
            </div>
        </div>
                    
    	<div class="site-section" id="Blog">
        	<div class="background">
            	<div class="bg-color"></div>            
            </div>
            <div class="left-side"></div>
            <div class="right-side">
            	<div id="blogTitle">Blogs</div>
                
            	<div class="section-text" id="blogItems">        <div id="order">Click Here to Order by Rating</div>        	
                	<ul id="BlogList">
                	 <?php
						$link = mysql_connect('mymanflycom.fatcowmysql.com', 'mymanfly', 'Fly_1990'); 
						if (!$link)
						{ 
					    	die('Could not connect: ' . mysql_error()); 
						}
						
						mysql_select_db("mymanfly_posts");
						
						$query = mysql_query("SELECT * FROM posts",$link);
						
						while($row = mysql_fetch_array($query))
						{
							echo "<li><a>" . $row['Title'] . "</a></li>";
						}
						mysql_close($link);
					?>
                	</ul> 
				</div>
	            <div id="BlogText">
                	<div></div>
                    <div id="rating">
                    	<p id="back">Go Back</p>
                		<p id="rate">Rate it!</p>
	                	<div id="thumbsup"></div>
	                	<div id="thumbsdown"></div> 
                </div>
              </div>
            </div>                        
        </div>
            
		<div id="footer">
        	<p>Designed in 2014 by F. Francis</p>
            <p>All photos (except Projects section) come from <a href="http://www.deadendthrills.com"style="text-decoration:none">Dead End Thrills</a></p>
        </div>
        
	</div>       
</body>
</html>