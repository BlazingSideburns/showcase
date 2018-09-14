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

// add keydown event listener
document.addEventListener('keydown', function(event) {
    // get the value of the key code from the key map
    var key = keys[event.code];
    // get the value of the required key from the konami code
    var next = code[pos];

    // compare the key with the required key
    if (key === next) {

        // move to the next key in the konami code sequence
        pos++;

        // if the last key is reached, activate cheats
        if (pos === code.length) {
            gogetem();
            pos = 0;
        }
    } else {
        pos = 0;
    }
});

function gogetem() {
    alert("Well played!");
}