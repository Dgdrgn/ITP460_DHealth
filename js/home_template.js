Handlebars.registerHelper('if_eq', function(a, b, opts) {
    if(a == b)
        return opts.fn(this);
    else
        return opts.inverse(this);
});

function pullChildInfo(mrn) {
    var promise = $.ajax({
        url: '../get_children.php',
        type: 'get',
        dataType: 'json',
        data: {
            filter: mrn
        }
    });
    return promise;
}

function getParentChildren() {
    var promise = $.ajax({
        url: '../get_parent_children.php',
        type: 'get',
        dataType: 'json',
        data: {
            filter: name
        }
    });
    return promise;
}

function getParentName() {
    var promise = $.ajax({
        url: '../get_parent.php',
        type: 'get',
        dataType: 'text'
    });
    return promise;
}

$(window).on('load', function(e) {
    e.preventDefault();

    var pr = getParentName();
    pr.done(function(response) {
        var parentName = response;
        $('#header1').html("WELCOME, " + parentName + "!");
    });
    pr.fail(function(response) {
        console.log('Error: Could not get name.');
    });

    var pr2 = getParentChildren();
    pr2.done(function(response) {
        var promise = pullChildInfo(response);
        promise.done(function(response) {
            // Client-Side Templating
            var templateFunction = Handlebars.compile(document.getElementById('children-template').innerHTML);
            var html = '';
            if(response.length == 0) {
                html = "<form action=\"../add_child/\"><input style=\"width: 350px;\" type=\"submit\" value=\"Add a Child\"></form>";
            }
            else {
                for (var i = 0; i < response.length; i++) {
                    html = html + templateFunction(response[i]);
                    console.log(response);
                }
            }
            document.getElementById('kid-container').innerHTML = html;
        });
        promise.fail(function(response) {
            console.log('Error: Could not display children.');
        });
    });
    pr2.fail(function(response) {
        console.log('Error: Could not get children.');
    });
});