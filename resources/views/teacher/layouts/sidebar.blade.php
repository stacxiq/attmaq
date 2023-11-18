<!-- main-sidebar -->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>

<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="#"><img src="{{ asset('assets/logo/hand.png') }}" style="width:40px; height:40px" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="#"><img src="{{ asset('assets/logo/hand.png') }}" style="width:40px; height:40px" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="#"><img src="{{ asset('assets/logo/hand.png') }}" style="width:40px; height:40px" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="#"><img src="{{ asset('assets/logo/hand.png') }}" style="width:40px; height:40px" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <ul class="side-menu">
            <li class="side-item side-item-category">الرئيسية</li>
            <li class="slide">
                <a class="side-menu__item" href="{{ route('teacher.dashboard') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">التقارير</span></a>
            </li>

            <li class="slide">
                <a class="side-menu__item" href="{{ route('single-sessions.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                    </svg>

                    <span class="side-menu__label">الحلقات الفردية</span></a>
            </li>




        </ul>
    </div>
</aside>

