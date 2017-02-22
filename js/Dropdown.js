<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<style type="text/css">
.bs-example{
    margin: 20px;
    }
</style>
</head>
<body>
        <div class="btn-group">
            <button id="MAINBUTTON" type="button" data-toggle="dropdown" class="btn btn-info dropdown-toggle">Heeeyo<span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li><a id="alphabetical">Alphabetical</a></li>
                <li class="divider"></li>
                <li><a id="ratings">Ratings</a></li>
                <li class="divider"></li>
                <li><a id="recent">Recent</a></li>
            </ul>
        </div>
		
<script>
  $(alphabetical).click(function(){
    $(MAINBUTTON).html("Alphabetical");
   });
 $(ratings).click(function(){
    $(MAINBUTTON).html("Ratings");
   });
 $(recent).click(function(){
    $(MAINBUTTON).html("Recent");
   });
</script>

</body>
</html>
</html>           
