@extends('templates.admin')
@section('main')
<!-- Begin Page Content -->

<!-- Page Heading -->
<!-- Content Row -->
<div class="row">    
    <div class="row col-sm-12">
        <div class="col-sm-12">
            <h1 style="display: inline-block;">Bảng điểm</h1>
            <ol class="breadcrumb float-xs-right float-sm-right">
                <li class="breadcrumb-item"><a href="resources/index3.html">Home</a></li>
                <li class="breadcrumb-item active">Bảng điểm</li>
            </ol>
        </div>
    </div>
    <div class="col-sm-12">
        <div class=" d-block float-right">
            <nav class="navbar">
                <ul class="nav">
                    <li class="nav-item function" data-toggle="modal" data-target="#add" style="margin-right: 15px;"><strong>Add</strong></li>
                    <li class="nav-item function" data-toggle="modal" data-target="#formUpdate" style="margin-right: 15px;"><strong>Update</strong></li>
                    <li class="nav-item function" data-toggle="modal" data-target="#formDelete" style="margin-right: 15px;"><strong>Delete</strong></li>
                    <li class="nav-item function" data-toggle="modal" data-target="#import" style="margin-right: 15px;"><i class="fas fa-sign-in-alt"> Import</i></li>
                </ul>
            </nav> 
        </div>
        <div class="modal fade " id="add">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm bảng điểm</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body row" id="formDiem">
                        <div class="col-sm-1"></div>  
                        <div class="col-sm-10 row">
                            <form class="add row">
                                <strong class="col-sm-5 mt-1">Mã Bảng Điểm* <span style="float: right">:</span></strong>
                                <input type="text" name="maBĐ" style="height: 25px; margin-top: 5px" id="maBĐ">
                                <strong class="col-sm-5 mt-1">Môn* <span style="float: right">:</span></strong>
                                <input type="text" name="mon" style="height: 25px; margin-top: 5px" id="mon"><br>
                                <strong class="col-sm-5 mt-1">Lớp* <span style="float: right">:</span></strong>
                                <input type="text" name="lop" style="height: 25px;  margin-top: 5px" id="lop"><br>
                            </form>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" id="addTrans" class="btn btn-dark"  data-dismiss="modal">Thêm</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " id="formUpdate">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Cập Nhật Bảng Điểm</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body row">
                        <div class="col-sm-6 row">
                            <form class="row">
                                <strong class="col-sm-5 mt-1">Mã Bảng Điểm* <span style="float: right">:</span></strong>
                                <input type="text" name="maBĐ" style="height: 25px; margin-top: 5px" id="maBĐ_update" disabled="disabled">
                                <strong class="col-sm-5 mt-1">Môn* <span style="float: right">:</span></strong>
                                <input type="text" name="mon" style="height: 25px; margin-top: 5px" id="mon_update"><br>
                                <strong class="col-sm-5 mt-1">Lớp* <span style="float: right">:</span></strong>
                                <input type="text" name="lop" style="height: 25px;  margin-top: 5px" id="lop_update"><br>
                            </form>
                        </div>
                        <div class="col-sm-6 row">
                            <form class="row">
                                <strong class="col-sm-4 mt-1">Hệ số 1: </strong>
                                <input type="text" name="hs1_update" style="height: 25px; margin-top: 5px" id="hs1_update"><br>
                                <strong class="col-sm-4 mt-1">Hệ số 2:</strong>
                                <input type="text" name="hs2_update" style="height: 25px; margin-top: 5px" id="hs2_update"><br>
                                <strong class="col-sm-4 mt-1">Hệ số 3  :</strong>
                                <input type="text" name="hs3" style="height: 25px;  margin-top: 5px" id="hs3_update"><br>
                            </form>
                        </div>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" id="updateTrans" class="btn btn-dark"  data-dismiss="modal">Update</button>
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="import">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Import</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <h5>
                            <b>Nhập bảng từ file dữ liệu</b>
                        </h5>
                        <br>
                        <span>
                            Xử lý dữ liệu (Tải về File mẫu: <a href="" title="download">Excel file</a>):
                        </span>
                        <hr>

                        <h6><b>Xử lý trùng mã bảng điểm, thông tin không chính xác ?</b></h6><br>
                        <p><input type="radio" name="baoloi">Báo lỗi và dừng import</p><p><input type="radio" name="baoloi">Thay thế thông tin cũ bằng thông tin mới</p>
                        <div class="warning-content">
                            <h5>
                                <i class="fas fa-exclamation-triangle"></i>
                                Lưu ý
                            </h5>
                            <i>Hệ thống cho phép nhập tối đa 100 học sinh mỗi lần từ file .</i><br>
                        </div>   
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="table-responsive col-sm-12 table tableCustomer">
            <table class="col-sm-12">
                <thead>
                    <tr>
                        <th class="customer"><input type="checkbox" id="checkAll" onclick="checkAllID()"></th>
                        <th class="customer">Mã Bảng Điểm</th>
                        <th class="customer">Môn</th>
                        <th class="customer">Lớp</th>
                        <th class="customer">Hệ số 1</th>
                        <th class="customer">Hệ số 2</th>
                        <th class="customer">Hệ số 3</th>
                    </tr>

                    <tr>
                        <td class="customer"></td>
                        <td class="customer"></td>
                        <td class="customer"></td>
                        <td class="customer"></td>
                        <td class="customer"></td>
                        <td class="customer"></td>
                        <td class="customer"></td>
                    </tr>
                    <tr class="collapse row0">
                        <td></td>
                    </tr>
                </thead>
                <tbody id="load">

                </tbody>          
            </table>
        </div>
        <!-- Main content -->
    </div>
</div>
<!-- Content Row -->
@endsection