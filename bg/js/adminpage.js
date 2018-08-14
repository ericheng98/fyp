$(window).on('load', function()
{
	$("#statcontain").show();
	$("#historycontain").hide();
	$("#productcontain").hide();
	$("#staffcontain").hide();

});

$(document).on('click', '#history', function()
{
	$("#statcontain").hide();
	$("#productcontain").hide();
	$("#staffcontain").hide();
	$("#historycontain").show();
});

$(document).on('click', '#stat', function()
{
	$("#statcontain").show();
	$("#historycontain").hide();
	$("#productcontain").hide();
	$("#staffcontain").hide();
});

$(document).on('click', '#product', function()
{
	$("#statcontain").hide();
	$("#historycontain").hide();
	$("#productcontain").show();
	$("#staffcontain").hide();
});

$(document).on('click', '#staff', function()
{
	$("#statcontain").hide();
	$("#historycontain").hide();
	$("#productcontain").hide();
	$("#staffcontain").show();
});