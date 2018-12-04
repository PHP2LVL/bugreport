
function openForm() {
    document.querySelector(".form-popup").style.display = "block";
}


function closeForm() {
    document.querySelector(".form-popup").style.display = "none";
    location.reload();
}


// Makes bug placement dot, opens bug form, sets resolution
var clicks = 0;

function showCoords(event) {
    
    clicks++;

    if(event.target.classList.contains('my-btn') || clicks > 2) {
        return;
    }

    event.preventDefault();
    
    var x = event.clientX;
    var y = event.clientY;
    var coords = "X coords: " + x + ", Y coords: " + y;
    var newDiv = document.createElement('div');

    newDiv.style.left = (x - 25) + 'px';
    newDiv.style.top = (y - 25) + 'px';
    newDiv.classList.add('new-div');
    document.body.appendChild(newDiv);
    // console.log(coords);
    var xInput = document.querySelector('[name="bug-x"]');
    xInput.value = x;
    var yInput = document.querySelector('[name="bug-y"]');
    yInput.value = y;
    openForm();
    // console.log(xInput);
}
// end of bug placement dot.


function selectCords(e) {
    e.preventDefault();
    document.addEventListener("click", showCoords);
    document.body.classList.add('bug-report-cursor');
    
}


var button = document.querySelector('.report .my-btn');
if(button) {
    button.addEventListener('click', selectCords);
}


function screenresolution() {
    var width  = screen.width;
    var height = screen.height;
    var screenresolution = width+'x'+height;
    return screenresolution;
}

//aJax with functions.bugreport.php, see "action".
var bugReportForm = document.querySelector('.bug-report-form');
if(bugReportForm) {
    bugReportForm.addEventListener('submit', function(e){
        e.preventDefault();
        var cordX = document.querySelector('[name="bug-x"]').value;
        var cordY = document.querySelector('[name="bug-y"]').value;
        var bugReportInfo = document.querySelector('.form-container textarea').value;    
        var serializedData = serializeAjax(bugReportForm);
    
        var bugReportData = {
            cordX: cordX,
            cordY, cordY,
            screenRes: screenresolution(),
            email: bugReportUserEmail,
            currentVersion: currentVersion,
            bugReportInfo: bugReportInfo,
            action: 'getBugInfoAjax',
            action_functions: 'bugreport',
            formData: serializedData,
            themeVersion: themeVersion
        };
    
        postAjax(ajaxUrl, bugReportData, function(response) {
            if(response) {
                console.log(response);
                // showNotification('success', response); // YOUR RESPONSE INFO   (issiusta sekmingai.....)
            }
        });
    });
}
