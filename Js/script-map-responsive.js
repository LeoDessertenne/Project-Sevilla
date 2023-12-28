var areas = document.querySelectorAll('map[name="image-map"] area');

function resizeAreas() {
    var mapWidth = document.querySelector('img[usemap="#image-map"]').clientWidth;
    var mapHeight = document.querySelector('img[usemap="#image-map"]').clientHeight;

    areas.forEach(function (area) {
        var originalCoords = area.getAttribute('data-coords').split(',');
        var scaledCoords = [];

        for (var i = 0; i < originalCoords.length; i++) {
            if (i % 2 === 0) {
                scaledCoords.push((originalCoords[i] / 100) * mapWidth);
            } else {
                scaledCoords.push((originalCoords[i] / 100) * mapHeight);
            }
        }

        area.setAttribute('coords', scaledCoords.join(','));
    });
}

window.addEventListener('load', resizeAreas);
window.addEventListener('resize', resizeAreas);