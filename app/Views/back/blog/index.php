<?= $this->extend('layouts/backapp') ?>

<?= $this->section('content') ?>

<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="mb-4 d-flex justify-content-between">
                    <h5>Blog Table</h5>
                    <a href="<?php echo site_url('blogs/new'); ?>" class="btn btn-info m-2">Add New</a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Content</th>
                            <th scope="col">Tag</th>
                            <th scope="col">Date</th>
                            <th scope="col">Poster</th>
                            <th scope="col">Image</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(count($blogs) > 0): ?>
                        <?php $i = 0; ?>
                        <?php foreach ($blogs as $blog): ?>
                        <tr id="row-<?= $blog->id; ?>">
                            <th scope="row"><?= ++$i ?></th>
                            <td><?= substr($blog->title, 0, 20) ?>...</td>
                            <td><?= substr($blog->content, 0, 30) ?>...</td>
                            <td>
                                <?php
                                $found_key = array_search($blog->tag, array_column($tags, 'id'));
                                echo $tags[$found_key]->tag_name;
                                ?>
                            </td>
                            <td><?= $blog->date; ?></td>
                            <td><?= $blog->poster; ?></td>
                            <td><img src="<?= $blog->img_path; ?>" width="50px" height="auto"> </td>
                            <td><a href="<?php echo site_url('blogs/'.$blog->id.'/edit'); ?>"> Update </a> | <a href="#" class="del-btn" del-id="<?= $blog->id; ?>"> Delete </a></td>
                        </tr>
                        <?php endforeach; ?>
                        <?php else: ?>
                        <tr>
                            Empty Blogs
                        </tr>
                        <?php endif ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Table End -->
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content" style="background-color: #1a0081">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Note</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h5 class="text-center">Are you sure to delete it?</h5>
                    <input type="hidden" id="del-id">
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" id="del-ok-btn">Yes</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">No</button>
                </div>

            </div>
        </div>
    </div>

<script>
    $(document).ready(function () {
        $('.del-btn').click(function () {
            $('#del-id').val($(this).attr('del-id'));
            $('#myModal').modal('show');
        });

        $('#del-ok-btn').click(function () {
            let id = $('#del-id').val();
            $.ajax({
                method: "delete",
                url: "<?= site_url('blogs'); ?>" + "/" + id,
                success: function (response) {
                    $('#myModal').modal('hide');
                    if(response === 'success') {
                        alert('Success');
                        let idName = 'row-' + id;
                        $('#' + idName).remove();
                    }
                    else alert('Failed');
                },
                error: function(status) {
                    console.log(status);
                    $('#myModal').modal('hide');
                    alert('Failed');
                }
            })
        })
    })
</script>

<?= $this->endSection() ?>