<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="page-header-box mt-2">
    <h1 class="text-anime-style-3"><?= $blog['b_title'] ?></h1>
    <div class="post-single-meta wow fadeInUp" data-wow-delay="0.25s">
        <ul>
            <?php if($blog['blog_type'] === 'Blog'): ?>
            <li><i class="fa-solid fa-calendar-days"></i> <?= date('F d Y', strtotime($blog['posted_on'])) ?></li>
            <?php endif; ?>
            <?php array_walk($category, function ($value, $key) { echo '<li><i class="fa-solid fa-tag"></i> '.$value['c_name'].'</li>'; }); ?>
        </ul>
    </div>
</div>
<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Post Featured Image Start -->
                <?php if(is_file($this->path.$blog['image'])): ?>
                    <div class="post-single-image">
                        <figure class="image-anime reveal" style="transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                            <div class="article-image" style="transform: translate(0px, 0px);">
                                <?= img($this->path.$blog['image'], '', 'style="transform: translate(0px, 0px);"') ?>
                            </div>
                        </figure>
                    </div>
                <?php endif ?>
                <!-- Post Featured Image Start -->
                <!-- Post Content Start -->
                <div class="post-content">
                    <div class="post-entry">
                        <h2 class="wow fadeInUp" data-wow-delay="0.75s" style="visibility: visible; animation-delay: 0.75s; animation-name: fadeInUp;"><?= $blog['b_title'] ?></h2>
                        <?= $blog['b_description'] ?>
                    </div>
                </div>
                <!-- Post Content End -->
            </div>
        </div>
    </div>		
</div>