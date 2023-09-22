<!-- Main navbar -->
<div class="navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10">
    <div class="container-fluid">
        <div class="d-flex d-lg-none me-2">
            <button type="button" class="navbar-toggler sidebar-mobile-main-toggle rounded-pill">
                <i class="ph-list"></i>
            </button>
            <button type="button" class="navbar-toggler sidebar-mobile-component-toggle rounded-pill">
                <i class="ph-arrow-down"></i>
            </button>
        </div>

        @php
            $logo = $navbarData->company['logo'];
        @endphp
        <div class="navbar-brand flex-1 flex-lg-0 d-none d-sm-flex">
            <a href="{{ route('admin.company.index') }}" class="d-inline-flex align-items-center">
                <img src="{{ asset("storage/uploads/$logo") }}" alt="{{ $navbarData->company['name'] }}">
                {{-- <img src="{{ asset("storage/uploads/$logo") }}" class="d-none d-sm-inline-block h-16px ms-3"
                    alt="{{ $navbarData->company['name'] }}"> --}}
            </a>
        </div>

        <ul class="nav flex-row justify-content-end order-1 order-lg-2">

            <li class="nav-item nav-item-dropdown-lg dropdown ms-lg-2">
                <a href="#" class="navbar-nav-link align-items-center rounded-pill p-1" data-bs-toggle="dropdown">
                    <div class="status-indicator-container">
                        @php
                            $privateImage = auth()->user()->private_image;
                        @endphp
                        <img src="{{ asset("storage/uploads/$privateImage") }}" class="w-32px h-32px rounded-pill"
                            alt="{{ auth()->user()->name }}">
                        <span class="status-indicator bg-success"></span>
                    </div>
                    <span class="d-none d-lg-inline-block mx-lg-2">{{ auth()->user()->name }}</span>
                </a>

                <div class="dropdown-menu dropdown-menu-end">
                    <a href="{{ route('admin.users.privateInformation') }}" class="dropdown-item">
                        <i class="ph-user-circle me-2"></i>
                        Hồ Sơ Của Tôi
                    </a>

                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item" style="padding: 0;">
                        <form action="{{ route('admin.users.logout') }}" method="POST"
                            style="width: 100%; height: 100%;">
                            @csrf
                            @method('POST')
                            <button type="submit" class="logoutBtn"><i class="ph-sign-out me-2"></i><span
                                    class="ml-2">Logout
                                </span></button>
                        </form>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
<!-- /main navbar -->
