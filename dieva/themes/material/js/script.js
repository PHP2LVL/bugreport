// ------------------------
// REPORT BUG BUTTON SCRIPT
// ------------------------


var clicks = 0;

function showCoords(event) {
    
    event.preventDefault();

    clicks++;
    // console.log(clicks);
    if(event.target.classList.contains('my-btn') || clicks > 2) {
        return;
    }

    var x = event.clientX;
    var y = event.clientY;
    var coords = "X coords: " + x + ", Y coords: " + y;
    var newDiv = document.createElement('div');

    newDiv.style.left = x + 'px';
    newDiv.style.top = y + 'px';

    newDiv.classList.add('new-div');

    document.body.appendChild(newDiv);

    device();
    // info();
    console.log(coords);
}

function selectCords(e) {
    e.preventDefault();
    // console.log('btn');

    document.addEventListener("click", showCoords);
}

var button = document.querySelector('.report .my-btn');

if(button) {
    // console.log(button);
    button.addEventListener('click', selectCords);
}
// ------------------------
// END OF BUTTON
// ------------------------

// ------------------------
// SCREEN RESOLUTION FUNCTION
// ------------------------

function device() {
    var width  = screen.width;
    var height = screen.height;
    var screenas = width+'x'+height;
    console.log(screenas);
}
// ------------------------

function postAjax(url, data, success) {
    var params = typeof data == 'string' ? data : Object.keys(data).map(
            function(k){ return encodeURIComponent(k) + '=' + encodeURIComponent(data[k]) }
        ).join('&');

    var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject("Microsoft.XMLHTTP");
    xhr.open('POST', url);
    xhr.onreadystatechange = function() {
        if (xhr.readyState>3 && xhr.status==200) { success(xhr.responseText); }
    };
    xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send(params);
    return xhr;
}

function serialize(form) {
    var field, l, s = [];
    if (typeof form == 'object' && form.nodeName == "FORM") {
        var len = form.elements.length;
        for (var i=0; i<len; i++) {
            field = form.elements[i];
            if (field.name && !field.disabled && field.type != 'file' && field.type != 'reset' && field.type != 'submit' && field.type != 'button') {
                if (field.type == 'select-multiple') {
                    l = form.elements[i].options.length; 
                    for (var j=0; j<l; j++) {
                        if(field.options[j].selected)
                            s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.options[j].value);
                    }
                } else if ((field.type != 'checkbox' && field.type != 'radio') || field.checked) {
                    s[s.length] = encodeURIComponent(field.name) + "=" + encodeURIComponent(field.value);
                }
            }
        }
    }
    return s.join('&').replace(/%20/g, '+');
}

// function info(){
    
// }
var form = document.querySelector('.klase');
     
form.addEventListener('click', function(e){
    e.preventDefault();
    var data = serialize(form);
    console.log(data);
    postAjax('info.php', data, function(response){
        console.log(response);      
        var json = JSON.parse(response);
        console.log(json);
        var msg = json.message;
        alert(msg);
    });
});    