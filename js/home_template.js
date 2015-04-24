loading();
Handlebars.registerHelper('if_eq', function(a, b, opts) {
    if(a == b)
        return opts.fn(this);
    else
        return opts.inverse(this);
});
function ageGroup(age) {
    if(age[0] == 0 && age[1] < 6){
        return 1;
    }
    else if(age[0] == 0 && age[1] >= 6) {
        return 2;
    }
    else if(age[0] == 1) {
        return 3;
    }
    else if(age[0] == 2) {
        return 4;
    }
    else {
        return 5;
    }
}
function calculateAge(dob) {
    var d = new Date();
    var dob = new Date(dob);
    var years = d.getFullYear() - dob.getFullYear();
    var months = d.getMonth() - dob.getMonth();
    var days = d.getDate() - dob.getDate();
    if(days < 0) {
        months--;
    }
    if(months < 0) {
        years--;
        months = 12 + months;
    }
    var age = [years, months];
    return age;
}
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
            var tempFunc2 = Handlebars.compile(document.getElementById('children-link').innerHTML);
            var html = '';
            var html2 = '';
            if(response.length == 0) {

            }
            else {
                for (var i = 0; i < response.length; i++) {
                    response[i]['age_group'] = ageGroup(calculateAge(response[i]['birthdate']));
                    html = html + templateFunction(response[i]);
                    html2 = html2 + tempFunc2(response[i]);
                }
            }
            html += "<br><form action=\"../add_child/\"><input style=\"width: 450px;\" type=\"submit\" value=\"Add a Child\"></form>";
            document.getElementById('kid-container').innerHTML = html;
            document.getElementById('children-links').innerHTML = html2;
            removeLoad();
        });
        promise.fail(function(response) {
            console.log('Error: Could not display children.');
            removeLoad();
        });
    });
    pr2.fail(function(response) {
        console.log('Error: Could not get children.');
    });
});