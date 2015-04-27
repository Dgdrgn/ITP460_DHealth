loading();
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
// Calculate BMI
function calculateBMI(kg, cm) {
    var numer = kg;
    var denom = (cm * 0.01) * (cm *0.01);
    return (numer / denom).toFixed(1);
}

function calcAge(dob) {
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

function calculateAge(dob, date2) {
    var d = new Date(date2);
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
    var html = "";
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
                    response[i]['age_group'] = ageGroup(calcAge(response[i]['birthdate']));
                    html = html + templateFunction(response[i]);
                    var name = response[i]['first_name'];
                    var dob = response[i]['birthdate'];
                    $("#header3").html(response[i]['first_name'] + " 'S BMI REPORT");

                    var infoPromise = pullWeightandHeight(response[i]['id']);
                    infoPromise.done(function(response) {
                        var currentBMI = calculateBMI(response[response.length-2]['value'], response[response.length-1]['value']);
                        $("#currentNumber").html(currentBMI);
                        $("#asOf").html("as of " + stringDOB(response[response.length-2]['generated_at']));

                        // Chart
                        var bmis = new Array();
                        var ages = new Array();
                        for(var i = 1; i < response.length; i += 2) {
                            bmis.push(calculateBMI(response[i-1]['value'], response[i]['value']));

                            var temp = calculateAge(dob, response[i]['generated_at']);
                            ages.push(temp[0] + " years, " + temp[1] + " months");
                        }

                        var data = {
                            labels: ages,
                            datasets: [
                                {
                                    label: name + " 'S BMI REPORT",
                                    fillColor : "rgba(233,130,51,.35)", //orange
                                    strokeColor : "rgba(15,119,170,1)", //light blue
                                    pointColor : "rgba(9,53,90,.8)", //dark blue
                                    pointStrokeColor : "rgba(251,176,61,1)", //light orange
                                    pointHighlightFill: "#fff",
                                    pointHighlightStroke: "rgba(220,220,220,1)",
                                    data: bmis
                                }
                            ]
                        };

                        // Use array for creating chart
                        var canvas = document.getElementById("myChart");
                        var ctx = canvas.getContext("2d");
                        new Chart(ctx).Line(data);
                        removeLoad();
                    });
                    infoPromise.fail(function(response) {
                        console.log('Error: Could not get children info.');
                        removeLoad();
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