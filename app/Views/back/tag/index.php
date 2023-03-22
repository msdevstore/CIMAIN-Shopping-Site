<?= $this->extend('layouts/backapp') ?>

<?= $this->section('content') ?>

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <?php foreach($tags as $tag): ?>
            <div class="col-sm-12 col-md-4 col-xl-2">
                <?= form_open_multipart('tag/'.$tag->id) ?>
                <div class="bg-secondary rounded h-100 p-4">
                    <h5 class="mb-4">
                        <?= $tag->tag_name; ?>
                    </h5>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating">
                                <a class="btn btn-info mb-2 image_btn" img-id="<?= $tag->id; ?>">Choose</a>
                                <div class="preview" style="width: 100%;">
                                    <img src="<?= img_data($tag->tag_img); ?>" id="img_<?= $tag->id; ?>" alt="Tag logo" width="100%" height="100%">
                                </div>
                                <input type="hidden" id="default_<?= $tag->id; ?>" value="<?= $tag->tag_img; ?>">
                                <input type="file" class="image" id="image_<?= $tag->id; ?>" img-id="<?= $tag->id; ?>" accept="image/*" name="image" style="display: none">
                                <a type="submit" class="btn btn-success mt-3" id="upload_<?= $tag->id; ?>" style="display: none; color: white !important;">Upload</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?= form_close() ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- Form End -->

    <script>
        $(document).ready(function () {
            $(document).on('click', '.image_btn', function() {
                let id = $(this).attr('img-id');
                $('#image_' + id).click();
            });

            $('.image').change(function(e) {
                let id = $(this).attr('img-id');
                if(e.target.value) {
                    if (this.files && this.files[0]) {
                        let reader = new FileReader();

                        reader.onload = function (e) {
                            $("#img_" + id).attr('src', e.target.result);
                            $("#upload_" + id).show();
                        }

                        reader.readAsDataURL(this.files[0]);
                    }
                } else {
                    $("#img_" + id).attr('src', $('#default_' + id).val());
                    $("#upload_" + id).hide();
                }
            });

            $("[id^='upload_']").click(function(){
                let id = $(this).attr("id").split("_")[1];
                let formData = new FormData();
                formData.append('id', id);
                formData.append('image', $('#image_' + id)[0].files[0]);
                $.ajax({
                    url: "<?= site_url('/tags'); ?>",
                    type: 'post',
                    enctype: 'multipart/form-data',
                    contentType: false,
                    processData: false,
                    data: formData,
                    success:function(data) {
                        if(data === 'success') {
                            alert('Tag image uploaded successfully!');
                            $("#upload_" + id).hide();
                        } else {
                            alert('Tag image upload failed!');
                        }
                    }
                })
            });

        });
    </script>

<?= $this->endSection() ?>