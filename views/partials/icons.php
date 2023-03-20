<script>
    
    map.on('load', () => {
        const maps = JSON.parse('<?php echo json_encode($landmarks); ?>')
        const features = maps.map(({ coordinate_x, coordinate_y, geometry_type, property_icon, type, img_src, property_description_title, property_description_content, property_link_href, property_link_label, property_description_sub_content }) => ({
            'type': type,
            'properties': {
                'description':
                    `<div><img src=${img_src}  width=100% height=200 /><div/><strong>${property_description_title}</strong><p>${property_description_content}<a href="${property_link_href}" target="_blank" title="Opens in a new window">${property_link_label}</a>${property_description_sub_content}.</p>`,

                'icon': property_icon
            },
            'geometry': {
                'type': geometry_type,
                'coordinates': [parseFloat(coordinate_x), parseFloat(coordinate_y)]
            }
        }))
        console.log(features, 'features')
        map.addSource('places', {
            // This GeoJSON contains features that include an "icon"
            // property. The value of the "icon" property corresponds
            // to an image in the Mapbox Streets style's sprite.
            'type': 'geojson',
            'data': {
                'type': 'FeatureCollection',
                'features': features
            }
        });

        for (const feature of features) {

            const symbol = feature.properties.icon;
            const layerID = `poi-${symbol}`;
            // Add a layer for this symbol type if it hasn't been added already.
            if (!map.getLayer(layerID)) {
                map.addLayer({
                    'id': layerID,
                    'type': 'symbol',
                    'source': 'places',
                    'layout': {
                        // These icons are a part of the Mapbox Light style.
                        // To view all images available in a Mapbox style, open
                        // the style in Mapbox Studio and click the "Images" tab.
                        // To add a new image to the style at runtime see
                        // https://docs.mapbox.com/mapbox-gl-js/example/add-image/
                        'icon-image': `${symbol}`,
                        'icon-allow-overlap': true,
                        'icon-size': 1.2
                    },
                    'filter': ['==', 'icon', symbol]
                });

                // When a click event occurs on a feature in the places layer, open a popup at the
                //         // location of the feature, with description HTML from its properties.
                map.on('click', layerID, (e) => {
                    // Copy coordinates array.
                    const coordinates = e.features[0].geometry.coordinates.slice();
                    const description = e.features[0].properties.description;
                    // Ensure that if the map is zoomed out such that multiple
                    // copies of the feature are visible, the popup appears
                    // over the copy being pointed to.
                    while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                        coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
                    }
                    console.log(e, 'e ')
                    new mapboxgl.Popup()
                        .setLngLat(coordinates)
                        .setHTML(description)
                        .addTo(map);
                });

                // Change the cursor to a pointer when the mouse is over the places layer.
                map.on('mouseenter', layerID, () => {
                    map.getCanvas().style.cursor = 'pointer';
                });

                // Change it back to a pointer when it leaves.
                map.on('mouseleave', layerID, () => {
                    map.getCanvas().style.cursor = '';
                });
            }
        }
    });
</script>