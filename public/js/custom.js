var index = 0;
function getID(v) {
	index = v;
	
}


$(document).on("click", "#homebtn", function(e) {
    $(".row").append(" <a id='home' href='/'></a>");
    document.getElementById('home').click();

});

$(document).on("click", "#boardsbtn", function(e) {
    $(".row").append(" <a id='boards' href='/board'></a>");
    document.getElementById('boards').click();

});

$(document).on("click", "#postcard", function(e) {
    $(".row").append(" <a id='post' href='/post/"+index+"'></a>");
    document.getElementById('post').click();

});

$(document).on("click", "#boardbtn", function(e) {
    $(".row").append(" <a id='board' href='/board/"+index+"'></a>");
    document.getElementById('board').click();

});
