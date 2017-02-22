// function filter()//TODO: FINISH
// {
// 	$(document).ready(function()
// 	{
// 		$(".rateid").click(function()
// 		{
// 			$("rating").filter
// 		}
		
// 	});
	
// }

// function filterByCategory()
// {
// 	$(document).ready(function()
// 	{
// 		$(".utilityid").click(function()
// 		{
// 			if($(".utilityid").is(':checked'))
// 				$("utility").not(".gametag").hide();  // checked
// 			else 
// 				$("utility").not(".gametag").show();  // unchecked
// 		});
// 		$("#websiteid").click(function()
// 		{
// 			if($("#websiteid").is(':checked'))
// 				$("p").not(".websitetag").hide();  // checked
// 			else
// 				$("p").not(".websitetag").show();  // unchecked
// 		});
// 		$("#websiteid").click(function()
// 		{
// 			if($("#websiteid").is(':checked'))
// 				$("p").not(".websitetag").hide();  // checked
// 			else
// 				$("p").not(".websitetag").show();  // unchecked
// 		});
// 		$("#otherid").click(function()
// 		{
// 			if($("#otherid").is(':checked'))
// 				$("p").not(".othertag").hide();  // checked
// 			else
// 				$("p").not(".othertag").show();  // unchecked
// 		});
		
// 	});
	
// }

function checkScreenResolution()
{
	if (screen.width <= 800)
	{
		$("#wrapper").hide();
	}
}

function clearContents(formObj) {
  if (formObj.value == "Please Enter a Description") {
    formObj.value = "";
    return true;
  }
  return false;
}

function restoreContents(formObj) {
  if (formObj.value == "") {
    formObj.value = "Please Enter a Description";
    return true;
  }
  return false;
}

function toggle_side(id) {
    var toToggle = document.getElementById(id);

    if (toToggle.style.display == 'none')
        toToggle.style.display = 'block';
    else
        toToggle.style.display = 'none';
}

$( "#buttonHide" ).click(function() {
    $( "#sidebar-wrapper" ).animate(
        {'margin-left':'1000px'},1000,
        function() {
            $(this).slideUp('fast');
        }
    )
});