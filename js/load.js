var loading = function() {
    // Add the overlay with loading image to the page
    var over = '<div id="overlay">' +
        '<img id="loading" src="../images/loading.gif">' +
        '</div>';
    $(over).appendTo('body');
};

var removeLoad = function() {
    // Remove load
    $('#overlay').remove();
};