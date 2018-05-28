function rensponsiveHeader() {
    var x = document.getElementClassName("ifls-header");
    if (x.className === "ifls-header") {
        x.className += " responsive";
    } else {
        x.className = "ifls-header";
    }
}