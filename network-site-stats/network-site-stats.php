<?php
/*
Plugin Name: Network Site Stats
Description: Thống kê các site trong Multisite
Version: 1.0
Author: Nguyễn Văn Hiếu
Author URI: mailto:nguyenhieudocla123a@gmail.com
Network: true
Text Domain: network-site-stats

MSV: 23810310112
Email: nguyenhieudocla123a@gmail.com
*/

// Thêm menu vào Network Admin
add_action('network_admin_menu', 'nss_add_menu');

function nss_add_menu() {
    add_menu_page(
        'Network Site Stats',
        'Site Stats',
        'manage_network',
        'network-site-stats',
        'nss_render_page'
    );
}

// Hiển thị dữ liệu
function nss_render_page() {
    ?>
    <div class="wrap">
        <h1>Network Site Statistics</h1>

        <table class="widefat striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Site Name</th>
                    <th>Post Count</th>
                    <th>Latest Post</th>
                </tr>
            </thead>
            <tbody>
    <?php

    $sites = get_sites();

    foreach ($sites as $site) {

        switch_to_blog($site->blog_id);

        // Số bài viết
        $post_count = wp_count_posts()->publish;

        // Bài mới nhất
        $latest_post = get_posts([
            'numberposts' => 1
        ]);

        $latest_date = !empty($latest_post)
            ? $latest_post[0]->post_date
            : 'No post';

        ?>
        <tr>
            <td><?php echo $site->blog_id; ?></td>
            <td><?php echo get_bloginfo('name'); ?></td>
            <td><?php echo $post_count; ?></td>
            <td><?php echo $latest_date; ?></td>
        </tr>
        <?php

        restore_current_blog();
    }

    ?>
            </tbody>
        </table>
    </div>
    <?php
}