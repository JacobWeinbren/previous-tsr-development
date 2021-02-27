function toggleSearch() {
    var x = document.getElementById("search-bar");
    var display = x.style.display;
    if (display == "none" || display == "") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
    return false;
}