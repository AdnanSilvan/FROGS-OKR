<?php
function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    } else {
        $role_id = $ci->session->userdata('role_id'); // Role user yang sedang login
        $current_url = $ci->uri->segment(1); // Ambil URI segmen 1 sebagai URL menu

        // Ambil data submenu berdasarkan URL
        $querySubMenu = $ci->db->get_where('user_sub_menu', ['url' => $current_url])->row_array();
        if (!$querySubMenu) {
            redirect('auth/blocked'); // Jika URL tidak ditemukan di user_sub_menu
        }

        $sub_menu_id = $querySubMenu['id']; // Ambil ID submenu

        // Cek akses berdasarkan role_id dan sub_menu_id
        $userAccess = $ci->db->get_where('user_access_menu', [
            'role_id' => $role_id,
            'sub_menu_id' => $sub_menu_id
        ]);

        if ($userAccess->num_rows() < 1) {
            redirect('auth/blocked'); // Jika tidak memiliki akses
        }
    }
}
