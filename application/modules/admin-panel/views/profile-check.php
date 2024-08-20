<div class="lockscreen-wrapper">
    <div class="lockscreen-logo">
        <a href="javascript:;"><b><?= APP_NAME; ?></b></a>
    </div>
    <div class="lockscreen-name">Hello, <?= $this->user->name ?></div>
    <div class="lockscreen-item">
        <div class="lockscreen-image">
            <?= img('assets/admin-panel/images/user.png') ?>
        </div>
        <?= form_open('', 'class="ajax-form lockscreen-credentials"') ?>
            <div class="input-group">
                <?= form_input([
                    'class' => "form-control",
                    'type' => "password",
                    'id' => "password",
                    'name' => "password",
                    'maxlength' => 50,
                    'placeholder' => "Password"
                ]); ?>
                <div class="input-group-append">
                    <?= form_button([
                        'type'    => 'submit',
                        'class'   => 'btn',
                        'content' => '<i class="fas fa-arrow-right text-muted"></i>'
                    ]); ?>
                </div>
            </div>
        <?= form_close() ?>
    </div>
    <div class="help-block text-center">
        Enter your password to change profile details
    </div>
</div>