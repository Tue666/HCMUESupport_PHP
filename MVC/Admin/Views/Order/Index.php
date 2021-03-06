<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 p-r-0 title-margin-right">
            <div class="page-header">
                <div class="page-title">
                    <h1>Hóa đơn</h1>
                </div>
            </div>
        </div>

        <div class="col-lg-4 p-l-0 title-margin-left">
            <div class="page-header">
                <div class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo ADMIN_BASE_URL ?>">Quản lí</a></li>
                        <li class="breadcrumb-item active">Hóa đơn</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section id="main-content">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="bootstrap-data-table-panel">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover" id="orderTable" width="100%">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Mã</th>
                                        <th>Tên</th>
                                        <th>Điện thoại</th>
                                        <th>Email</th>
                                        <th>Nơi nhận</th>
                                        <th>Vị trí</th>
                                        <th>Ngày tạo</th>
                                        <th>Ngày nhận</th>
                                        <th>Trạng thái</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="footer d-flex justify-content-center align-items-center">
                    <p class="text-center">Bản quyền <?php echo date("Y"); ?> thuộc về Đoàn - Hội khoa Công nghệ Thông tin</p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- view modal -->
<div id="printThis">
    <div class="modal fade" id="viewModal">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Xem</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- end view modal -->

<!-- remove modal -->
<div class="modal fade" id="removeModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hủy đơn hàng</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id-remove" />
                <label style="font-weight:bold;color:red;"></label>
                <div class="form-group">
                    <span>Lý do</span>
                    <textarea class="form-control" id="remove-reason" rows="3"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button onclick="cancelOrder();" type="button" class="btn btn-danger" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
            </div>
        </div>
    </div>
</div>
<!-- end remove modal -->

<!-- received modal -->
<div class="modal fade" id="receivedModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ngày nhận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="hidden" name="id-received-order" />
                        <input type="date" id="date-received" class="form-control" placeholder="Enter new password ...">
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-success" data-dismiss="modal" onclick="updateReceivedDay();">Lưu</a>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Không</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end received modal -->