<html>
<head>
	<title>How to get current user location in laravel</title>
</head>
<body style="text-align: center;">
	<h1> How to get current user location in laravel</h1>
	<div style="border:1px solid black; margin-left: 300px; margin-right: 300px;">
	<h3>IP: {{ dd($data) }}</h3>
	<h3>IP: {{ $data->ip }}</h3>
	<h3>Country Name: {{ $data->countryName }}</h3>
	<h3>Country Code: {{ $data->countryCode }}</h3>
	<h3>Region Code: {{ $data->regionCode }}</h3>
	<h3>Region Name: {{ $data->regionName }}</h3>
	<h3>City Name: {{ $data->cityName }}</h3>
	<h3>Zipcode: {{ $data->zipCode }}</h3>
	<h3>Latitude: {{ $data->latitude }}</h3>
	<h3>Longitude: {{ $data->longitude }}</h3>
	</div>
</body>
    <footer class="px-3 text-lg text-center text-white no-underline uppercase bg-gray-900 py- italilc"><a
            href="https://www.wesley.io.ke/">Wesley Sinde: Some rights reserved {{ now()->year }}</a></footer>
</html>