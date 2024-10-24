<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card_header">
                        <h5>Update Employee data
                            <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-right">
                                BACK </a>

                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('employee/update/' . $all_data->id) ?>" method="POST">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" value="<?= $all_data->first_name ?>"
                                    class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" value="<?= $all_data->last_name ?>"
                                    class="form-control">

                            </div>
                            <div class="form-group">
                                <label for=""> Job </label>
                                <input type="text" name="job" value="<?= $all_data->job ?>" class="form-control">

                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <input type="text" name="gender" value="<?= $all_data->gender ?>" class="form-control">

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </html>