        <div class="map-container">
            <div class="container">
                <div class="icons"><i class="fa fa-map-marker"></i></div>
            </div>
            <div id="map" style="height: 250px; width: 100%; background-color: #fff;"></div>
        </div>
        @push('js_inline')
            <script>
                function initMap() {

                    var center = {lat: {{ setting('contact::contact-map-lat') }}, lng: {{ setting('contact::contact-map-lng') }} };

                    var map = new google.maps.Map(document.getElementById('map'),{
                        center: center,
                        zoom: 16
                    });

                    var infoWindow = new google.maps.InfoWindow({
                        content: "{{ setting('theme::company-name') }}"
                    });

                    var marker = new google.maps.Marker({
                        position: center,
                        map: map,
                        title: "{{ setting('theme::company-name') }}",
                        icon: "{{ Theme::url('images/favicon.png') }}"
                    });

                    marker.addListener('click', function () {
                        infoWindow.open(map, marker);
                    });
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key={{ setting('contact::contact-map-key') }}&callback=initMap&language={{ locale() }}"></script>
        @endpush