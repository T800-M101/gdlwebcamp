var map = L.map('mapa').setView([28.6827, -106.099927], 17);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([28.6827, -106.099927]).addTo(map)
.bindPopup('GDLWebCamp 2018 <br> Boletos ya disponibles')
.openPopup();