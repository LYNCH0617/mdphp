<style>
    table, th, tr, td{
        padding: 20px;
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<?php
    require_once "data/products.class.php";

    $objProduct = new Product;

    $tableData = $objProduct->getData();
?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Type</th>
        <th>Availability</th>
    </tr>
    <?php foreach($tableData as $td): extract($td);?>
    <tr>
        <td><?php echo $id ?></td>
        <td><?php echo $name ?></td>
        <td><?php echo $type ?></td>
        <td><?php echo $availability ?></td>
    </tr>
    <?php endforeach; ?>
</table>
