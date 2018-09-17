var keys = {
    'ArrowLeft': 'left',
    'ArrowUp': 'up',
    'ArrowRight': 'right',
    'ArrowDown': 'down',
    'KeyA': 'a',
    'KeyB': 'b'
};

var code = ['up', 'up', 'down', 'down', 'left', 'right', 'left', 'right', 'b', 'a'];
var pos = 0;

document.addEventListener('keyup', function(event) {
    var key = keys[event.code];
    var next = code[pos];

    if (key === next) {
        pos++;
        if (pos === code.length) {
            gogetem();
            pos = 0;
        }
    } else {
        pos = 0;
    }
});

function gogetem() {
    window.location.href = "beepbeepboop.php";
}