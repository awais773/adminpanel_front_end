 <!-- ---------SUB Category ------ -->
 <div class="main-sub">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Add Category</h1>
        <h3 class="h4 mb-2 text-gray-800">Product Family Name</h3>
        <form>
            <div class="row">
                <div class="col-lg-4">
                    <select class="form-select mb-4 select-drop">
                        <option>Fast Food</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
            </div>
        </form>

        <div class="row">

            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="English Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="German Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Hebrew Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>

    </div>
    <div class="container-fluid categ-h2">
        <h2>Add Sub Category</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category Name</th>
                        <th>Sub Category Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Fast Food</td>
                        <td>Burger</td>
                        <td><a href="#" class="btn btn-danger "> DELETE</a></td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- ---------END  SUB Category ------ -->