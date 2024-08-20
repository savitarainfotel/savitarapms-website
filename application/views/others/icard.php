<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet" />
<style>
    .id-card {
        flex-basis: 100%;
        border: 2px solid #0ae0df;
        max-width: 30em;
        margin: auto;
        color: #fff;
        padding: 1em;
        background-color: #0D2C36;
        box-shadow: 0px 0px 3px 1px #12a0a0, inset 0px 0px 3px 1px #12a0a0;
    }

    .profile-row {
        display: flex;
    }

    .profile-row .dp {
        flex-basis: 33.3%;
        align-self: center;
        position: relative;
    }

    .profile-row .desc {
        flex-grow: 66.6%;
        padding: 1em;
        font-family: 'Orbitron', sans-serif;
        color: #a4f3f2;
        text-shadow: 0px 0px 4px #12a0a0;
        letter-spacing: 1px;
    }

    .profile-row .desc h1 {
        margin: 0px;
    }

    .profile-row .dp img {
        max-width: 100%;
        border-radius: 50%;
        display: block;
    }

    .profile-row .dp .dp-arc-inner {
        position: absolute;
        width: 100%;
        height: 100%;
        border: 6px solid transparent;
        border-top-color: #0ae0df;
        border-radius: 50%;
        top: -6px;
        left: -6px;

        animation-duration: 1s;
        animation-name: rotate-clock;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes rotate-clock {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .profile-row .dp .dp-arc-outer {
        position: absolute;
        width: calc(100% + 12px);
        height: calc(100% + 12px);
        border: 6px solid transparent;
        border-bottom-color: #0AE0DF;
        border-radius: 50%;
        top: -12px;
        left: -12px;

        animation-duration: 1s;
        animation-name: rotate-anticlock;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }

    @keyframes rotate-anticlock {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(-360deg);
        }
    }


    .card {
        width: 320px;
        margin: 20px auto;
        border-radius: 20px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: rgb(24, 186, 255);
        background: linear-gradient(90deg, rgba(24, 186, 255, 1) 0%, rgba(155, 234, 254, 1) 100%);
        color: #fff;
        padding: 20px;
    }

    .card-header {
        text-align: center;
        font-size: 24px;
        margin-bottom: 20px;
    }

    .employee-photo {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        margin: 0 auto 20px;
        overflow: hidden;
        border: 2px solid #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .employee-info {
        margin-bottom: 10px;
        font-size: 16px;
    }

    .setImage {
        height: 100%;
        object-fit: cover;
        object-position: right;
    }
</style>
<div class="error-page">
    <div class="container">
        <div class="row">
            <div class="error-page-content">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            Employee ID Card
                        </div>
                        <div class="card-body">
                            <div class="employee-photo">
                                <?= img(is_file($this->path . $employee['image']) ? $this->path . $employee['image'] : 'assets/images/programmer.png', '', 'class="img-fluid setImage"'); ?>
                            </div>
                            <div class="employee-info">
                                <strong>Name:</strong> <?= $employee['e_name']; ?>
                            </div>
                            <div class="employee-info">
                                <strong>ID:</strong> <?= $employee['employee_id']; ?>
                            </div>
                            <div class="employee-info">
                                <strong>Department:</strong> <?= $employee['d_name']; ?>
                            </div>
                            <div class="employee-info">
                                <strong>Position:</strong> <?= $employee['p_name']; ?>
                            </div>
                            <div class="employee-info">
                                <strong>Joining Date:</strong> <?= date('d-m-Y', strtotime($employee['joining_date'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?= anchor('', 'Back To Home', 'class="btn-default wow fadeInUp" data-wow-delay="0.75s"'); ?>
            </div>
        </div>
    </div>
</div>