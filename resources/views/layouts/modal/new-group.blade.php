<div class="modal fade" id="new-group">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Grup</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span class="material-icons">close</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="new-group-add show-group-add">
                        <div class="user-profiles-group mb-4">
                            <div class="profile-cover text-center">
                                <label class="profile-cover-avatar" for="avatar_upload">
                                    <img class="avatar-img" src="assets/img/avatar/avatar-2.jpg" alt="Profile Image">
                                    <input type="file" id="avatar_upload">
                                    <span class="avatar-edit">
                                        <img src="assets/img/icon/camera.svg" alt="Image">
                                    </span>
                                </label>
                            </div>
                            <div class="pass-login">
                                <label class="form-label">Group Name </label>
                                <input type="text" id="group-name" class="form-control">
                            </div>
                            <div class="pass-login">
                                <label class="form-label">Description </label>
                                <textarea id="group-description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Batal
                            </a>
                            <a class="btn btn-primary" id="next-parti">
                                <i class="feather-arrow-right me-1"></i>Lanjut
                            </a>
                        </div>
                    </div>
                    <div class="parti-group hash-participant">
                        <div class="user-block-group mb-4">
                            <div class="search_chat has-search group-name-search">
                                <span class="fas fa-search form-control-feedback"></span>
                                <input class="form-control chat_input" id="search-contact-one" type="text" placeholder="Search">
                            </div>
                            <h5>Kontak</h5>
                            <div class="sidebar">
                                <ul id="contact-list" class="user-list">
                                    <!-- Contacts will be dynamically added here -->
                                </ul>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" id="previous-group">
                                <i class="bx bx-left-arrow-alt me-1"></i>Kembali
                            </a>
                            <a class="btn btn-primary" id="create-group">
                                <i class="bx bx-send me-1"></i>Buat
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>