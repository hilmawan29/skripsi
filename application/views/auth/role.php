<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-lg-7">
                <div class="card o-hidden border-2 shadow-lg">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Silahkan Pilih Role</h1>
                                    </div>
                                    <?php foreach ($list_role as $role) { ?>
                                        <a class="btn btn-danger btn-lg btn-block" href="<?= base_url('auth/login_form?role_id='.$role['id']); ?>">
                                            <?php echo $role['role']; ?>
                                        </a>
                                    <?php } ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>