<?= $this->extend('Layout/frontend.php') ?>

<?= $this->section('content') ?>

<!-- Contact Start -->
<?php $validation = \Config\Services::validation(); ?>
<!-- Flash Success Message -->


<div class="container-xxl py-5">
    <div class="container py-5 px-lg-5">
        <div class="wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center mb-5 text-white">Contact For Any Query</h1>
        </div>
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="wow fadeInUp" data-wow-delay="0.3s">
                    <form action="<?= base_url('/send') ?>" method="POST" autocomplete="off">
                        <div class="row g-3">
                            <div class="col-md-6 position-relative">
                                <label for="name" class="form-label">Your Name</label>
                                <div class="form-floating">
                                    <i class="icon fa fa-user"></i>
                                    <input type="text"
                                        class="form-control margin-bottom <?= ($validation->getError('name')) ? 'is-invalid' : '' ?>"
                                        id="name" name="name" placeholder="Your Name" required>
                                </div>
                                <?php if ($validation->getError('name')): ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('name') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 position-relative">
                                <label for="email" class="form-label">Your Email</label>
                                <div class="form-floating">
                                    <i class="icon fa fa-envelope"></i>
                                    <input type="email"
                                        class="form-control margin-bottom <?= ($validation->getError('email')) ? 'is-invalid' : '' ?>"
                                        id="email" name="email" placeholder="Your Email" required>
                                </div>
                                <?php if ($validation->getError('email')): ?>
                                    <div class="invalid-feedback"><?= $validation->getError('email') ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 position-relative">
                                <label for="subject" class="form-label">Subject</label>
                                <div class="form-floating">
                                    <i class="icon fa fa-tag"></i>
                                    <input type="text"
                                        class="form-control margin-bottom <?= ($validation->getError('subject')) ? 'is-invalid' : '' ?>"
                                        id="subject" name="subject" placeholder="Subject" required>
                                </div>
                                <?php if ($validation->getError('subject')): ?>
                                    <div class="invalid-feedback"><?= $validation->getError('subject') ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12 position-relative">
                                <label for="message" class="form-label">Message</label>
                                <div class="form-floating">
                                    <i class="icon fa fa-comments"></i>
                                    <textarea
                                        class="form-control margin-bottom <?= ($validation->getError('message')) ? 'is-invalid' : '' ?>"
                                        placeholder="Leave a message here" id="message" name="message"
                                        required><?= old('message') ?></textarea>
                                </div>
                                <?php if ($validation->getError('message')): ?>
                                    <div class="invalid-feedback"><?= $validation->getError('message') ?></div>
                                <?php endif; ?>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?= $this->endSection() ?>