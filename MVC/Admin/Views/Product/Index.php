<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h4 mb-1 text-gray-800">Hàng hóa</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <span data-toggle="modal" data-target="#addModal">
                <button title="Add User" class="btn btn-primary"><i class="fas fa-plus-circle"></i></button>
            </span>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="productTable" width="100%">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>ProductName</th>
                            <th>Category</th>
                            <th>Quantity</th>
                            <th>Created</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- add modal -->
<div class="modal fade" id="addModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Thêm</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formID" class="add-product-form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Tên hàng hóa</label>
                        <input type="text" autocomplete="off" name="add-name" class="form-control" placeholder="Enter product name ...">
                    </div>
                    <div class="form-group">
                        <label>Loại</label>
                        <select class="form-control">
                            <?php foreach ($model['listCate'] as $item) : ?>
                                <option><?php echo $item['CateName']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" name="add-quantity" placeholder="Enter quantity ..." min='0'>
                    </div>
                    <div class="modal-footer">
                        <a id="addProduct" type="button" class="btn btn-primary disabled" data-dismiss="modal">Lưu</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end add modal -->

<!-- edit modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sửa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="edit-product-form">
                    <input type="hidden" name="id-edit" />
                    <div class="form-group">
                        <label>Tên sản phẩm</label>
                        <input type="text" autocomplete="off" name="edit-product-name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Loại</label>
                        <select class="form-control">
                            <?php foreach ($model['listCate'] as $item) : ?>
                                <option><?php echo $item['CateName']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" name="edit-quantity" class="form-control" min='0'>
                    </div>
                    <div class="form-group form-check">
                        <input class="form-check-input" name="edit-status" type="checkbox">
                        <label class="form-check-label">Khóa sản phẩm?</label>
                        <small>Mọi sản phẩm bị khóa sẽ không được hiển thị lẫn thao tác.</small>
                    </div>
                    <div class="modal-footer">
                        <a id="editProduct" type="button" class="btn btn-success" data-dismiss="modal">Lưu</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end edit modal -->

<!-- remove modal -->
<div class="modal fade" id="removeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Xóa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id-remove" />
                Bạn có chắc muốn xóa <label style="font-weight:bold;color:red;"></label> ?
            </div>
            <div class="modal-footer">
                <button onclick="removeItem(1)" type="button" class="btn btn-danger" data-dismiss="modal">Xóa</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
            </div>
        </div>
    </div>
</div>
<!-- end remove modal -->