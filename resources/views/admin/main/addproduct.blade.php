@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Add Product</h1>
        <h3 class="h4 mb-4 text-gray-800">Product Name <span class="star">*</span></h3>

<form action="{{url('/storePrduct')}}" method="POST">
@csrf


        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="English Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="German Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hebrew Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
        </div>


    </div>
    <div class="container-fluid box-salect">
        <div class="row">

            <div class="col-3 col-md col-sm-12 check-box">
                <h3 class="h5 text-gray-800 ">Salect Distribution</h3>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Amazon</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Amazon</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled">
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Amazon</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled">
                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Amazon</label>
                </div>
            </div>

            <div class="col-4 col-md col-sm-12 check-box">
                <h3 class="h5  text-gray-800">Salect Categories/Sub-Categories</h3>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwosweet" aria-expanded="true" aria-controls="collapseTwosweet">
                        <span>SWEETS</span>
                    </a>
                    <div id="collapseTwosweet" class="collapse inner-collap" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2  rounded">
                            <div class="form-check form-switch collapse-inner">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Amazon</label>
                            </div>
                            <div class="form-check form-switch collapse-inner">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Amazon</label>
                            </div>
                            <div class="form-check form-switch collapse-inner">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Amazon</label>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwomeat" aria-expanded="true" aria-controls="collapseTwomeat">
                        <span>MEAT</span>
                    </a>
                    <div id="collapseTwomeat" class="collapse inner-collap" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 rounded">
                            <div class="form-check form-switch collapse-inner">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Amazon</label>
                            </div>
                            <div class="form-check form-switch collapse-inner">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Amazon</label>
                            </div>
                            <div class="form-check form-switch collapse-inner">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Amazon</label>
                            </div>
                        </div>
                    </div>
                </li>

            </div>

            <div class="col-3 col-md col-sm-12 check-box">
                <h3 class="h5  text-gray-800">Kosher Status</h3>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        KOSHER
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="">
                    <label class="form-check-label" for="flexRadioDefault2">
                        NOT KOSHER
                    </label>
                </div>
            </div>
        </div>

    </div>
    <div class="container-fluid box-salect">
        <div class="row ">
            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Packaging</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="packaging" class="form-text text-muted"></small>
                </div>
                <h3 class="h4 mb-4 text-gray-800">Barcode</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>


            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Diet</h3>
                <div class="check-box">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1" checked="">
                        <label class="form-check-label" for="radio1">Option 1</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                        <label class="form-check-label" for="radio2">Option 2</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">
                        <label class="form-check-label" for="radio2">Option 2</label>
                    </div>


                </div>
            </div>

        </div>
    </div>
    <div class="container-fluid box-salect">

        <!-- Page Heading -->

        <h3 class="h4 mb-4 text-gray-800">Ingredients</h3>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="English Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="German Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hebrew Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
        </div>


    </div>
    <div class="container-fluid box-salect">

        <div class="row sup-file">
            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Supervisor</h3>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
            </div>
            <div class="col-5">
                <h3 class="h4 mb-4 text-gray-800">File Upload</h3>
                <form action="/action_page.php">
                    <input  type="file" name="myImage" accept="image/*" id="myFile" name="filename">

                </form>

            </div>

        </div>
    </div>
</form>

    <div class="container-fluid box-salect">

        <!-- Page Heading -->

        <h3 class="h4 mb-4 text-gray-800">Comments</h3>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="comment">English:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                  </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="comment">German:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                  </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="comment">Hebrew:</label>
                    <textarea class="form-control" rows="3" id="comment"></textarea>
                  </div>
            </div>
        </div>


    </div>
</div>
@include('Layoutspage.footer')
