function show() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'text');
}

function hide() {
    var p = document.getElementById('pwd');
    p.setAttribute('type', 'password');
}

function show1() {
    var p1 = document.getElementById('pwd1');
    p1.setAttribute('type', 'text');
}

function hide1() {
    var p1 = document.getElementById('pwd1');
    p1.setAttribute('type', 'password');
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);
document.getElementById("eye1").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show1();
    } else {
        pwShown = 0;
        hide1();
    }
}, false);