<script>
    function calculateLastSeen(lastSeenTime) {
        let currentTime = new Date();
        let lastSeen = new Date(lastSeenTime);
        let timeDiff = currentTime - lastSeen;
        let hoursDiff = Math.floor(timeDiff / (1000 * 60 * 60));

        if (hoursDiff >= 24) {
            let options = {
                year: 'numeric',
                month: 'short',
                day: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                hour12: true
            };
            return lastSeen.toLocaleDateString('en-US', options);
        } else {
            let options = {
                hour: 'numeric',
                minute: 'numeric',
                hour12: true
            };
            return 'at ' + lastSeen.toLocaleTimeString('en-US', options);
        }
    }
</script>