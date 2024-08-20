<?php defined('BASEPATH') OR exit('No direct script access allowed');
$admin = ADMIN;

$route['default_controller'] = 'home';
$route['404_override'] = 'home/error_404';
$route['translate_uri_dashes'] = TRUE;

$route["about"] = "home/about";
$route["career"] = "home/career";
$route["apply"]["get"] = "home/apply";
$route["contact-us"]["get"] = "home/contact";
$route["privacypolicy"] = "home/privacypolicy";
$route["termsofservice"] = "home/termsofservice";
$route["software-development-technology"] = "home/software_development_technology";
$route["team"] = "home/team";

// services routes
$route["services"] = "services/index";
$route["custom-software-development"] = "services/custom_software_development";
$route["e-commerce-development"] = "services/e_commerce_development";
$route["game-development-services"] = "services/game_development_services";
$route["mobile-application-development"] = "services/mobile_application_development";
$route["virtual-production"] = "services/virtual_production";
$route["visualization"] = "services/visualization";
$route["web-development"] = "services/web_development";
$route["graphics-design"] = "services/graphics_design";
$route["digital-marketing"] = "services/digital_marketing";
$route["networking-services"] = "services/networking_services";

// api routes
$route["subscribe"] = "api/subscribe";
$route["contact-us"]["post"] = "api/contact";
$route["apply"]["post"] = "api/apply";
$route["icard/(:any)"] = "api/icard/$1";

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
$route["portfolio"] = "blogs/index";
$route["(:any)"] = "blogs/category_blog/$1";