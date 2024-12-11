<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="menu-inner-shadow"></div>

    <!-- Profil Karyawan -->
    <div class="profile-section d-flex align-items-center ps-6 mt-4 mb-2">
        <img src="<?= base_url('assets/assets/img/profile/1.png'); ?>" alt="Hesa Profile" class="rounded-circle"
            width="50" height="50">
        <div class="ms-3">
            <p class="mb-0"><?= $user['name'] ?></p>
        </div>
    </div>


    <ul class="menu-inner py-1">
        <?php
        $role_id = $this->session->userdata('role_id');
        // Query menu utama - dimodifikasi untuk menggunakan sub_menu_id
        $queryMenu = "
        SELECT DISTINCT um.id, um.menu
        FROM user_menu um
        JOIN user_sub_menu usm ON um.id = usm.menu_id
        JOIN user_access_menu uam ON usm.id = uam.sub_menu_id
        WHERE uam.role_id = $role_id
        ORDER BY um.id ASC
    ";
        $menu = $this->db->query($queryMenu)->result_array();
        ?>

        <!-- LOOPING MENU -->
        <?php foreach ($menu as $m): ?>
            <li class="menu-header mt-2 pb-0">
                <span class="menu-header-text"><?= $m['menu']; ?></span>
            </li>

            <!-- SUBMENU SESUAI MENU -->
            <?php
            $menuId = $m['id'];
            // Query submenu - dimodifikasi untuk menggunakan sub_menu_id
            $querySubMenu = "
            SELECT DISTINCT usm.*
            FROM user_sub_menu usm
            JOIN user_access_menu uam ON usm.id = uam.sub_menu_id
            WHERE usm.menu_id = $menuId
            AND usm.is_active = 1
            AND uam.role_id = $role_id
            ORDER BY usm.id ASC
        ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

            <?php foreach ($subMenu as $sm): ?>
                <?php $isActive = ($this->uri->segment(1) == $sm['url']) ? 'active' : ''; ?>
                <li class="menu-item <?= $isActive ?>">
                    <a href="<?= base_url($sm['url']); ?>" class="menu-link">
                        <i class="menu-icon tf-icons <?= $sm['icon']; ?>"></i>
                        <div><?= $sm['title']; ?></div>
                    </a>
                </li>
            <?php endforeach; ?>
        <?php endforeach; ?>

        <!-- Misc -->
        <li class="menu-header mt-2"><span class="menu-header-text">Account</span></li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link btn-danger" style="color: #fff;" onclick="confirmLogout()">
                <i class="menu-icon tf-icons ri-logout-box-line"></i>
                <div data-i18n="Support">Logout</div>
            </a>
        </li>

        <script>
            const logoutUrl = "<?php echo site_url('auth/logout'); ?>";

            function confirmLogout() {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will be logged out!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#1face1',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = logoutUrl;
                    }
                });
            }
        </script>



    </ul>
</aside>