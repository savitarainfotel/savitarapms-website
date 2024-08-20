<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="javascript:;" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:;">
                <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <span class="dropdown-item dropdown-header">User Management</span>
                <div class="dropdown-divider"></div>
                <?= anchor(admin('profile'), '<i class="fas fa-user mr-2"></i> Profile', 'class="dropdown-item"'); ?>
                <div class="dropdown-divider"></div>
                <?= anchor(admin('logout'), '<i class="fas fa-sign-out-alt mr-2"></i> Log out', 'class="dropdown-item logout"'); ?>
            </div>
        </li>
    </ul>
</nav>