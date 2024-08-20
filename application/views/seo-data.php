<?php defined('BASEPATH') OR exit('No direct script access allowed');

$page = $this->uri->segment(1) ?? 'index';
$seo = $this->main->get('seo', '*', ['page_name' => $page, 'domain_id' => $this->domain['id'], 'is_deleted' => 0]);

$title = !empty($seo['title']) ? $seo['title'] : APP_NAME;
$description = !empty($seo['description']) ? $seo['description'] : APP_NAME;
$keywords = !empty($seo['keywords']) ? $seo['keywords'] : APP_NAME;

echo '<title>' . $title . '</title>' . "\n";

echo '<meta name="description" content="' . $description . '">' . "\n";
echo '<meta name="keywords" content="' . $keywords . '">' . "\n";

echo '<meta property="og:title" content="' . $title . '">' . "\n";
echo '<meta property="og:description" content="' . $description . '">' . "\n";
echo '<meta property="og:description" content="' . $description . '">' . "\n";
echo '<meta property="og:site_name" content="'.APP_NAME.'">' . "\n";
echo '<meta property="og:type" content="article">' . "\n";
echo '<meta property="og:image" content="'.base_url('assets/favicon.png').'">' . "\n";
echo '<meta property="og:url" content="'.current_url().'">' . "\n";

echo '<meta name="twitter:title" content="' . $title . '">' . "\n";
echo '<meta name="twitter:description" content="' . $description . '">' . "\n";
echo '<meta name="twitter:card" content="summary">' . "\n";
echo '<meta name="twitter:url" content="'.current_url().'">' . "\n";
echo '<meta name="twitter:image" content="'.base_url('assets/favicon.png').'">' . "\n";

echo '<meta name="robots" content="index, follow">' . "\n";
echo '<link rel="canonical" href="'.current_url().'">' . "\n";