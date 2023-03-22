<?= $this->extend('layouts/backapp') ?>

<?= $this->section('content') ?>

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4">
                        <?php if (!isset($slide)): ?>
                        Add New Slide
                        <?php else: ?>
                        Edit Slide
                        <?php endif ?>
                    </h5>
                    <?php $validation =  \Config\Services::validation(); ?>
                    <?= $validation->listErrors() ?>
                    <?php if (!isset($slide)): ?>
                        <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <?php $attributes = ['id' => 'create-form'];
                            echo form_open_multipart('slides', $attributes) ?>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                       placeholder="Healthy, Happy Life" name="title" value="<?= set_value('title') ?>">
                                <label for="floatingInput">Title</label>
                            </div>
                            <div class="form-floating mb-3">
                                <select class="form-select" id="floatingSelect"
                                        aria-label="Floating label select example" name="tag">
                                    <?php foreach($tags as $tag): ?>
                                        <option value="<?= $tag->id; ?>" <?= set_select('tag', $tag->id) ?>><?= $tag->tag_name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                                <label for="floatingSelect">Tag</label>
                            </div>
                            <div class="form-floating mb-3" id="datepicker">
                                <input type="date" class="form-control date" id="floatingInput"
                                       placeholder="November 14, 2017" name="date" value="<?= set_value('date') ?>">
                                <label for="floatingInput">Date</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control image_file" id="floatingInput" name="image_file"
                                       placeholder="slide.jpg">
                                <label for="floatingInput">Image</label>
                                <input type="file" id="image" accept="image/*" name="image" style="display: none">
                            </div>
                            <div class="form-floating m-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <a href="<?php echo site_url('slides'); ?>" class="btn btn-info">Cancel</a>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                        <div class="col-sm-12 col-md-6 col-xl-8">
                            <div id="preview">
                                <img src="" alt="slide" width="100%" height="auto">
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="row">
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <?= form_open_multipart('slides/'.$slide->id) ?>
                                <input type="hidden" name="_method" value="PUT" />
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                           placeholder="Healthy, Happy Life" name="title" value="<?= set_value('title', $slide->title) ?>">
                                    <label for="floatingInput">Title</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example" name="tag">
                                        <?php foreach($tags as $tag): ?>
                                        <option value="<?= $tag->id; ?>" <?= set_select('tag', $tag->id, $tag->id == $slide->tag) ?>><?= $tag->tag_name; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <label for="floatingSelect">Tag</label>
                                </div>
                                <div class="form-floating mb-3" id="datepicker">
                                    <input type="date" class="form-control date" id="floatingInput"
                                           placeholder="November 14, 2017" name="date" value="<?= set_value('date', $slide->date) ?>">
                                    <label for="floatingInput">Date</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control image_file" id="floatingInput" name="image_file"
                                           placeholder="slide.jpg" value="<?= $slide->img_name; ?>">
                                    <label for="floatingInput">Image</label>
                                    <input type="file" id="image" accept="image/*" name="image" style="display: none">
                                </div>
                                <div class="form-floating m-2">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button type="submit" class="btn btn-success">Update</button>
                                        <a href="<?php echo site_url('slides'); ?>" class="btn btn-info">Cancel</a>
                                    </div>
                                </div>
                                <?= form_close() ?>
                            </div>
                            <div class="col-sm-12 col-md-6 col-xl-8">
                                <div id="preview">
                                    <img src="<?= img_data($slide->img_path); ?>" alt="slide" width="100%" height="auto">
                                </div>
                            </div>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Form End -->

    <script>
        $(document).ready(function () {
            function img_fuc() {
                if (!$("#preview img").attr("src")) $("#preview").hide();
                else $("#preview").show();
            }
            img_fuc();
            $('.image_file').click(function () {
                $('#image').click();
            });
            $('#image').change(function(e) {
                if(e.target.value) {
                    let file = $(this)[0].files[0];
                    $('.image_file').val(file.name);
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();

                        reader.onload = function (e) {
                            $('#preview img').attr('src', e.target.result);
                            img_fuc();
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                } else {
                    $('.image_file').val("");
                    $("#preview img").attr("src", "")
                    img_fuc();
                }
            });
        });
    </script>

<?= $this->endSection() ?>