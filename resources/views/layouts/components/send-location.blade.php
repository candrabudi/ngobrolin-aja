<script>
    axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    var pusher = new Pusher('{{ env('PUSHER_APP_KEY') }}', {
        cluster: '{{ env('PUSHER_APP_CLUSTER') }}',
        authEndpoint: '/pusher/auth',
        auth: {
            headers: {
                'X-CSRF-Token': '{{ csrf_token() }}'
            }
        }
    });

    var channel = pusher.subscribe('private-location.' + '{{ auth()->user()->id }}');

    channel.bind('App\\Events\\LocationUpdated', function(data) {
        sendLocation();
    });

    function sendLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                let location = position.coords.latitude + ',' + position.coords.longitude;
                axios.post('/update-location', {
                    location: location
                })
                .then(response => {
                    scheduleNextLocationUpdate();
                })
                .catch(error => {
                    console.error('Error updating location', error);
                    scheduleNextLocationUpdate();
                });
            });
        } else {
            console.error('Geolocation is not supported by this browser.');
            scheduleNextLocationUpdate();
        }
    }
    function scheduleNextLocationUpdate() {
        setTimeout(sendLocation, 30000);
    }
    sendLocation();
</script>