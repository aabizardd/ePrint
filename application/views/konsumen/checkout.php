<div class="header-services">
    <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0"
        data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
        data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery
            on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery
            on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery
            on every order with Sky Store</p>
    </div>
</div>
<main class="ps-main">
    <div class="ps-checkout pt-80 pb-80">
        <div class="ps-container">
            <form class="ps-checkout__form" action="do_action" method="post">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 ">
                        <div class="ps-checkout__billing">
                            <h3>Billing Detail</h3>
                            <div class="form-group form-group--inline">
                                <label>First Name<span>*</span>
                                </label>
                                <input class="form-control" type="text">
                            </div>


                            <div class="form-group form-group--inline">
                                <label>Email Address<span>*</span>
                                </label>
                                <input class="form-control" type="email">
                            </div>

                            <div class="form-group form-group--inline">
                                <label>Phone<span>*</span>
                                </label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group form-group--inline">
                                <label>Address<span>*</span>
                                </label>
                                <textarea class="form-control" rows="5" placeholder=""></textarea>
                            </div>

                            <div class="form-group form-group--inline">
                                <label>Bukti Bayar<span>*</span>
                                </label>
                                <input type="file" tclass="form-control" rows="5" placeholder="">
                            </div>

                            <h3 class="mt-40"> Addition information</h3>
                            <div class="form-group form-group--inline textarea">
                                <label>Order Notes</label>
                                <textarea class="form-control" rows="5"
                                    placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 ">
                        <div class="ps-checkout__order">
                            <header>
                                <h3>Your Order</h3>
                            </header>
                            <div class="content">
                                <table class="table ps-checkout__products">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase">Product</th>
                                            <th class="text-uppercase">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sum_harga = 0;
                                        foreach ($all_pesanan as $item): ?>
                                        <tr>
                                            <td>PAKET <?= $item->nama_kategori ?></td>
                                            <td><?= 'Rp ' .
                                                number_format(
                                                    $item->total_harga,
                                                    2,
                                                    ',',
                                                    '.'
                                                ) ?></td>
                                        </tr>
                                        <?php $sum_harga +=
                                            $item->total_harga;endforeach;
                                        ?>



                                        <tr>
                                            <td><b>Order Total</b></td>
                                            <td>
                                                <b> <?= 'Rp ' .
                                                    number_format(
                                                        $sum_harga,
                                                        2,
                                                        ',',
                                                        '.'
                                                    ) ?>
                                                </b>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <footer>

                                <div class="form-group paypal">

                                    <button class="ps-btn ps-btn--fullwidth">Place Order<i
                                            class="ps-icon-next"></i></button>
                                </div>
                            </footer>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
