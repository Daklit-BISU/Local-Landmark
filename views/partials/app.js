
const navBar = document.querySelector("nav"),
  menuBtns = document.querySelectorAll(".menu-icon"),
  overlay = document.querySelector(".overlay");

menuBtns.forEach((menuBtn) => {
  menuBtn.addEventListener("click", () => {
    navBar.classList.toggle("open");
  });
});

overlay.addEventListener("click", () => {
  navBar.classList.remove("open");
});

const bounds = [
  [123.9525, 9.3725], // Southwest coordinates
  [124.7081, 10.2574] // Northeast coordinates
];

mapboxgl.accessToken = 'pk.eyJ1IjoiZGFrbGl0IiwiYSI6ImNsZWNxanJhaDAwMjIzcGt4cjF3MmZ4czgifQ.db8Az0uKza9pFbTrISFKEw';

const filterGroup = document.getElementById('list');
const map = new mapboxgl.Map({
  container: 'map',
  // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
  style: 'mapbox://styles/daklit/clf56ornt008l01pe6bbhm4d6',
  center: [124.196320, 9.845745],
  zoom: 9,
  //maxBounds: bounds
});

map.addControl(new mapboxgl.NavigationControl());

const coordsContainer = document.getElementById('coords-container');
const coordinateToggleButton = document.getElementById('coords-toggle');

coordinateToggleButton.addEventListener('change', function () {
  console.log(coordinateToggleButton.checked);
  if (coordinateToggleButton.checked) {
    map.on('mousemove', function (e) {
      var coords = e.lngLat.wrap();
      coordsContainer.style.display = 'block';
      coordsContainer.style.left = '50%'; // center horizontally
      coordsContainer.style.bottom = '10px'; // fixed to the bottom with 10px padding
      coordsContainer.style.transform = 'translateX(-50%)'; // center using negative margin
      coordsContainer.innerHTML = 'Longitude: ' + coords.lng.toFixed(8) + '<br>Latitude:     ' + coords.lat.toFixed(11);
    });

    map.on('mouseout', function () {
      coordsContainer.style.display = 'none';
    });
  } else {
    map.on('mousemove', function () {
      coordsContainer.style.display = 'none';
    });
    map.on('mouseout', function () {
      coordsContainer.style.display = 'none';
    });
  }

});