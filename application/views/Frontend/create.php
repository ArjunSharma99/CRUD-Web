<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card_header">
                        <h5>Add Employee data
                            <a href="<?php echo base_url('employee'); ?>" class="btn btn-danger float-right">
                                BACK </a>

                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo base_url('employee/store'); ?>" method="POST">
                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="first_name" class="form-control">
                                <small><?php echo form_error('Your First name'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="last_name" class="form-control">
                                <small><?php echo form_error('Your Last name'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for=""> Job </label>
                                <input type="text" name="job" class="form-control">
                                <small><?php echo form_error('Your Job'); ?></small>
                            </div>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <input type="text" name="gender" class="form-control">
                                <small><?php echo form_error('Your Gender'); ?></small>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </html>