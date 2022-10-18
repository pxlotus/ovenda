

            <div class="col-lg-12">
                    <div class="card product_item_list product-order-list">
                        <div class="header">
                            <h2>Placed Order List</h2>
                        </div>
                        <div class="body">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="thead-dark">
                                        <tr>                                       
                                                <th>Order ID</th>
                                                <th>Cart Id</th>
                                                <th>User</th>
                                                <th>Order status</th>
                                                <th>order Progress</th>
                                                <th>Order Total</th>
                                                <!-- <th>Date</th> -->
                                                <th>Actions</th>
                                            </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                                include "../includes/admin/fetch_file.inc.php";
                                                fetchOrders();
                                            ?>
                                             
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                    
                </div>