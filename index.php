
<?php include 'header.php'; ?>

    <main >
        <div class="search" style="background-image: url('assets/images/SearchBox.jpeg');">
            <div class="text-header">
                <h1>CAMPUS <br> TRADE-IN</h1>
                <p>find whatever you need in Robert Gordon</p>
            </div>
            <div class="search-box" >
                <form>
                    <div class="search-category">
                        <select>
                            <option value="All">All</option>
                            <option value="Books">Books</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Fitness">Fitness</option>
                            <option value="Cloths">Cloths</option>
                        </select>
                    </div>
                    <div class="search-input">
                        <input type="text" placeholder="Search..." id="keyword">
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="categories">

        </div>
        <div class="items">
        </div>

        <br>
        <!-- categoies division -->
        <div class="container">

        <h2 style="text-align: center;" >Avaliable Categories </h2>
            <div class="row">
                <div class="col-md-3 ">
                    <div>
                        <a class="nav-link" href="items.php"><img id="catimages" src="assets/images/books.jpg" alt="books" class="rounded"></a>

                        <div>
                            <h3 style="text-align: center;" >Books</h3>
                        </div>

                    </div>

                </div>
                <div class="col-md-3 ">

                <a class="nav-link" href="items.php"><img id="catimages" src="assets/images/Cloths.jpg" alt="books" class="rounded"></a>

                <div>
                            <h3 style="text-align: center;" >Cloths</h3>
                        </div>

                </div>



                <div class="col-md-3 ">

                <a class="nav-link" href="items.php"><img id="catimages" src="assets/images/fitness.jpg" alt="books" class="rounded"></a>

                <div>
                            <h3 style="text-align: center;" >Fitness</h3>
                        </div>


                </div>

                <div class="col-md-3 ">

                <a class="nav-link" href="items.php"><img id="catimages" src="assets/images/electronic.jpg" alt="books" class="rounded"></a>

                <div>
                            <h3 style="text-align: center;" >Electronics</h3>
                        </div>


                </div>


            </div>

        </div>
        <!-- categories Ending-->

        <!--Feature Begins-->

        <div class="container" >
            <div class="heading">
                <h2 style="text-align: center;">FEATURED ITEMS</h2>
        
            </div>
        </div>

        <!--Feature Ends-->

        
        <!--All Ends-->
        <br>

        <!--First three Large images Begins-->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem; ">
                        <img class="card-img-top" src="assets/images/Phones.jpg" alt="Card image cap" id="pic">
                        <div class="card-body">
                            <h5 class="card-title">Phones</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/Acedmic.jpg" alt="Card image cap" id="pic">
                        <div class="card-body">
                            <h5 class="card-title">Academic Books</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/Fitness for big photoes.jpg" alt="Card image cap"
                            id="pic">
                        <div class="card-body">
                            <h5 class="card-title">Fitness</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>

                </div>


            </div>

            <!--First three Large images End-->
            <br>
            <!--Second three Large images Begins-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/clothes for big.jpg" alt="Card image cap" id="pic">
                        <div class="card-body">
                            <h5 class="card-title">Cloths</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                           
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/Motivational book.jpg" alt="Card image cap"
                            id="pic">
                        <div class="card-body">
                            <h5 class="card-title">Motivational Books</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                            
                        </div>
                    </div>

                </div>

                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="assets/images/laptop.jpg" alt="Card image cap" id="pic">
                        <div class="card-body">
                            <h5 class="card-title">Laptop</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the
                                card's content.</p>
                           
                        </div>
                    </div>

                </div>
                <!--Second three Large images Ends-->

            </div>
        </div>




    </main>

    <?php include 'footer.php'; ?>