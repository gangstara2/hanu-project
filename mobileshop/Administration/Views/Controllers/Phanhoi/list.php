<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách phản hồi
        </div>
        <div class="tools" style="position: absolute">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_3"
               cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="all">id</th>
                <th class="min-tablet">Tên khách hàng</th>
                <th class="min-tablet">Mã sản phẩm</th>
                <th class="min-tablet">Nội dung</th>
                <th class="min-tablet">Email</th>
                <th class="min-tablet">Ngày</th>
                <th class="min-tablet" style="width: 27%">Tùy chỉnh</th>

            </tr>
            </thead>
            <tbody>

            <?php foreach ($phanHois as $phanHoi) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $phanHoi->id ?> </a>
                    </td>
                    <td><?= $phanHoi->name ?></td>
                    <td><?= $phanHoi->product_id ?></td>
                    <td><?= $phanHoi->message ?></td>
                    <td><?= $phanHoi->email ?></td>
                    <td><?= $phanHoi->date ?></td>
                    <td>
                        <a href="admin/phanHoi/reply/<?= $phanHoi->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-envelope"></i> Reply </a>
                        <a href="admin/phanHoi/view/<?= $phanHoi->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-eye"></i> Xem </a>
                        <a href="admin/phanHoi/delete/<?= $phanHoi->id ?>"
                           class="btn btn-outline btn-circle dark btn-sm black">
                            <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

