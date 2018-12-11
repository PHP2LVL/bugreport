
function openForm() {
    document.querySelector(".form-popup").style.display = "block";
}


function closeForm() {
    document.querySelector(".form-popup").style.display = "none";
    location.reload();
}

// var subug = document.querySelector('.form-popup').addEventListener('submit');
// subug.reload();

// Makes bug placement dot, opens bug form, sets resolution
var clicks = 0;

function showCoords(event) {


    clicks++;

    if(event.target.classList.contains('my-btn') || event.target.parentNode.classList.contains('my-btn') || clicks > 2) {
        return;
    }

    event.stopPropagation();
    event.preventDefault();
    
    var x = event.pageX || event.offsetX;
    var y = event.pageY || event.offsetY;
    //todo: remove this line after debug:

    // var coords = "X coords: " + x + ", Y coords: " + y;
    var newDiv = document.createElement('div');
    var ibug = document.createElement('i');

    openForm();

    newDiv.style.left = (x - 25) + 'px';
    newDiv.style.top = (y - 25) + 'px';
    // newDiv.style.transform = 'translateX(' + (x - 25) + 'px) translateY(' + (y - 25) + 'px)';

    newDiv.classList.add('new-div');
    ibug.classList.add('material-icons');
    ibug.classList.add('add');
    newDiv.className = 'btn bg-red btn-circle-lg new-div';
    ibug.innerHTML = 'report_problem';
    document.body.appendChild(newDiv);
    newDiv.appendChild(ibug);


    // console.log(coords);
    var xInput = document.querySelector('[name="bug-x"]');
    xInput.value = x;
    var yInput = document.querySelector('[name="bug-y"]');
    yInput.value = y;

}
// end of bug placement dot.


function selectCords(e) {
    e.preventDefault();

    document.body.classList.add('bug-report-cursor');
    document.addEventListener("click", showCoords, true);
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
            action: 'getBugReportAjax',
            action_functions: 'bugreport',
            formData: serializedData,
            themeVersion: themeVersion
        };
    
        postAjax(ajaxUrl, bugReportData, function(response) {
            if(response != null) {
                showNotification('success', 'All good');
                setTimeout(location.reload.bind(location), 2000);
            } else {
                showNotification('error', 'Error');
            }
        });
    });
}
