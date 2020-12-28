/*window.onload = function () {
  let map;
  const dreamTeam = { lat: -22.9022854, lng: -43.1858488 };

  function initMap() {
    let mapProp = {
      center: new google.maps.LatLng(dreamTeam),
      scrollWheel: false,
      zoom: 17,
      mapTypeId: "roadmap",
    };

    map = new google.maps.Map(document.getElementById("mapa"), mapProp);
  }

  function addMarker(icon, content) {
    let marker = new google.maps.Marker({
      position: dreamTeam,
      map: map,
      icon: icon,
    });

    let infoWindow = new google.maps.InfoWindow({
      content: content,
      maxWidth: 200,
      pixelOffset: new google.maps.Size(0, 20),
    });

    // infoWindow.open(map, marker); mostrar as infos ao carregar o mapa

    marker.addListener("click", () => {
      infoWindow.open(map, marker);
    });
  }

  let conteudo =
    '<p style="color: black;' +
    "font-size: 13px;" +
    "padding: 10px 0;" +
    "font-weight: bold;" +
    'font-family: "Open Sans";"' +
    "> Dream Team HQ </p>";

  initMap();
  addMarker("", conteudo);
};*/

let dreamTeam = [-22.903185, -43.1885066];

var mymap = L.map("mapa").setView(dreamTeam, 15);

L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
  maxZoom: 18,
}).addTo(mymap);

var marker = L.marker(dreamTeam).addTo(mymap).bindPopup("Dream Team HQ");
