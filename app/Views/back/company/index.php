<?= $this->extend('layouts/backapp') ?>

<?= $this->section('content') ?>

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4">
                        About us
                    </h5>
                    <div class="row">
                        <div class="col-12">
                            <?= form_open('company') ?>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                       placeholder="The Future" name="name" value="<?= set_value('name', $name) ?>">
                                <label for="floatingInput">Company Name</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea class="form-control" placeholder="Leave a comment here"
                                          id="floatingTextarea" style="height: 150px;" name="description"><?= set_value('description') ?><?= set_value('description', $description) ?></textarea>
                                <label for="floatingTextarea">Description</label>
                            </div>
                            <div class="form-floating m-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="submit" class="btn btn-success">Save</button>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-xl-4">
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4">Company Logo</h5>
                    <div class="row">
                        <div class="col-12">
                            <?= form_open_multipart('company/logo') ?>
                            <div class="form-floating mb-3">
                                <a class="btn btn-info" id="image_btn">Choose Image</a>
                                <input type="file" id="image" accept="image/*" name="image" style="display: none">
                            </div>
                            <div class="form-floating mb-3">
                                <div id="preview" style="width: 220px; height: 220px">
                                    <img src="<?= img_data($logo); ?>" alt="slide" width="100%" height="100%">
                                </div>
                                <button type="submit" class="btn btn-success mt-3" id="upload" style="display: none">Upload</button>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
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
                    $("#preview img").attr("src", "");
                    $('#upload').hide();
                }
            });
        });
    </script>

<?= $this->endSection() ?>