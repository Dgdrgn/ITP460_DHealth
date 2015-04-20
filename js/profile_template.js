Handlebars.registerHelper('if_eq', function(a, b, opts) {
    if(a == b)
        return opts.fn(this);
    else
        return opts.inverse(this);
});

// Read a page's GET URL variables and return them as an associative array.
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}

// Convert kg to lbs
function convertKgToLbs(kg) {
    var lbs = kg * 2.20462;
    return lbs.toFixed(1);
}

// Convert cm to in
function convertCmToIn(cm) {
    var inches = cm * 0.393701;
    return inches.toFixed(1);
}

// Calculate BMI
function calculateBMI(kg, cm) {
    var numer = kg;
    var denom = (cm * 0.01) * (cm *0.01);
    return (numer / denom).toFixed(1);
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

function stringDOB(dob) {
    var dob = new Date(dob);
    var date = dob.getDate() + 1;
    var html = "DOB: ";
    switch(dob.getMonth()) {
        case 0:
            html += "January ";
            break;
        case 1:
            html += "February ";
            break;
        case 2:
            html += "March ";
            break;
        case 3:
            html += "April ";
            break;
        case 4:
            html += "May ";
            break;
        case 5:
            html += "June ";
            break;
        case 6:
            html += "July ";
            break;
        case 7:
            html += "August ";
            break;
        case 8:
            html += "September ";
            break;
        case 9:
            html += "October ";
            break;
        case 10:
            html += "November ";
            break;
        case 11:
            html += "December ";
            break;
    }
    html += date + ", " + dob.getFullYear();
    return html;
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

function pullWeightandHeight(id) {
    var promise = $.ajax({
        url: '../get_children_info.php',
        type: 'get',
        dataType: 'json',
        data: {
            filter: id
        }
    });
    return promise;
}

function pullWeight(id) {

}

function pullHeight(id) {

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
    });
    pr.fail(function(response) {
        console.log('Error: Could not get name.');
    });

    var pr2 = getParentChildren();
    pr2.done(function(response) {
        var promise = pullChildInfo(response);
        promise.done(function(response) {
            // Client-Side Templating
            var templateFunction = Handlebars.compile(document.getElementById('child-template').innerHTML);
            var tempFunc2 = Handlebars.compile(document.getElementById('children-template').innerHTML);
            var html = '';
            var html2 = '';

            for (var i = 0; i < response.length; i++) {
                if(response[i]['mrn'] == getUrlVars()["id"]) {
                    html = html + templateFunction(response[i]);
                    $("#profile-name").html(response[i]['first_name'] + " " + response[i]['last_name']);
                    var age = calculateAge(response[i]['birthdate']);
                    $("#profile-age").html(age[0] + " years, " + age[1] + " months old");
                    $("#profile-dob").html(stringDOB(response[i]['birthdate']));

                    var infoPromise = pullWeightandHeight(response[i]['id']);
                    infoPromise.done(function(response) {
                        var currentHeight = convertCmToIn(response[response.length-1]['value']);
                        var currentWeight = convertKgToLbs(response[response.length-2]['value']);
                        var currentBMI = calculateBMI(response[response.length-2]['value'], response[response.length-1]['value']);
                        $("#weight-number").html(currentWeight + " lbs.");
                        $("#height-number").html(currentHeight + " in.");
                        $("#bmi-number").html(currentBMI);
                    });
                    infoPromise.fail(function(response) {
                        console.log('Error: Could not get children info.');
                    })
                }
                html2 = html2 + tempFunc2(response[i]);
            }

            document.getElementById('child-container').innerHTML = html;
            document.getElementById('children-links').innerHTML = html2;
        });
        promise.fail(function(response) {
            console.log('Error: Could not display children.');
        });
    });
    pr2.fail(function(response) {
        console.log('Error: Could not get children.');
    });
});