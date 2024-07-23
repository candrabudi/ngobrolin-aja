<script>
    document.getElementById('newChatButton').addEventListener('click', function() {
        // Ambil token dari local storage
        const token = localStorage.getItem('token');

        // Pastikan token ada sebelum melakukan permintaan
        if (!token) {
            console.error('Token tidak ditemukan di local storage');
            return;
        }

        // Set header Authorization dengan token
        axios.get('{{ env('API_SECURE_MESSANGER') }}/v1/contact/list', {
            headers: {
                'Authorization': `Bearer ${token}`
            }
        })
        .then(response => {
            if (response.data.status === 'success') {
                const userList = document.getElementById('user-list'); // Pastikan id userList ada di HTML
                userList.innerHTML = '';
                
                response.data.data.forEach(user => {
                    const profileImage = user.profile_img ||
                        'https://cdn-icons-png.flaticon.com/512/847/847969.png';
                    userList.innerHTML += `
                        <li class="user-list-item">
                            <div class="list-user-blk">
                                <div class="avatar">
                                    <img src="${profileImage}" class="rounded-circle" alt="image">
                                </div>
                                <div class="users-list-body">
                                    <div>
                                        <h5>${user.full_name}</h5>
                                        <p>Active just now</p>
                                    </div>
                                </div>
                                <div class="notify-check parti-notify-radio">
                                    <div class="form-check d-flex align-items-center justify-content-start ps-0">
                                        <label class="group-type-radio">
                                            <input type="radio" name="selected_user_id" value="${user.user_id}">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </li>`;
                });
            } else {
                console.error('Failed to fetch contact list:', response.data.message);
            }
        })
        .catch(error => console.error('Error fetching the contact list:', error));
    });
</script>
