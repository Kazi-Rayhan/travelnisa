    <div class="col-md-4">
        <div class="card bg-transparent">
            <div class="card-body p-0">
                <!-- Desktop Sidebar -->
                <ul class="list-group d-none d-md-block">
                    <li>
                        <a href="{{ route('user.dashboard') }}"
                            class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.dashboard')) active @endif">
                            <i class="fa-solid fa-house"></i><span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="list-group-item d-flex gap-4 side-item align-items-center">
                            <i class="fa-solid fa-box"></i><span>Orders</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.profilePage') }}"
                            class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.profilePage')) active @endif">
                            <i class="fa-solid fa-user"></i><span>My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('user.changePassword') }}"
                            class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.changePassword')) active @endif">
                            <i class="fa-solid fa-key"></i><span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="POST" class="d-flex">
                            @csrf
                            <button type="submit" class="list-group-item d-flex gap-4 side-item align-items-center"
                                style="border: none; padding: 10px; width: 100%; text-align: left;">
                                <i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span>
                            </button>
                        </form>
                    </li>
                </ul>

                <!-- Mobile Menu Button -->
                <div class="text-center mb-2 ">
                    <button class="btn btn-light d-md-none" type="button" data-bs-toggle="collapse"
                        data-bs-target="#mobileMenu" aria-expanded="false" aria-controls="mobileMenu">
                        <i class="fa-solid fa-circle-arrow-down"></i>
                    </button>
                </div>

                <!-- Mobile Menu (collapsible) -->
                <div class="collapse d-md-none" id="mobileMenu">
                    <ul class="list-group mt-2">
                        <li>
                            <a href="{{ route('user.dashboard') }}"
                                class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.dashboard')) active @endif">
                                <i class="fa-solid fa-house"></i><span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="list-group-item d-flex gap-4 side-item align-items-center">
                                <i class="fa-solid fa-box"></i><span>Orders</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.profilePage') }}"
                                class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.profilePage')) active @endif">
                                <i class="fa-solid fa-user"></i><span>My Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('user.changePassword') }}"
                                class="list-group-item d-flex gap-4 side-item align-items-center @if (Route::is('user.changePassword')) active @endif">
                                <i class="fa-solid fa-key"></i><span>Change Password</span>
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST" class="d-flex">
                                @csrf
                                <button type="submit" class="list-group-item d-flex gap-4 side-item align-items-center"
                                    style="border: none; padding: 10px; width: 100%; text-align: left;">
                                    <i class="fa-solid fa-right-from-bracket"></i><span>Log Out</span>
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
