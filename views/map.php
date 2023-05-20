<?php $title = "Product"; ?>
<?php require_once('navbar.php'); ?>

<?php ob_start(); ?>

<!-- Include Leaflet CSS -->

<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div id="map" style="height: 400px;"></div>
      </div>
   </div>
</div>

<!-- Include Leaflet JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.min.js"></script>

<script>
   // Initialize the map
   var map = L.map('map').setView([31.7917, -7.0926], 8); // Coordinates for Morocco (you can change these)

   // Add the tile layer
   L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
   }).addTo(map);

   // Add a marker to the map
   var marker = L.marker([31.7917, -7.0926]).addTo(map);
   marker.bindPopup("Marker in Morocco").openPopup();
</script>

<?php $content = ob_get_clean(); ?>
<?php require_once('layout.php'); ?>
