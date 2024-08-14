

<div class="card">
    <div class="card-header">
        <h4>Employee's Data</h4>
        <a class="btn btn-sm btn-success" href="/employee/adduser">Add New User</a>
        
    </div>


    <div class="card-body">
        <table class="table table-bordered" id="users-list">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                    <th scope="col">Aadhar Card No.</th>
                    <th scope="col">Pan Card No.</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($employee): ?>
                    <?php foreach ($employee as $row): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['first_name']; ?></td>
                        <td><?php echo $row['last_name']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['aadhar_card_code']; ?></td>
                        <td><?php echo $row['pan_card_code']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td>
                            <a href="#" class="btn btn-success btn-sm">Edit</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>


</div>

<?= $this->endSection() ?>