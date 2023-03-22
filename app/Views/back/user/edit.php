<?= $this->extend('layouts/backapp') ?>

<?= $this->section('content') ?>

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4">
                        <?php if (!isset($user)): ?>
                            Add New User
                        <?php else: ?>
                            Edit User
                        <?php endif ?>
                    </h5>
                    <?php $validation =  \Config\Services::validation(); ?>
                    <?= $validation->listErrors() ?>
                    <?php if (!isset($user)): ?>
                        <div class="row">
                            <div class="col-12">
                                <?php $attributes = ['id' => 'create-form'];
                                echo form_open('users', $attributes) ?>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                           placeholder="John Doe" name="name" value="<?= set_value('name') ?>">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3" id="datepicker">
                                    <input type="date" class="form-control" id="floatingInput"
                                           placeholder="November 14, 2017" name="birthday" value="<?= set_value('birthday') ?>">
                                    <label for="floatingInput">Birthday</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                           placeholder="KKK@kkk.com" name="email" value="<?= set_value('email') ?>">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example" name="role">
                                        <option value="0" <?= set_select('role', '0', true) ?>>User</option>
                                        <option value="1" <?= set_select('role', '1') ?>>Admin</option>
                                    </select>
                                    <label for="floatingSelect">Role</label>
                                </div>
                                <p class="text-primary text-center">Password will be 123456</p>
                                <div class="form-floating m-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <a href="<?php echo site_url('users'); ?>" class="btn btn-info">Cancel</a>
                                    </div>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="row">
                            <div class="col-12">
                                <?= form_open('users/'.$user->id) ?>
                                <input type="hidden" name="_method" value="PUT" />
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                           placeholder="John Doe" name="name" value="<?= set_value('name', $user->name) ?>">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3" id="datepicker">
                                    <input type="date" class="form-control" id="floatingInput"
                                           placeholder="November 14, 2017" name="birthday" value="<?= set_value('birthday', $user->birthday) ?>">
                                    <label for="floatingInput">Birthday</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                           placeholder="KKK@kkk.com" name="email" value="<?= set_value('email', $user->email) ?>">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example" name="role">
                                        <option value="0" <?= set_select('role', '0', true) ?>>User</option>
                                        <option value="1" <?= set_select('role', '1', $user->role == 1) ?>>Admin</option>
                                    </select>
                                    <label for="floatingSelect">Role</label>
                                </div>
                                <div class="form-floating m-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-success">Save</button>
                                        <a href="<?php echo site_url('users'); ?>" class="btn btn-info">Cancel</a>
                                    </div>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>

            <?php if($user): ?>
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="bg-secondary rounded h-100 p-4">
                        <h5 class="mb-4">Choose Avatar</h5>
                        <div class="row">
                            <div class="col-12">
                                <?= form_open_multipart('users/'.$user->id.'/avatar') ?>
                                <div class="form-floating mb-3">
                                    <a class="btn btn-info" id="image_btn">Choose Image</a>
                                    <input type="file" id="image" accept="image/*" name="image" style="display: none">
                                </div>
                                <div class="form-floating mb-3">
                                    <div id="preview" style="width: 220px; height: 220px">
                                        <img src="<?= img_data($user->avatar); ?>" alt="slide" width="100%" height="100%">
                                    </div>
                                    <button type="submit" class="btn btn-success mt-3" id="upload" style="display: none">Upload</button>
                                </div>
                                <?= form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif ?>
        </div>
    </div>
    <!-- Form End -->

    <script>
        $(document).ready(function () {
            $('#image_btn').click(function () {
                $('#image').click();
            });
            $('#image').change(function(e) {
                if(e.target.value) {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();

                        reader.onload = function (e) {
                            $('#preview img').attr('src', e.target.result);
                            $('#upload').show();
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                } else {
                    $("#preview img").attr("src", "<?= img_data($user->avatar); ?>");
                    $('#upload').hide();
                }
            });
        });
    </script>

<?= $this->endSection() ?>