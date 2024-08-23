<?php defined('BASEPATH') OR exit('No direct script access allowed');
$admin = ADMIN;

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = TRUE;

$route["about"] = "home/about";
$route["contact-us"]["get"] = "home/contact";
$route["privacypolicy"] = "home/privacypolicy";
$route["termsofservice"] = "home/termsofservice";

// features routes
$route["crs-intigration"] = "features/crs_intigration";
$route["user-dashboard"] = "features/user_dashboard";
$route["channel-manager"] = "features/channel_manager";
$route["receptionist"] = "features/receptionist";
$route["admin"] = "features/admin";

//add on routes
$route["payroll-management"] = "add_on/payroll_management";
$route["digital-marketing"] = "add_on/digital_marketing";
$route["website-builder"] = "add_on/website_builder";
$route["revenue-management"] = "add_on/revenue_management";
$route["repetition_management"] = "add_on/repetition_management";
$route["resource-finder-repair"] = "add_on/resource_finder_repair";

// api routes
$route["subscribe"] = "api/subscribe";
$route["contact-us"]["post"] = "api/contact";

// api routes
$route["sitemap.xml"] = "api/sitemap";
$route["robots.txt"] = "api/robots";

// admin routes
$route["$admin/forgot-password"] = "$admin/login/forgot_password";
$route["$admin/check-otp"] = "$admin/login/check_otp";
$route["$admin/change-password/(:any)"] = "$admin/login/change_password/$1";
$route["$admin/dashboard"] = "$admin/home";

// routes for blogs & portfolio for front end
$route["blogs"] = "blogs/index";
$route["(:any)"] = "blogs/category_blog/$1";