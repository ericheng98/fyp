$(document).on('click', '#play', function()
{
	window.location.replace("product.php?platform=PS4");
});

$(document).on('click', '#xbox', function()
{
	window.location.replace("product.php?platform=XBOX");
});

$(document).on('click', '#pc', function()
{
	window.location.replace("product.php?platform=PC");
});

// $(document).on('click', '#pc', function()
// {
// 	window.location.replace("product.php?platform=all");
// });

$("input#searchInput").keyup(function(event)
{
  if(event.which === "13")
   {
      $("#but").click();
      console.log("123");
   }
});
