<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
	<style>
		.ui-my-fixed {
			position: fixed;
			top: 0;
			width: 100%;
			background-color: #aaccff;
			z-index: 1;
		}
		
		.ui-my-free {
			margin-top: 115px;
		}
	</style>
	
	<title>Jobino</title>

</head>

<body>

	<div data-role="page" id="home">
			<div class="ui-content ui-my-fixed">
				<h1>Search for <?php echo $_POST["search"]?></h1>
			</div>
			
		<div data-role="main">
			<div class="ui-my-free">
			
				<div data-role="collapsibleset">
					<div data-role="collapsible">
						<h1>Thibaud Perret - <?php echo $_POST["search"]?> - 120 SEK/h</h1>
						<p>I am a amateur <?php echo $_POST["search"]?> but I like it very much.</p>
						<a href="" class="ui-btn">See Thibaud's whole post</a>
					</div>
					
					<div data-role="collapsible">
						<h1>Zijie Liang - <?php echo $_POST["search"]?> - <i>no price</i></h1>						
						<p><i>No description given</i>.</p>
						<a href="" class="ui-btn">See Zijie's whole post</a>
					</div>
					
					<div data-role="collapsible">
						<h1>Valentin Rigorsson - part time <?php echo $_POST["search"]?> - 210 SEK/h</h1>
						<p>I have worked in the <?php echo $_POST["search"]?>'s business before so I have experience.</p>
						<a href="" class="ui-btn">See Valentin's whole post</a>
					</div>
				</div>
			</div>
		</div>

		<div data-role="footer" data-position="fixed" data-tap-toggle="false">
			<div data-role="navbar">
				<ul>
					<li><a href="search.html"   rel="external" data-icon="search"></a></li>
					<li><a href="add.html"      rel="external" data-icon="plus"></a></li>
					<li><a href="messages.html" rel="external" data-icon="mail"></a></li>
					<li><a href="profile.html"  rel="external" data-icon="user"></a></li>
				</ul>
			</div>
		</div>
	</div>

</body>
</html>