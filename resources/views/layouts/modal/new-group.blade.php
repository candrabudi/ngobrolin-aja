<div class="modal fade " id="new-group">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    New Group
                </h5>
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
                                <input type="password" class="form-control pass-input">
                            </div>
                            <div class="pass-login">
                                <label class="form-label">Description </label>
                                <textarea class="form-control "></textarea>
                            </div>
                            <div class="pass-login">
                                <h4>Group Type</h4>
                                <div class="d-flex align-items-center">
                                    <label class="group-type-radio">Public
                                        <input type="radio" checked="checked" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="group-type-radio">Private
                                        <input type="radio" name="radio">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">
                                <i class="feather-x me-1"></i>Cancel
                            </a>
                            <a class="btn btn-primary" id="next-parti">
                                <i class="feather-arrow-right me-1"></i>Next
                            </a>
                        </div>
                    </div>
                    <div class="parti-group hash-participant">
                        <div class="user-block-group mb-4">
                            <div class="search_chat has-search group-name-search">
                                <span class="fas fa-search form-control-feedback"></span>
                                <input class="form-control chat_input" id="search-contact-one" type="text"
                                    placeholder="Search">
                            </div>
                            <h5>Contacts</h5>
                            <div class="sidebar">
                                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                    <div class="fav-title contact-title">
                                        <h6>A</h6>
                                    </div>
                                </div>
                                <ul class="user-list">
                                    <li class="user-list-item">
                                        <div class="list-user-blk">
                                            <div class="avatar">
                                                <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle"
                                                    alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Alexander Manuel</h5>
                                                    <p>Active 4Min Ago</p>
                                                </div>
                                            </div>
                                            <div class="notify-check parti-notify-check">
                                                <div
                                                    class="form-check d-flex align-items-center justify-content-start ps-0">
                                                    <label class="custom-check mt-0 mb-0">
                                                        <input type="checkbox" name="remeber">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item">
                                        <div class="list-user-blk">
                                            <div class="avatar">
                                                <img src="assets/img/avatar/avatar-5.jpg" class="rounded-circle"
                                                    alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Annette Theriot</h5>
                                                    <p>Online</p>
                                                </div>
                                            </div>
                                            <div class="notify-check parti-notify-check">
                                                <div
                                                    class="form-check d-flex align-items-center justify-content-start ps-0">
                                                    <label class="custom-check mt-0 mb-0">
                                                        <input type="checkbox" name="remeber">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="d-flex justify-content-between align-items-center ps-0 pe-0">
                                    <div class="fav-title contact-title">
                                        <h6>B</h6>
                                    </div>
                                </div>
                                <ul class="user-list">
                                    <li class="user-list-item">
                                        <div class="list-user-blk">
                                            <div class="avatar">
                                                <img src="assets/img/avatar/avatar-4.jpg" class="rounded-circle"
                                                    alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Bacon Mark</h5>
                                                    <p>Active 8Min Ago</p>
                                                </div>
                                            </div>
                                            <div class="notify-check parti-notify-check">
                                                <div
                                                    class="form-check d-flex align-items-center justify-content-start ps-0">
                                                    <label class="custom-check mt-0 mb-0">
                                                        <input type="checkbox" name="remeber">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="user-list-item ">
                                        <div class="list-user-blk mb-0">
                                            <div class="avatar">
                                                <img src="assets/img/avatar/avatar-5.jpg" class="rounded-circle"
                                                    alt="image">
                                            </div>
                                            <div class="users-list-body">
                                                <div>
                                                    <h5>Bennett Gerard</h5>
                                                    <p>Last Seen Today at 12:35 AM</p>
                                                </div>
                                            </div>
                                            <div class="notify-check parti-notify-check">
                                                <div
                                                    class="form-check d-flex align-items-center justify-content-start ps-0">
                                                    <label class="custom-check mt-0 mb-0">
                                                        <input type="checkbox" name="remeber" checked>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="mute-chat-btn">
                            <a class="btn btn-secondary" id="previous-group">
                                <i class="bx bx-left-arrow-alt me-1"></i>Previous
                            </a>
                            <a class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close"
                                data-bs-toggle="modal" data-bs-target="#Success-group">
                                <i class="bx bx-send me-1"></i>Create
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
