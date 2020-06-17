<html>
<head>
    <title>PHP Test</title>
</head>

<body>
<?php echo '<p>This is public site</p>'; ?> 

<h1> What's your name? </h1>
    <form method="GET">
        <input type="text" name="name" />
		<button type="submit">Send</button>
	</form>

<h2> Hi, <?php echo $_GET['name'] ?></h2>

</body>
</html>
