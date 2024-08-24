@extends('layouts.shop')

@section('content')
    <div class=container>
        <div class="row">
            <div class="col-12">
                <h1> Giỏ Hàng</h1>
            </div>
            {{-- <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Tên sản phẩm</th>
                        <th scope="col">Giá</th>
                        <th scope="col">Số lượng</th>
                        <th scope="col">Thành tiền</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row"></td>
                        <td>
                            <img src="" width="300px" alt="">
                        </td>
                        <td scope="col"><a href="">Sản Phẩm 1</a></td>
                        <td scope="col">1.000.000</td>
                        <td scope="col">
                            <input type="number" style="width:50px; text-align:center" value="1">
                        </td>
                        <td scope="col">2.000.000</td>
                        <td><a href="" class="text-danger">Xóa</a></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td>
                            <img src="" width="300px" alt="">
                        </td>
                        <td scope="col"><a href="">Sản Phẩm 2</a></td>
                        <td scope="col">1.000.000</td>
                        <td scope="col">
                            <input type="number" style="width:50px; text-align:center" value="2">
                        </td>
                        <td scope="col">2.000.000</td>
                        <td><a href="" class="text-danger">Xóa</a></td>
                    </tr>
                    <tr>
                        <td scope="row"></td>
                        <td>
                            <img src="" width="300px" alt="">
                        </td>
                        <td scope="col"><a href="">Sản Phẩm 3 </a></td>
                        <td scope="col">1.000.000</td>
                        <td scope="col">
                            <input type="number" style="width:50px; text-align:center" value="3">
                        </td>
                        <td scope="col">2.000.000</td>
                        <td><a href="" class="text-danger">Xóa</a></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="6" class="text-right">Tổng: </td>
                        <td><strong>3.000.000</strong></td>
                    </tr>
                </tfoot>
            </table> --}}
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach(Cart::content() as $row) :?>

                        <tr>
                            <td>
                                <p><strong><?php echo $row->name; ?></strong></p>
                                <p><?php echo ($row->options->has('size') ? $row->options->size : ''); ?></p>
                            </td>
                            <td><input type="text" value="<?php echo $row->qty; ?>"></td>
                            <td>$<?php echo $row->price; ?></td>
                            <td>$<?php echo $row->total; ?></td>
                        </tr>

                    <?php endforeach;?>

                </tbody>

                <tfoot>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Subtotal</td>
                        <td><?php echo Cart::subtotal(); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Tax</td>
                        <td><?php echo Cart::tax(); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                        <td>Total</td>
                        <td><?php echo Cart::total(); ?></td>
                    </tr>
                </tfoot>
         </table>
        </div>
    </div>
@endsection
