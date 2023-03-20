<nav>
    <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name"><?= htmlspecialchars($heading) ?></span>
    </div>

    <div class="logo logo-right">
        <img src="img/bohol-logo.png" alt="Logo">
    </div>

    <div class="sidebar">
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">Local Landmarks</span>
        </div>

        <div class="sidebar-content">
            <ul class="lists">
                <li class="list">
                    <a href="/" class="nav-link">
                        <i class='bx bx-map-alt icon'></i>
                        <span class="link">Home </span>
                    </a>
                </li>
                <li class="list">
                    <a href="/landmarks" class="nav-link">
                        <i class='bx bx-landscape icon' ></i>
                        <span class="link">Landmarks</span>
                    </a>
                </li>
                <li class="list">
                    <a href="/landmarks/create" class="nav-link">
                        <i class='bx bx-plus-circle icon'></i>
                        <span class="link">Add Landmark</span>
                    </a>
                </li>
                <!-- <li class="list">
                    <a href="#" class="nav-link">
                        <i class='bx bx-history icon'></i>
                        <span class="link">History</span>
                    </a>
                </li>
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class='bx bx-filter-alt icon'></i>
                        <span class="link">Filter</span>
                    </a>
                </li> -->
                <!-- from: maketechstuff.com -->
                <li class="list">
                    <label href="#" class="nav-link">
                        <i class='bx bx-current-location icon'></i>
                        <span class="link">Coordinates</span>
                        <div class="toggle-container">
                            <input type="checkbox" class="toggle absolute top-2 right-5" id="coords-toggle">
                            <span class="toggle-slider"></span>
                        </div>
                    </label>
                </li>
            </ul>

            <div class="bottom-cotent">
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class='bx bxs-info-circle icon'></i>
                        <span class="link">About us</span>
                    </a>
                </li>
            </div>
        </div>
    </div>
</nav>