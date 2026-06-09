<header class="cf-topbar">
    <div class="cf-container cf-nav">
        <button type="button" class="cf-menu-toggle" data-menu-toggle aria-expanded="false"
                aria-controls="cf-mobile-menu" aria-label="Open navigation menu">
            <i class="bi bi-list" data-menu-icon></i>
        </button>
        <div class="cf-nav-left">
            <a href="{{ route('home') }}" class="cf-brand">
                <span class="cf-brand-mark" aria-hidden="true">
                    <img src="/assets/campus-found-logo-nav.png" alt="" class="cf-brand-logo">
                </span>
                <span>Campus Found</span>
            </a>
        </div>
        <div class="cf-nav-dropdown" id="cf-mobile-menu">
            <nav class="cf-nav-links" aria-label="Primary">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class="bi bi-house-door" aria-hidden="true"></i><span>Home</span></a>
                <a href="{{ route('board.index') }}" class="{{ request()->routeIs('board.index') ? 'active' : '' }}"><i class="bi bi-grid" aria-hidden="true"></i><span>Board</span></a>
                <a href="{{ route('claims.index') }}" class="{{ request()->routeIs('claims.*') ? 'active' : '' }}"><i class="bi bi-check2-circle" aria-hidden="true"></i><span>Claims</span></a>
                <a href="{{ request()->routeIs('home') ? '#how-it-works' : route('home').'#how-it-works' }}"><i class="bi bi-info-circle" aria-hidden="true"></i><span>About</span></a>
            </nav>
            <div class="cf-nav-actions">
                <a href="{{ route('report.create') }}" class="cf-btn cf-btn-primary cf-nav-report {{ request()->routeIs('report.*') ? 'active' : '' }}"><i class="bi bi-plus-lg" aria-hidden="true"></i> Report</a>
                @if (session('is_admin'))
                    <a href="{{ route('admin.dashboard') }}" class="cf-btn cf-btn-outline cf-nav-admin">Dashboard</a>
                    <form method="post" action="{{ route('admin.logout') }}" class="cf-nav-logout">
                        @csrf
                        <button type="submit" class="cf-btn cf-btn-danger">Logout</button>
                    </form>
                @endif
            </div>
        </div>
    </div>
</header>
