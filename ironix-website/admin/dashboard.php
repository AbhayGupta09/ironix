<?php
include 'includes/header.php';

?>

<div class="container-fluid mt-4">
    
    <div class="row">

    <h1 class="text-center mb-4">User Queries</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Query</th>
                        <th>Status</th>
                        <th>Number</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example data -->
                    <tr>
                        <td>1</td>
                        <td>John Doe</td>
                        <td>Information about membership</td>
                        <td>Pending</td>
                        <td><a href="tel:+0987654321"><button class="btn btn-primary">call</button></a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Jane Smith</td>
                        <td>Pricing Inquiry</td>
                        <td>Resolved</td>
                        <td><a href="tel:+0987654321"><button class="btn btn-primary">call</button></a></td>
                    </tr>
                    <!-- More rows here -->
                </tbody>
            </table>
        </div>



    </div>
</div>

<?php include 'includes/footer.php'; ?>