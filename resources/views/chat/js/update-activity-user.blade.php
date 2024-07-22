<script>
    $(document).ready(function() {
        const userProfile = JSON.parse(userProfileJSON);
        const currentUserID = userProfile.user_id;
        var isUserActive = true;
        var idleTimeout = 5 * 60 * 1000;
        var awayTimeout = 5 * 60 * 1000;
        var isActiveUpdated = false;

        var storedStatus = localStorage.getItem('userActivityStatus');
        if (storedStatus && storedStatus === 'online') {
            updateActivityStatus(true);
            isUserActive = true;
        } else {
            updateActivityStatus(false);
            isUserActive = false;
        }

        var setIdle = function() {
            if (isUserActive) {
                updateActivityStatus(false);
                isUserActive = false;
                isActiveUpdated = false;
            }
        };

        var resetTimer = function() {
            clearTimeout(window.userActivityTimer);
            window.userActivityTimer = setTimeout(setIdle, idleTimeout);
        };

        resetTimer();

        $(document).on('mousemove keydown scroll', function() {
            if (!isUserActive) {
                isUserActive = true;
                if (!isActiveUpdated) {
                    updateActivityStatus(true);
                    isActiveUpdated = true;
                }
            }
            resetTimer();
        });

        window.addEventListener('beforeunload', function() {
            updateActivityStatus(false);
        });

        function updateActivityStatus(isActive) {
            var updateData = {
                user_id: currentUserID,
                is_online: isActive ? 1 : 0,
                last_seen: isActive ? null : new Date().toISOString()
            };

            localStorage.setItem('userActivityStatus', isActive ? 'online' : 'offline');

            axios.post('{{ env('API_SECURE_MESSANGER') }}/v1/user/update-activity', updateData, {
                    headers: {
                        'Authorization': 'Bearer ' + token,
                        'Content-Type': 'multipart/form-data'
                    }
                })
                .then(response => {

                })
                .catch(error => {
                    console.error('Error updating activity status:', error);
                });
        }
    });
</script>
