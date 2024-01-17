<?php include('header.php'); ?>


    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="wrapper-header">
                <div class="container-fluid d-flex justify-content-between">
                    <h1 class="display-5">Website</h1>
                    <div class="my-auto">

                        <!-- modal1 start -->
                        <button class="btn bg-sidebar" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                class="fa-solid fa-plane"></i> Turn vacation mode on</button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Turn vacation mode on</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <p class="text-center mb-0">Date</p>
                                                <div class=" mb-3">
                                                    <input type="date" class="form-control"
                                                        placeholder="Recipient's username"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <p class="text-center mb-0">Time</p>
                                                <div class="mb-3">
                                                    <input type="time" class="form-control"
                                                        placeholder="Recipient's username"
                                                        aria-label="Recipient's username"
                                                        aria-describedby="basic-addon2">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mx-auto text-center">
                                            <button type="button" class="btn bg-sidebar"><i
                                                    class="fa-solid fa-plane"></i> Turn vacation mode on</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal1 end -->

                        <a href="addweb.php" class="btn bg-sidebar"><i class="fa-solid fa-plus"></i> Add Web</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="">
                    <div class="card-body">

                        <!-- table 1 -->
                        <table class="table border">
                            <thead>
                                <tr>
                                    <th scope="col">URL <i class="fa-solid fa-bars"></i></th>
                                    <th scope="col">Categories</th>
                                    <th scope="col">Links <i class="fa-solid fa-arrows-up-down"></i></th>
                                    <th scope="col">DR <i class="fa-solid fa-arrows-up-down"></i></th>
                                    <th scope="col">DA <i class="fa-solid fa-arrows-up-down"></i></th>
                                    <th scope="col">PA <i class="fa-solid fa-arrows-up-down"></i></th>
                                    <th scope="col">CF <i class="fa-solid fa-arrows-up-down"></i></th>
                                    <th scope="col">TF <i class="fa-solid fa-arrows-up-down"></i></th>
                                    <th scope="col">CRedit <i class="fa-solid fa-arrows-up-down"></i></th>
                                    <th scope="col">Analytics</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">https://elpueblo.com.co</th>
                                    <td> <i class="fa-solid fa-tag"></i></td>
                                    <td>3 <i class="fa-solid fa-info-circle"></i></td>
                                    <td>29/100</td>
                                    <td>50/100</td>
                                    <td>35/100</td>
                                    <td>14/100</td>
                                    <td>15/100</td>
                                    <td>1.500 €</td>
                                    <td><i class="fa-solid fa-chart-simple"></i></td>
                                    <td><i class="fa-solid fa-info-circle"></i></td>
                                </tr>
                                <tr>
                                    <th scope="row">https://elpueblo.com.co</th>
                                    <td> <i class="fa-solid fa-tag"></i></td>
                                    <td>3 <i class="fa-solid fa-info-circle"></i></td>
                                    <td>29/100</td>
                                    <td>50/100</td>
                                    <td>35/100</td>
                                    <td>14/100</td>
                                    <td>15/100</td>
                                    <td>1.500 €</td>
                                    <td><i class="fa-solid fa-chart-simple"></i></td>
                                    <td><i class="fa-solid fa-info-circle"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <p class="text-center">You have not added any website</p> -->
                    </div>
                </div>
            </div>
            <div class="mt-3 container-fluid mb-auto">
                <div class="d-flex justify-content-between">
                    <div class="d-flex">
                        <ul class="list-style-none d-flex">
                            <li class="mar-e">
                                <a href="#" class="text-gray"><i class="fa-brands fa-twitter text-gray"></i></a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-gray"><i class="fa-brands fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-gray"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-gray"><i class="fa-brands fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <ul class="list-style-none d-flex">
                            <li class="mar-e">
                                <a href="#" class="text-gray">Legal notice</a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-gray">Terms of use
                                </a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-gray">Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-3 container-fluid">
                <!-- footer -->
                <footer>
                    <div class="d-flex justify-content-end">
                        <ul class="list-style-none d-flex">
                            <li class="mar-e">
                                <a href="#" class="text-black">Legal warning</a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-black">Privacy Policy
                                </a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-black">Cookies policy</a>
                            </li>
                            <li class="mar-e">
                                <a href="#" class="text-black">FAQ's</a>
                            </li>
                        </ul>
                    </div>
                </footer>
            </div>
        </div>
    </section>
    <!-- content end -->
    <?php include('footer.php'); ?>
