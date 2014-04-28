		<?php 

			wp_footer(); 

		?>
		
	</div>
	<footer>
		<div class="social mobileOnly">
					<a href="https://twitter.com/jcitysinner"><img class="twitter socialIcon" src="<?php bloginfo('template_directory');?>/images/twitter.png"></a>
					<a href="http://www.linkedin.com/pub/jesse-sinfield/90/3a4/213"><img class="linkedIn socialIcon" src="<?php bloginfo('template_directory');?>/images/linkedin.png"></a>
					<a href="https://github.com/jcitysinner"><img class="github socialIcon" src="<?php bloginfo('template_directory');?>/images/github.png"></a>
				</div>
		<p class="copyright">Site Designed and Developed by Jesse Sinfield - Copyright (c) 2014 Jesse Sinfield.</p>
		<p id="quotes">TEST</p>
	</footer>
	<script>
		$('#navButton').click(function(){
	    	$('#mainNav').slideToggle();
	    });
	    $('#bMenu').click(function(){
	    	$('.menu-blog-container').slideToggle();
	    });
	    $('#bSidebar').click(function(){
	    	$('#mainSidebar').slideToggle();
	    });

	    var batQuotes = ["Theatricality and deception, powerful agents to the uninitiated. But we are initiated aren't we, Bruce? Members of the League of Shadows. And you betrayed us.",
	    	"Peace has cost you your strength. Victory has defeated you.",
	    	"Yes. The fire rises.",
	    	"If you're good at something, never do it for free.",
	    	"I believe whatever doesn't kill you simply makes you... stranger.",
	    	"Do I really look like a guy with a plan?",
	    	"This town deserves a better class of criminal and I'm gonna give it to them. Tell your men they work for me now. This is my city.",
	    	"Introduce a little anarchy, upset the established order and everything becomes chaos. I'm an agent of chaos. Oh, and you know the thing about chaos? It's fair.",
	    	"I'm Batman",
	    	"I can't do that as Bruce Wayne... as a man. I'm flesh and blood. I can be ignored, destroyed. But as a symbol, I can be incorruptible, I can be everlasting.",
	    	"I know exactly who he was. He was the Batman.",
	    	"Your anger gives you great power. But if you Iet it, it will destroy you as it almost did me.",
	    ];

	    document.getElementById("quotes").innerHTML = batQuotes[Math.floor((Math.random()*11)+0)];

	</script>
	</body>
</html>