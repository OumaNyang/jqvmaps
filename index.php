<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jVectorMap and jQVMap Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jqvmap.min.css" integrity="sha512-RPxGl20NcAUAq1+Tfj8VjurpvkZaep2DeCgOfQ6afXSEgcvrLE6XxDG2aacvwjdyheM/bkwaLVc7kk82+mafkQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #world-map-markers, #kenya-vectormap {
            width: 100%;
            height: 400px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row py-5 gy-5">
        <div class="col-12">
            <div id="world-map-markers"></div>
        </div>
        <div class="col-md-6">
            <div id="kenya-vectormap"></div>
        </div>
        <div class="col-md-6">
            <!-- Additional content can be placed here -->
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/jquery.vmap.min.js" integrity="sha512-Zk7h8Wpn6b9LpplWXq1qXpnzJl8gHPfZFf8+aR4aO/4bcOD5+/Si4iNu9qE38/t/j1qFKJ08KWX34d2xmG0jrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.world.js" integrity="sha512-MY25HCukIs0J/mkXQ5qrPYzipNwn96U2B/MSJohB0XAkVay4g39nwDuy3EMepg18QShbS6lvhNWdnl1YQimclQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqvmap/1.5.1/maps/jquery.vmap.kenya.js" integrity="sha512-0M3w7tm5PzGyzG6MGo8YEnCs6F7l6dZ+yqso4aG0sYst1Xb0a9fn6F6qdx2E7E5uq+8/U6d9Y1a4yW/y8lvR9w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="vendor/maps/js/jvectormap.counties.ken.js"></script>
<script src="vendor/maps/js/jvectormap.districts.uga.js"></script>
<script src="vendor/maps/js/jvectormap.regions.tza.js"></script>
<!-- <script src="assets/js/jvmap.init.js"></script> -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js" integrity="sha512-TPh2Oxlg1zp+kz3nFA0C5vVC6leG/6mm1z9+mA81MI5eaUVqasPLO8Cuk4gMF4gUfP5etR73rgU/8PNMsSesoQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        // Initialize jQVMap
        $('#world-map-markers').vectorMap({
            map: 'world_en',
            backgroundColor: 'transparent',
            color: '#5a5a5a',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true
        });

        // Initialize jVectorMap for Kenya
        $('#kenya-vectormap').vectorMap({
            map: 'ke-counties-map',
            backgroundColor: 'transparent',
            color: '#5a5a5a',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: true,
            showTooltip: true
        });
    });
</script>

</body>
</html>


</body>
</html>