window.addEventListener('load', function() {
    let CMInstance = CodeMirror.fromTextArea(document.getElementById("cm"), {
        value: document.getElementById("cm").value,
        mode: "javascript",
        theme: 'darcula'
    });
})