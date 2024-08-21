<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<main>
    <div class="container py-4 mt-4">
        <h1>Blogs</h1>
        <div class="d-flex justify-content-center align-items-center">
            <div class="row g-4">
                <?php if (!empty($blogs)): foreach ($blogs as $blog): $category_id = array_map('e_id', explode(',', $blog['category_id'])); ?>
                    <div class="col-lg-4 col-sm-6">
                        <a href="<?= site_url($blog['page_name']); ?>">
                            <div class="card radius-20 h-100">
                                <?php if (is_file($this->path . $blog['image'])): ?>
                                    <?= img($this->path . $blog['image'], '', 'class=" card-img-top p-2 radius-20"'); ?>
                                <?php endif ?>
                                <div class="card-body p-5">
                                    <p class="card-text"><?php echo date("F d Y", strtotime($blog['posted_on'])); ?></p>
                                    <h3 class="card-title textdark"><?php echo $blog['b_title']; ?></h3>
                                    <p class="card-text"><?php echo substr($blog['b_description'], 0, 150); ?>...</p>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
                <div class="col-8 offset-4">
                    <?= $this->pagination->create_links(); ?>
                </div>
                <?php else : ?>
                    <div class="col-lg-12 col-sm-12 text-center">
                        <h1>
                            No blog available
                        </h1>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>