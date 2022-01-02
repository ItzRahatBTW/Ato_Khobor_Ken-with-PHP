<?php include "includes/header.php"; ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="tab-content tab-content-basic">
                        <!--  <<----BODY-->
                        <div class="row">
                            <div class="col-lg-5 d-flex flex-column">
                                <div class="grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4 class="card-title">Add New Category</h4>
                                            <p class="card-description">
                                                Name should be 20 Characters long!
                                            </p>
                                            <form class="forms-sample">
                                                <div class="form-group row">
                                                    <label for="cat_name" class="col-sm-3 col-form-label">Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" id="cat-name" placeholder="name" / required="required" name="cat-name">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-4 col-form-label">Description</label>
                                                    <div class="col-sm-8">
                                                        <textarea rows="8" name="cat-desc" class="ca">Description</textarea>
                                                    </div>
                                                </div>

                                                <button type="submit" class="btn btn-md btn-success me-2 text-light">Add</button>
                                                <button class="btn btn-light btn-md">Cancel</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 d-flex flex-column">
                                <div class="card-body">
                                    <h4 class="card-title">All Categories</h4>
                                    <p class="card-description">Category Info<code>.table-hover</code></p>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Category name</th>
                                                    <th>Description</th>
                                                    <th>Category Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Photoshop</td>
                                                    <td><label class="badge badge-danger">Pending</label></td>
                                                    <td>
                                                        <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                                                        <a href="" class="ms-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-delete text-danger"></i></a>

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center">
                                                                        <h2 class="mb-4">Are You Sure ?? <h2>
                                                                     <button type="button" class="btn btn-md btn-danger">yes</button>
                                                                     <button type="button" class="btn btn-md btn-success" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Photoshop</td>
                                                    <td><label class="badge badge-danger">Pending</label></td>
                                                    <td>
                                                        <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                                                        <a href="" class="ms-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-delete text-danger"></i></a>

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center">
                                                                        <h2 class="mb-4">Are You Sure ?? <h2>
                                                                     <button type="button" class="btn btn-md btn-danger">yes</button>
                                                                     <button type="button" class="btn btn-md btn-success" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Photoshop</td>
                                                    <td><label class="badge badge-danger">Pending</label></td>
                                                    <td>
                                                        <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                                                        <a href="" class="ms-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-delete text-danger"></i></a>

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center">
                                                                        <h2 class="mb-4">Are You Sure ?? <h2>
                                                                     <button type="button" class="btn btn-md btn-danger">yes</button>
                                                                     <button type="button" class="btn btn-md btn-success" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Photoshop</td>
                                                    <td><label class="badge badge-danger">Pending</label></td>
                                                    <td>
                                                        <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                                                        <a href="" class="ms-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-delete text-danger"></i></a>

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center">
                                                                        <h2 class="mb-4">Are You Sure ?? <h2>
                                                                     <button type="button" class="btn btn-md btn-danger">yes</button>
                                                                     <button type="button" class="btn btn-md btn-success" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Jacob</td>
                                                    <td>Photoshop</td>
                                                    <td><label class="badge badge-danger">Pending</label></td>
                                                    <td>
                                                        <a href=""><i class="mdi mdi-grease-pencil"></i></a>
                                                        <a href="" class="ms-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="mdi mdi-delete text-danger"></i></a>

                                                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-body text-center">
                                                                        <h2 class="mb-4">Are You Sure ?? <h2>
                                                                     <button type="button" class="btn btn-md btn-danger">yes</button>
                                                                     <button type="button" class="btn btn-md btn-success" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <?php include "includes/footer.php"; ?>
</div>
