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
                        <a href="/create" class="nav-link">
                        <i class="bx bx-plus-circle icon"></i>
                        <span class="link">Add Landmark</span>
                    </a>
                </li>

                <?php if ($_SERVER['REQUEST_URI'] === '/') { ?>
                    <form method="POST" action="/" id="filter">
                        <input type="hidden" name="_method" value="PATCH">
                        <li class="list">
                            <a href="#" class="nav-link">
                                <i class="bx bx-filter-alt icon"></i>
                                <div class="w-full">
                                    <select id="type" name="type" class="block w-full border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                                        <option value="" disabled selected>Filter</option>
                                            <option value=''>All</option>
                                            <option value='attraction'>Attraction</option>
                                            <option value='place-of-worship'>Place of Worship</option>
                                            <option value='lodging'>Lodging</option>
                                            <option value="monument" >Monument</option>
                                            <option value="museum" >Museum</option>
                                            <option value="park" >Park</option>
                                            <option value="restaurant" >Restaurant</option>
                                            <option value="swimming" >Swimming</option>
                                            <option value="waterfall" >Waterfall</option>
                                        </select>
                                    </div>
                                </a>
                            </li>
                    </form>
                    <script>
                        const form = document.querySelector('#filter');
                        const select = document.querySelector('#type');
                        select.addEventListener('change', () => {
                            form.submit();
                        });
                    </script> 
                    
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
                <?php } ?>

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