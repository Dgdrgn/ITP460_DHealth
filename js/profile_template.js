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
    var lbs = kg * 2.20;
    return lbs;
}

// Convert cm to in
function convertCmToIn(cm) {
    var inches = cm * 0.39;
    return inches;
}

// Calculate BMI
function calcBMI(kg, cm) {
    var numer = kg;
    var denom = (cm * 0.01) * (cm *0.01);
    return numer / denom;
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
    console.log(d.getMonth());
    return age;
}

function stringDOB(dob) {
    var dob = new Date(dob);
    var html = "DOB: ";
    switch(dob.getMonth()) {
        case 0:
            html += "January " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 1:
            html += "February " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 2:
            html += "March " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 3:
            html += "April " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 4:
            html += "May " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 5:
            html += "June " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 6:
            html += "July " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 7:
            html += "August " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 8:
            html += "September " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 9:
            html += "October " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 10:
            html += "November " + dob.getDate() + ", " + dob.getFullYear();
            break;
        case 11:
            html += "December " + dob.getDate() + ", " + dob.getFullYear();
            break;
    }
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
                    console.log(response[i]);
                    html = html + templateFunction(response[i]);
                    var gender = response[i]['gender'];
                    if(gender == "m")
                        $('#profile-img').css("background-image", "url(../images/girl-toddler.png);");
                    else
                        $('#profile-img').css("background-image", "url(../images/babyBoy.png);");
                }
                html2 = html2 + tempFunc2(response[i]);
            }

            document.getElementById('profile-container').innerHTML = html;
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