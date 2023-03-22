<?= $this->extend('layouts/backapp') ?>

<?= $this->section('content') ?>

    <!-- Table Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <div class="mb-4 d-flex justify-content-between">
                        <h5>User Table</h5>
                        <a href="<?php echo site_url('users/new'); ?>" class="btn btn-info m-2">Add New</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Birthday</th>
                                <th scope="col">Role</th>
                                <th scope="col">Email</th>
                                <th scope="col">Avatar</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(count($users) > 0): ?>
                                <?php $i = 0; ?>
                                <?php foreach ($users as $user): ?>
                                    <tr id="row-<?= $user->id; ?>">
                                        <th scope="row"><?= ++$i ?></th>
                                        <td><?= $user->name; ?></td>
                                        <td><?= $user->birthday; ?></td>
                                        <td><?= ($user->role)? "Admin": "User"; ?></td>
                                        <td><?= $user->email; ?></td>
                                        <td><img class="rounded-circle" src="<?= img_data($user->avatar); ?>" width="40px" height="40px"></td>
                                        <td><a href="<?php echo site_url('users/'.$user->id.'/edit'); ?>"> <i class="fa fa-edit"></i> </a> | <a class="del-btn" del-id="<?= $user->id; ?>" href="#"> <i class="fa fa-trash"></i> </a></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>Empty Blog</tr>
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
                    url: "<?= site_url('users'); ?>" + "/" + id,
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