<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <?= anchor(admin('dashboard'), img('assets/favicon.png', '', 'class="brand-image img-circle elevation-3" style="opacity: 0.7"').'<span class="brand-text font-weight-light">'.APP_NAME.'</span>', 'class="brand-link"'); ?>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <?= img('assets/admin-panel/images/user.png', '', 'class="img-circle elevation-2"') ?>
            </div>
            <div class="info">
                <?= anchor(admin('dashboard'), $this->user->name, 'class="d-block"'); ?>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <?= anchor(admin('dashboard'), '<i class="nav-icon fas fa-home"></i> <p>Dashboard</p>', 'class="nav-link '.(active_navigation($name, ['profile', 'dashboard', 'profile-check'])).'"'); ?>
                </li>
                <li class="nav-item">
                    <?= anchor(admin('seo'), '<i class="nav-icon fas fa-globe"></i> <p>SEO</p>', 'class="nav-link '.active_navigation($name, 'seo').'"'); ?>
                </li>
                <li class="nav-item">
                    <?= anchor(admin('employees'), '<i class="nav-icon fas fa-users"></i> <p>Employees</p>', 'class="nav-link '.active_navigation($name, 'employees').'"'); ?>
                </li>
                <li class="nav-item <?= active_navigation($name, ['categories', 'blogs'], true) ?>">
                    <a href="javascript:;" class="nav-link <?= active_navigation($name, ['categories', 'blogs']) ?>">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Blogs
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <?= anchor(admin('blogs'), '<i class="nav-icon far fa-circle"></i> <p>Blogs</p>', 'class="nav-link '.active_navigation($name, 'blogs').'"'); ?>
                        </li>
                        <li class="nav-item">
                            <?= anchor(admin('categories'), '<i class="nav-icon far fa-circle"></i> <p>Categories</p>', 'class="nav-link '.active_navigation($name, 'categories').'"'); ?>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <?= anchor(admin('inquiries'), '<i class="nav-icon fas fa-users"></i> <p>Inquiries</p>', 'class="nav-link '.active_navigation($name, 'inquiries').'"'); ?>
                </li>
                <li class="nav-item">
                    <?= anchor(admin('careers'), '<i class="nav-icon fas fa-users"></i> <p>Careers</p>', 'class="nav-link '.active_navigation($name, 'careers').'"'); ?>
                </li>
                <li class="nav-item">
                    <?= anchor(admin('subscriptions'), '<i class="nav-icon fas fa-users"></i> <p>Subscriptions</p>', 'class="nav-link '.active_navigation($name, 'subscriptions').'"'); ?>
                </li>
            </ul>
        </nav>
    </div>
</aside>