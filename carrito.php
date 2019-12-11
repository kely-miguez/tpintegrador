
<?php
require_once('plantilla/header.php');
require_once('plantilla/menu.php');
 ?>





<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">

							<li class="shopcart"><a class="cartbox_active" href="#"><span class="product_qun"></span></a>
								<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>CERRAR</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>###</span>
											<span>Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>###</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="#">COMPRAR</a>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="#">EDITAR COMPRA</a>
										</div>
									</div>
								</div>
							</li>
		</header>
							</li>
			</div>
		<div class="box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div><br>

        <div class="cart-main-area section-padding--lg bg--white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 ol-lg-12">
                        <form action="#">
                            <div class="table-content wnro__table table-responsive">
                                <table>
                                    <thead>
                                        <tr class="title-top">
                                            <th class="product-thumbnail">Imagen</th>
                                            <th class="product-name">Producto</th>
                                            <th class="product-price">Precio</th>
                                            <th class="product-quantity">Cantidad</th>
                                            <th class="product-subtotal">Total</th>
                                            <th class="product-remove">Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="img/1.png" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">VESTIDO</a></td>
                                            <td class="product-price"><span class="amount">$220.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">$220.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="img/2.png" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">Conjunto</a></td>
                                            <td class="product-price"><span class="amount">$250.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">$250.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                        <tr>
                                            <td class="product-thumbnail"><a href="#"><img src="img/3.png" alt="product img"></a></td>
                                            <td class="product-name"><a href="#">Pantalon</a></td>
                                            <td class="product-price"><span class="amount">$650.00</span></td>
                                            <td class="product-quantity"><input type="number" value="1"></td>
                                            <td class="product-subtotal">$650.00</td>
                                            <td class="product-remove"><a href="#">X</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-6">
                        <div class="cartbox__total__area">
                            <div class="cartbox-total d-flex justify-content-between">
                                <ul class="cart__total__list">
                                    <li>Cart total</li>
                                    <li>Sub Total</li>
                                </ul>
                                <ul class="cart__total__tk">
                                    <li>$1120.00</li>
                                    <li>$1120.00</li>
                                </ul>
                            </div>
                            <div class="cart__total__amount">
                                <span>Grand Total</span>
                                <span>$1120.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
