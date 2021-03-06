<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red bold uppercase"> Thêm sự kiện
                                        </span>
        </div>
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-trash"></i>
            </a>
        </div>
    </div>
    <div class="portlet-body form">
        <form role="form" class="form-horizontal" id="submit_form_4" method="POST" enctype="multipart/form-data">
            <div class="form-wizard">
                <div class="form-body">
                    <div class="tab-content">
                        <div class="alert alert-danger display-none">
                            <button class="close" data-dismiss="alert"></button>
                            Bạn có một số lỗi, vui lòng kiểm tra lại!
                        </div>
                        <div class="alert alert-success display-none">
                            <button class="close" data-dismiss="alert"></button>
                            Thông tin hợp lệ!
                        </div>
                        <div class="tab-pane active" id="tab1">
                            <h3 class="block">Nhập thông tin sự kiện:</h3>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Tên sự kiện<span class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập tên sự kiện..." type="text" class="form-control"
                                           name="title"
                                           value="<?= !empty($form['title']) ? $form['title'] : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Miêu tả<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <textarea class="form-control"
                                              name="description"> <?= !empty($form['description']) ? $form['description'] : '' ?> </textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Địa chỉ<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập địa chỉ..." type="text" class="form-control"
                                           name="address"
                                           value="<?= !empty($form['address']) ? $form['address'] : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Mã zipcode<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập mã zipcode" type="text" class="form-control"
                                           name="zipcode"
                                           value="<?= !empty($form['zipcode']) ? $form['zipcode'] : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Thành phố<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập thành phố..." type="text" class="form-control"
                                           name="city"
                                           value="<?= !empty($form['city']) ? $form['city'] : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Lịch<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập lịch" type="date" class="form-control"
                                           name="schedule"
                                           value="<?= !empty($form['schedule']) ? $form['schedule'] : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Ngày bắt đầu<span class="required"> * </span></label>
                                <div class='col-md-7'>
                                    <div class='input-group date datetimepicker1'>
                                        <input type='text' class="form-control" name="date_start"
                                               value="<?= !empty($form['date_start']) ? $form['date_start'] : '' ?>"/>
                                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Ngày bắt đầu<span class="required"> * </span></label>
                                <div class='col-md-7'>
                                    <div class='input-group date datetimepicker1'>
                                        <input type='text' class="form-control" name="date_end"
                                               value="<?= !empty($form['date_end']) ? $form['date_end'] : '' ?>"/>
                                        <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Banner </label>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                 alt=""/></div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Chon ảnh </span>
                                                                <span class="fileinput-exists"> Thay đổi </span>
                                                                <input type="file" name="image"> </span>
                                            <a href="javascript:;" class="btn red fileinput-exists"
                                               data-dismiss="fileinput"> Xóa </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Số lượng<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập số lượng" type="number" class="form-control"
                                           name="ticket" min="1"
                                           value="<?= !empty($form['ticket']) ? $form['ticket'] : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Giá<span class="required"> * </span>
                                </label>
                                <div class="col-md-6">
                                    <input placeholder="Nhập giá (nghìn đồng)" type="number" class="form-control"
                                           name="price"
                                           value="<?= !empty($form['price']) ? $form['price'] : '' ?>"/>
                                </div>
                                <span class="help-block"> .000 VNĐ </span>
                            </div>

                            <div class="form-action">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="admin/event/list" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Quay lại </a>
                                        </a>
                                        <button type="submit" class="btn green button-submit" id="bsubmit"> Thêm sự kiện
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>