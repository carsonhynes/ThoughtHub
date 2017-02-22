<?php
//Default Webpage

echo   "<style type='text/css'>
			.blockBackground0 {
				background:#d5effe;
				border-radius:20px;
				margin:4px;
			}
			.blockBackground1 {
				background:#f6b2b2;
				border-radius:20px;
				margin:4px;
			}
			.blockBackground2 {
				background:#d8fec5;
				border-radius:20px;
				margin:4px;
			}
			.blockBackground3 {
				background:#fefecc;
				border-radius:20px;
				margin:4px;
			}
			.titler {
				word-wrap: break-word;
				text-align: center;
				margin-left:auto;
				margin-right:auto;
                display: -webkit-box;  /* OLD - iOS 6-, Safari 3.1-6, BB7 */
                display: -ms-flexbox;  /* TWEENER - IE 10 */
                display: -webkit-flex; /* NEW - Safari 6.1+. iOS 7.1+, BB10 */
                display: flex;         /* NEW, Spec - Firefox, Chrome, Opera */
			}
			.titler h2 {
                -webkit-box-flex: 1;   /* OLD - iOS 6-, Safari 3.1-6 */
                width: 20%;            /* For old syntax, otherwise collapses. */
                -webkit-flex: 1;       /* Safari 6.1+. iOS 7.1+, BB10 */
                -ms-flex: 1;           /* IE 10 */
                flex: 1;               /* NEW, Spec - Firefox, Chrome, Opera */
			}
			.titler button {
				margin: 20px 0;
			}
			.rower {
				text-align: center;
			}
			a.noColorBlock:link {
	    		color:black;
			}
			a.noColorBlock:visited {
			    color:black;
			}
  		</style>";

function a2d($str)
{
	$dec = 0;
	for ($i = 0, $j = strlen($str); $i < $j; $i++) {
	    $dec += ord($str{$i});
	}
 	return $dec;
}

function getDefault()
{
	$mysqli = new mysqli("localhost", "root", "bacon", "thoughthub");
	$titleResult = $mysqli->query("SELECT title, description, rating FROM submissions ORDER BY rating DESC");

	$count = mysqli_num_rows($titleResult);
	$breakcount = 0;

	if($count > 0)
	{
		while($trow = $titleResult->fetch_assoc())
		{
			$colorChoice = a2d($trow['title']);
			$colorChoice %= 4;
			if ($breakcount%3 == 0)
			{
				echo "</div><div class='row'>";
			}
			echo "<a class='noColorBlock' href='#block$breakcount'> <div class='col-lg-3 col-md-3 col-sm-3 blockBackground$colorChoice'>
			<div class='titler'>";
			echo "<button type='button' style='margin-right:4px;' class='btn'>
					<span class='glyphicon glyphicon glyphicon-arrow-down' aria-hidden='true'></span></button>";
			echo "<h2>$trow[title]</h2>";	
			echo "<button type='button' style='margin-left:4px;' class='btn'>
					<span class='glyphicon glyphicon glyphicon-arrow-up' aria-hidden='true'></span></button></div><div class='rower'><p>";
			echo substr($trow['description'], 0, 200);
            if (strlen($trow) > 200)
			echo "...";
			echo "</p></div><p style='display:none'>rating=$trow[rating]</p></div></a>";
			$breakcount += 1;
		}
	}
}
?>