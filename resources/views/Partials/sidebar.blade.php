<div class="sidebar">
    <div class="logo-details pl-4">
        <img src="{{asset('img/logo.jpg')}}" alt="" height="60" width="60" >
        <span class="logo_name">Dispertaru DIY</span>
    </div>
    <ul class="nav-links">
        <li>
            <a href="#">
                <i class='bx bx-user-circle'></i>
                <span class="link_name">Admin</span>
            </a>
            <ul class="sub-menu blank">
                <li><a href="#" class="link_name">Admin</a></li>
            </ul>
        </li>
        <li>
            <a href="#">
                <i class='bx bx-home-alt'></i>
                <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
                <li><a href="#" class="link_name">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <div class="icon-link">
                <a href="#">
                    <i class='bx bx-collection'></i>
                    <span class="link_name">Tambah Dokumen</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="#" class="link_name">Tambah Dokumen</a></li>
                <li><a href="{{route('form-dpemanfaatan')}}">Pemanfaatan</a></li>
                <li><a href="{{route('Create-Pengawasan')}}">Pengawasan</a></li>
            </ul>
        </li>
        <li>
            <div class="icon-link">
                <a href="#">
                    <i class='bx bx-book-alt'></i>
                    <span class="link_name">Dokumen Tersimpan</span>
                </a>
                <i class='bx bx-chevron-down arrow'></i>
            </div>
            <ul class="sub-menu">
                <li><a href="#" class="link_name">Dokumen Tersimpan</a></li>
                <li><a href="{{ route('pemanfaatan.index') }}">Pemanfaatan</a></li>
                <li><a href="{{ route('pengawasan.index') }}">Pengawasan</a></li>
            </ul>
        <li>
            <div class="profile-details">
                <div class="profile-content">
                    <img src="{{asset('img/profile.jpg')}}" alt="profileImg">
                </div>
                <div class="name-job">
                    <div class="profile_name">Kelompok DPTR</div>
                    <div class="job">Elsa, Sopi, Ratu, Trisa, Rabih</div>
                </div>
                <i class='bx bx-log-out'></i>
            </div>
        </li>
    </ul>
</div>

<script src="{{asset('java/script.js')}}"></script>