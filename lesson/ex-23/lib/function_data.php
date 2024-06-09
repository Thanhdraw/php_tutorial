<?php


function get_all_products(): array
{
    global $connect_db;
    try {
        $limit = 4;
        $slq = "SELECT * FROM product LIMIT $limit";
        $stmt = $connect_db->query($slq);
        return $stmt->fetchAll();

    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }

}


function get_product_by_name($name)
{
    global $connect_db;
    try {
        $limit = 4;
        $sql = "select * from product where ProductName like :name limit $limit";
        $stmt = $connect_db->prepare($sql);
        $name = "%$name%";
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchAll();

    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }

}


function get_product_by_id($id)
{
    global $connect_db;
    try {
        $sql = "select * from product where ProductCode = :id ";
        $stmt = $connect_db->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    } catch (PDOException $e) {
        echo $e->getMessage();
        exit;
    }
}




