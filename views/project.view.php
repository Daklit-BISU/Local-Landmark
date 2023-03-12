<?php require("./views/partials/head.php")?>

    <?php require("./views/partials/nav.php")?>
    
    </style>

    <main>
        <!-- Your content -->
        <div id='map' style='w-full; height: 722px; '></div>
        <nav id="filter-group" class="filter-group"></nav>
    </main>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiZGFrbGl0IiwiYSI6ImNsZWNxanJhaDAwMjIzcGt4cjF3MmZ4czgifQ.db8Az0uKza9pFbTrISFKEw';
        const filterGroup = document.getElementById('filter-group');

        const bounds = [
            [123.6525, 9.4725], // Southwest coordinates
            [124.7081, 10.2574] // Northeast coordinates
        ];

        const map = new mapboxgl.Map({
        container: 'map',
        // Choose from Mapbox's core styles, or make your own style with Mapbox Studio
        style: "mapbox://styles/mapbox/dark-v9",  
        center: [124.196320,9.845745],
        zoom: 9.2,
        maxBounds: bounds 
        });

        map.addControl(new mapboxgl.NavigationControl());
    </script>

<?php require("./views/partials/foot.php")?>