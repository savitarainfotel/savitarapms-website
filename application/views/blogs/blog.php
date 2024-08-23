<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<main>
    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12">
                <div class="card-title p-5">
                    <h1 class="card-title"><?php echo $blog['b_title']; ?></h1>
                </div>
                <?php if(is_file($this->path.$blog['image'])): ?>
                    <div class="card-img">
                        <?= img($this->path.$blog['image'], '', 'class="card-img-top p-2 radius-20 img-fluid"') ?>
                    </div>
                <?php endif ?>
                <div class="card-body p-5">
                    <p><?php echo date("F d Y", strtotime($blog['posted_on'])); ?></p>
                    <p class=" mt-4"><?php echo $blog['b_description']; ?></p>
                </div>
            </div>
        </div>
    </div>
</main>