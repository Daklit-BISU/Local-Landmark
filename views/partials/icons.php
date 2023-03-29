<script>
  map.on('load', () => {
    const maps = JSON.parse(JSON.stringify(<?php echo json_encode($landmarks); ?>));

    const features = maps.map(({ coordinate_x, coordinate_y, geometry_type, property_icon, type, img_src, property_description_title, property_description_content, property_link_href, property_link_label, property_description_sub_content }) => {
      return {
        type,
        properties: {
          description:  `
            <div>
                <img src="${img_src}" width="100%" height="200">
                <div/>
                <strong>${property_description_title}</strong>
                <p class="text-justify">${property_description_content}
                <a href="${property_link_href}" target="_blank" title="Opens in a new window">${property_link_label}</a>
                ${property_description_sub_content}.
                </p>
            </div>
        `,
          icon: property_icon
        },
        geometry: {
          type: geometry_type,
          coordinates: [parseFloat(coordinate_x), parseFloat(coordinate_y)]
        }
      }
    });

    map.addSource('places', {
      type: 'geojson',
      data: {
        type: 'FeatureCollection',
        features
      }
    });

    features.forEach(feature => {
      const symbol = feature.properties.icon;
      const layerID = `poi-${symbol}`;

      if (!map.getLayer(layerID)) {
        map.addLayer({
          id: layerID,
          type: 'symbol',
          source: 'places',
          layout: {
            'icon-image': symbol,
            'icon-allow-overlap': true,
            'icon-size': 1.5
          },
          filter: ['==', 'icon', symbol]
        });

        map.on('click', layerID, (e) => {
            const coordinates = e.features[0].geometry.coordinates.slice();
            const description = e.features[0].properties.description;

            while (Math.abs(e.lngLat.lng - coordinates[0]) > 180) {
                coordinates[0] += e.lngLat.lng > coordinates[0] ? 360 : -360;
            }

            new mapboxgl.Popup({ closeButton: false })
                .setLngLat(coordinates)
                .setHTML(description)
                .addTo(map);
        });

        map.on('mouseenter', layerID, () => {
          map.getCanvas().style.cursor = 'pointer';
        });

        map.on('mouseleave', layerID, () => {
          map.getCanvas().style.cursor = '';
        });
      }
    });
  });
</script>
