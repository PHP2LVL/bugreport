// ------------------------
// REPORT BUG BUTTON SCRIPT
// ------------------------

function openForm() {
    document.getElementById("myForm").style.display = "block";
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
    location.reload();
}

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
    console.log(coords);
    openForm();


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
