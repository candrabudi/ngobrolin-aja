@extends('layouts.app')

@section('content')
    <div class="sidebar-group left-sidebar chat_sidebar">

        <div id="chats" class="left-sidebar-wrap sidebar active slimscroll">
            <div class="slimscroll">

                <div class="left-chat-title d-flex justify-content-between align-items-center position-relative">
                    <div class="setting-title-head">
                        <h4>
                            <a href="#"><img src="assets/img/icon/arrow-left.svg" alt="Icon"></a>
                            Pengaturan
                        </h4>
                    </div>
                </div>

                <div class="setting-profile-card">
                    <div class="account-setting">
                        <h5>Pengaturan Akun</h5>
                    </div>
                    <div class="profile-card">
                        <div class="profile-cover text-center">
                            <label class="profile-cover-avatar">
                                <img class="avatar-img" src="{{ Auth::user()->Profile->profile_image }}" width="200" height="200" alt="Profile Image">
                            </label>
                        </div>
                        <div class="profile-info">
                            <div class="profile-listout">
                                <p class="info-title mb-0">Nama Lengkap</p>
                                <span class="info-text">{{ Auth::user()->Profile->full_name }}</span>
                            </div>
                            <div class="profile-listout">
                                <p class="info-title mb-0">Tentang</p>
                                <span class="info-text">Lorem Ipsum Is Dolor Amet</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="settings-card">
                    <div class="settings-control">
                        <ul>
                            <li>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#password-security">
                                    <div class="setting-card-list">
                                        <i class="bx bx-lock-alt"></i>
                                        <span>Password & Security</span>
                                    </div>
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#setting-languages">
                                    <div class="setting-card-list">
                                        <i class="bx bx-globe"></i>
                                        <span>Languages</span>
                                    </div>
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#setting-device">
                                    <div class="setting-card-list">
                                        <i class="bx bx-laptop"></i>
                                        <span>Manage Devices</span>
                                    </div>
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#setting-logout">
                                    <div class="setting-card-list">
                                        <i class="bx bx-lock-alt"></i>
                                        <span>Logout</span>
                                    </div>
                                    <i class="bx bx-chevron-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="chat setting-chat" id="middle">

    </div>
@endsection
