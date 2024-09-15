!(function (a) {
    "use strict";
    function n() {}
    (n.prototype.init = function () {
      a("#world-map-markers").vectorMap({
        map: "world_mill_en",
        normalizeFunction: "polynomial",
        hoverOpacity: 0.7,
        hoverColor: !1,
        regionStyle: { initial: { fill: "#e3eaef" } },
        markerStyle: {
          initial: {
            r: 9,
            fill: "#727cf5",
            "fill-opacity": 0.9,
            stroke: "#fff",
            "stroke-width": 7,
            "stroke-opacity": 0.4,
          },
          hover: { stroke: "#fff", "fill-opacity": 1, "stroke-width": 1.5 },
        },
        backgroundColor: "transparent",
        markers: [
          { latLng: [41.9, 12.45], name: "Vatican City" },
          { latLng: [43.73, 7.41], name: "Monaco" },
          { latLng: [-0.52, 166.93], name: "Nauru" },
          { latLng: [-8.51, 179.21], name: "Tuvalu" },
          { latLng: [43.93, 12.46], name: "San Marino" },
          { latLng: [47.14, 9.52], name: "Liechtenstein" },
          { latLng: [7.11, 171.06], name: "Marshall Islands" },
          { latLng: [17.3, -62.73], name: "Saint Kitts and Nevis" },
          { latLng: [3.2, 73.22], name: "Maldives" },
          { latLng: [35.88, 14.5], name: "Malta" },
          { latLng: [12.05, -61.75], name: "Grenada" },
          { latLng: [13.16, -61.23], name: "Saint Vincent and the Grenadines" },
          { latLng: [13.16, -59.55], name: "Barbados" },
          { latLng: [17.11, -61.85], name: "Antigua and Barbuda" },
          { latLng: [-4.61, 55.45], name: "Seychelles" },
          { latLng: [7.35, 134.46], name: "Palau" },
          { latLng: [42.5, 1.51], name: "Andorra" },
          { latLng: [14.01, -60.98], name: "Saint Lucia" },
          { latLng: [6.91, 158.18], name: "Federated States of Micronesia" },
          { latLng: [1.3, 103.8], name: "Singapore" },
          { latLng: [0.33, 6.73], name: "SÃ£o TomÃ© and PrÃ­ncipe" },
        ],
      }),
      a("#kenya-vectormap").vectorMap({
          map: "ke-counties-map",
          backgroundColor: "transparent",
          normalizeFunction: "polynomial",
           hoverOpacity: 0.2,
          hoverColor: !0,
          regionStyle: { initial: { fill: "#FF0000" } },
          borderColor: '#064200',
          borderWidth: 3,
          hoverColor: '#c9dfaf',
          series: {
            regions: [
              {
                values: {
                  'KE-001': "#e6ebff",
                   'KE-023': "#809bfe",
                   'KE-024': "#F192FF",
                   'KE-025': "#82ECFF",
                   'KE-026': "#A9FFD8",
                   'KE-027': "#4DF7FD",
                   'KE-028': "#1B1F5C",
                   'KE-029': "#79FFFB",
                   'KE-030': "#FF0894",
                   'KE-031': "#FF3F14",
                   'KE-032': "#FFC354",
                   'KE-033': "#42E6D3",
                   'KE-034': "#DD5592",
                   'KE-035': "#1D4797",
                   'KE-036': "#350D65",
                   'KE-037': "#3E716D",
                   'KE-038': "#288F58",
                   'KE-039': "#5597DD",
                   'KE-040': "#DD5577",
                   'KE-041': "#DDD455",
                   'KE-042': "#95C674",
        
                },
                attribute: "fill",
              },
            ],
          },
       
            backgroundColor: "transparent",
            selectedColor: '#c9dfaf',
         
        }),
        a("#tanzania-vectormap").vectorMap({
          map: "tanzania_regions",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#0026E1" } },
        }),
        
        a("#uganda-vectormap").vectorMap({
          map: "uganda_districts",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#FFB71B" } },
        }),
        a("#usa-vectormap").vectorMap({
          map: "us_merc_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#727cf5" } },
        }),
        a("#india-vectormap").vectorMap({
          map: "in_mill_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#6c757d" } },
        }),
        a("#australia-vectormap").vectorMap({
          map: "au_mill_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#0acf97" } },
        }),
        a("#chicago-vectormap").vectorMap({
          map: "us-il-chicago_mill_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#39afd1" } },
        }),
        a("#uk-vectormap").vectorMap({
          map: "uk_mill_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#fa5c7c" } },
        }),
        a("#canada-vectormap").vectorMap({
          map: "ca_lcc_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#ffbc00" } },
        }),
        a("#europe-vectormap").vectorMap({
          map: "europe_mill_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#727cf5" } },
        }),
        a("#france-vectormap").vectorMap({
          map: "fr_merc_en",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#0acf97" } },
        }),
        a("#spain-vectormap").vectorMap({
          map: "es_merc",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#39afd1" } },
        }),
        a("#spain2-vectormap").vectorMap({
          map: "es_mill",
          backgroundColor: "transparent",
          regionStyle: { initial: { fill: "#6c757d" } },
        });
    }),
      (a.VectorMap = new n()),
      (a.VectorMap.Constructor = n);
  })(window.jQuery),
    (function () {
      "use strict";
      window.jQuery.VectorMap.init();
    })();
  