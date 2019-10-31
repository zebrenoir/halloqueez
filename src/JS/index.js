function change() {
    select = document.getElementById("select");
    img = document.getElementById("selectImage");
    img.src = select.options[select.selectedIndex].style.backgroundImage.split('"')[1];
}