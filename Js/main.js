function showLanguage(language) {
    var fr = document.getElementsByClassName("fr");
    var en = document.getElementsByClassName("en");
    var es = document.getElementsByClassName("es");
    for (let index = 0; index < fr.length; index++) {
        fr[index].style.display = "none";
        en[index].style.display = "none";
        es[index].style.display = "none";
        document.getElementsByClassName(language)[index].style.display = "block";
    }
}

document.addEventListener('DOMContentLoaded', function() {
    showLanguage('fr');
});