<script>
    function updateRoomDetails(roomData) {
        document.querySelector('.user-details h5').textContent = roomData.room_name;
        document.querySelector('.user-details .avatar img').src = roomData.room_icon;
        if (roomData.is_online) {
            document.querySelector('.user-details .last-seen').textContent = 'Online';
        } else if (roomData.last_seen) {
            let lastSeen = calculateLastSeen(roomData.last_seen);
            document.querySelector('.user-details .last-seen').textContent = 'Last Seen ' + lastSeen;
        } else {
            document.querySelector('.user-details .last-seen').textContent = 'Last Seen: Not Available';
        }
    }
</script>