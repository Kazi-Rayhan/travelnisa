
<!-- Sidebar Toggle Button (Visible on Mobile) -->
<button class="btn btn-primary d-md-none mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa-solid fa-bars"></i> Menu
</button>

<!-- Sidebar (now using flex instead of block) -->
<div class="collapse d-md-flex" id="sidebarMenu">
    <div class="col-md-4">
        <div class="card bg-transparent">
            <div class="card-body p-0">
                <ul class="list-group">
                    <li>
                        <a href="{{ route('user.dashboard') }}" class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.dashboard')) active @endif">
                            <i class="fa-solid fa-house"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.profilePage') }}" class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.profilePage')) active @endif">
                            <i class="fa-solid fa-user"></i><span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.changePassword') }}" class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.changePassword')) active @endif">
                            <i class="fa-solid fa-key"></i><span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="d-flex">
                            @csrf
                            <button type="submit" class="list-group-item d-flex gap-4 side-item align-items-center" style="border: none; padding: 10px; width: 100%; text-align: left;">
                                <i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
