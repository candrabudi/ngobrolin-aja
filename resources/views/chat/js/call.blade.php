<script>
    document.addEventListener('DOMContentLoaded', function() {
        const callButton = document.getElementById('open-voice-call');

        callButton.addEventListener('click', function() {
            // Ganti URL ini dengan endpoint API Anda untuk membuat panggilan
            const createCallApiUrl = '/api/createCall'; 
            
            axios.post(createCallApiUrl)
                .then(response => {
                    if (response.data.status === 'success') {
                        const callId = response.data.data[0].call_id; // Ambil call_id dari respons
                        window.location.href = `/call/${callId}`; // Redirect ke halaman call
                    } else {
                        console.error('Failed to create call:', response.data.message);
                    }
                })
                .catch(error => {
                    console.error('Error creating call:', error);
                });
        });
    });
</script>