<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="latest-news our-blog">
    <div class="container">
        <div class="row">
            <?php if (!empty($this->categories)) { ?>
                <div class="col-lg-12 col-md-12">
                    <!-- Sidebar Our Projects Nav start -->
                    <div class="our-projects-nav wow fadeInUp" data-wow-delay="0.25s">
                        <ul>
                            <li><a href="javascript:;" class="active-btn" data-filter="*">all</a></li>
                            <?php foreach ($this->categories as $category) : ?>
                                <li><a href="javascript:;" data-filter=".<?= e_id($category['id']); ?>"><?= $category['c_name']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <!-- Sidebar Our Projects Nav End -->
                </div>
            <?php } ?>
            <div class="col-lg-12">
                <div class="row project-item-boxes">
                    <?php if(!empty($blogs)): foreach ($blogs as $blog): $category_id = array_map('e_id', explode(',', $blog['category_id'])); ?>
                    <div class="col-lg-6 col-md-6 project-item-box <?php array_walk($category_id, function ($value, $key) { echo $value.' '; }); ?>">
                        <!-- Blog Item Start -->
                        <div class="blog-item wow fadeInUp" data-wow-delay="0.25s" style="visibility: visible; animation-delay: 0.25s; animation-name: fadeInUp;">
                            <!-- Blog Image Start -->
                            <div class="post-featured-image">
                                <figure class="image-anime">
                                    <?php if(is_file($this->path.$blog['image'])): ?>
                                    <?= anchor($blog['page_name'], img($this->path.$blog['image'])) ?>
                                    <?php endif ?>
                                </figure>
                            </div>
                            <!-- Blog Image End -->
                            <!-- Blog Content Start -->
                            <div class="post-item-body">
                                <p>
                                    <?= anchor($blog['page_name'], date('F d Y', strtotime($blog['posted_on']))) ?>
                                </p>
                                <h2>
                                    <?= anchor($blog['page_name'], $blog['b_title']) ?>
                                </h2>
                                <?= the_excerpt($blog['b_description'], 30); ?>
                            </div>
                            <!-- Blog Content End -->
                        </div>
                        <!-- Blog Item End -->
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- Post Pagination Start -->
                <div class="post-pagination wow fadeInUp" data-wow-delay="1.50s" style="visibility: hidden; animation-delay: 1.5s; animation-name: none;">
                    <?= $this->pagination->create_links(); ?>
                </div>
                <!-- Post Pagination End -->
            </div>
        <?php else : ?>
            <div class="col-lg-12 col-sm-12 text-center">
                <h1>
                    No blog available
                </h1>
            </div>
        <?php endif ?>
        </div>
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>