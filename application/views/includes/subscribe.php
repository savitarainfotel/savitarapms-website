<!-- Modal -->
<div class="modal fade" id="subscribe-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="subscribe-modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <?= form_open('', 'id="subscribeForm"'); ?>
                <div class="modal-header">
                    <h5 class="modal-title" id="subscribe-modalLabel"><h2 class=""><?= APP_NAME; ?></h2></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>
                        Please Subscribe To Get Updates
                    </h4>
                    <p>
                        Subscribe With Your Email To Get Latest Updates
                    </p>
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email" />
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="default-btn page-btn backColor disabled" style="pointer-events: all; cursor: pointer;">
                        Subscribe
                    </button>
                </div>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<script>
    const subscribe = true;
</script>