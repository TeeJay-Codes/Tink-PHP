var editor = ace.edit("editor");
editor.setTheme("ace/theme/monokai");
editor.session.setMode({path: "ace/mode/php", inline: true});

// keyboard commands
editor.commands.addCommand({
    name: 'runAll',
    bindKey: {win: 'Ctrl-Enter',  mac: 'Command-Enter'},
    exec: function(editor) {
        execute(editor.getValue())
    }
});
editor.commands.addCommand({
    name: 'runSelected',
    bindKey: {win: 'Ctrl-Shift-Enter',  mac: 'Command-Shift-Enter'},
    exec: function(editor) {
        execute(editor.getSelectedText())
    }
});

//save code in browser
editor.on('change', function () {
    localStorage.setItem('tink', editor.getValue());
});

// execute codes
function execute(code) {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/tink');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function() {
        var response = xhr.responseText;
        if (xhr.status === 200) {
            response = '<pre>' + response + '</pre>';
        }

        document.Response.document.body.innerHTML = response;
        changeButtonsState(false);
    };
    xhr.send('code=' + encodeURIComponent(code));

    changeButtonsState(true);
    document.Response.document.body.innerHTML = '';
}

function changeButtonsState(state) {
    document.getElementsByClassName('run-btns')[0].disabled = state;
    document.getElementsByClassName('run-btns')[1].disabled = state;
}

document.addEventListener("DOMContentLoaded", function(event) {
    var codes = localStorage.getItem('tink');
    if (typeof codes === "string") {
        editor.setValue(codes, 1);
    }
});



