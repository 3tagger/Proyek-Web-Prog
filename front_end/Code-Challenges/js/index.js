
var defaultCode = "<h1>This is a header</h1>";
var importantTag = ["<h1>", "</h1>"];
var errorMsg = "<h1 style='color:red'>Have to use h1 tags</h1>"; 

var editor = ace.edit("editor");
var preview = document.getElementById('preview');
editor.resize();

editor.setTheme("ace/theme/monokai");
editor.getSession().setMode("ace/mode/html");

var currentCode = (localStorage.code)? localStorage.code : defaultCode;

$(window).keydown(function(e) {
  if (e.ctrlKey && e.keyCode == 13) {
    var editorContent = editor.getValue();

    preview.contentWindow.document.open();
    preview.contentWindow.document.write(editorContent);
    preview.contentWindow.document.close();
    
    for (var i = 0; i < importantTag.length; i++) {
     var rgx = new RegExp(importantTag[i], "g")
      if (editorContent.match(rgx) === null) {
        preview.contentWindow.document.write(errorMsg);
        break;
      }
    }
    
    localStorage.code = editorContent;
  }
});

$(document).ready(() => {
  editor.setValue(currentCode);          
})