<script>
    document.getElementById('newChatButton').addEventListener('click', function() {
        axios.get('{{ route('contact.get') }}')
            .then(response => {
                userList.innerHTML = '';
                response.data.forEach(user => {
                    const profileImage = user.profile_image ||
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
            })
            .catch(error => console.error('Error fetching the contact list:', error));
    });
</script>
