<?php
if ($_SERVER["REMOTE_ADDR"] == "192.168.33.17") {
    $url = "http://shop101.advws.org";
} else {
    $url = "http://192.168.0.98:8000";
}
?>
<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            Sidebar
        </div>

        <div class="card-body">
            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="<?= "{$url}/admin/products" ?>">
                        Products
                    </a>
                </li>

            </ul>

            <ul class="nav" role="tablist">
                <li role="presentation">
                    <a href="<?= "{$url}/admin/categorys" ?>">
                        Category
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
