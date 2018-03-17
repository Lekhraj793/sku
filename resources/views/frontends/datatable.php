<html>
    <head>
        <title>DataTable</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <script src="bootstrap/js/bootstrap.min.js" ></script>


        <script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">

        <script> $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
    </head>
<body>
<div class="container" style="margin-top: 50px;">

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead style="background-color: #337ab7;">
        <tr>
            <th>S No.</th>
            <th>SKU</th>
            <th>Variant Count</th>
            <th>Inventroy Quantity</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
<?php //dd($data);?>
        <?php $i= 0; foreach ($data as $val) {?>
            <tr>
                <td><?php echo ++$i;?></td></td>
                <td><?php echo htmlentities($val['sku']);?></td>
                <td><?php echo htmlentities($val['total']);?></td>
                <td><?php echo htmlentities($val['inventory_quantity']);?></td>

                <td>
                        <a href="includes/model_box" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                            Edit
                        </a>

                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">
                            Delete
                        </a>
                </td>
            </tr>
        <?php } ?>

        </tbody>
        <tfoot>
        <tr>
            <th>S No.</th>
            <th>SKU</th>
            <th>Variant Count</th>
            <th>Inventroy Quantity</th>
            <th>Action</th>

        </tr>
        </tfoot>
    </table>

</div>
</body>

</html>