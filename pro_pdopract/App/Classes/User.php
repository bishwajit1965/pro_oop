<?php

class User
{
    // Database connection
    private $handler;

    public function __construct()
    {
        $database = new Database;
        $db = $database->DbConnect();
        $this->handler = $db;
        return true;
    }
    
    private $tableName = 'users';

    public function insert($name, $address)
    {
        try {
            $sql = "INSERT INTO  $this->tableName(name , address) VALUES (:name, :address)";
            $stmt = $this->handler->prepare($sql);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':address', $address);
            $data = $stmt->execute();
            if ($data) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo "Error!" . $e->getMessage();
        }
    }

    public function viewUser()
    {
        $query = 'SELECT * FROM users';
        $stmt = $this->handler->prepare($query);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }
    public function getID($id)
    {
        $stmt = $this->handler->prepare("SELECT * FROM $this->tableName WHERE id=:id");
        $stmt->execute(array(":id" => $id));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }
    public function updateView($query)
    {
        $stmt = $this->handler->prepare($query);
        $stmt->execute([':id' => $_GET['update_id']]);
        while ($user = $stmt->fetch(PDO::FETCH_OBJ)) {
        ?>
            <form action="" method="post">
                <div class="form-group">
                    <input type="hidden" name="id" class="form-control" 
                    value="<?= $user->id; ?>" disabled>   
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" 
                    value="<?= $user->name; ?>">     
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="form-control" 
                    value="<?= $user->address; ?>">
                </div>  
                <button type="submit" name="btn-update" value="update"
                class="btn btn-primary">Update user</button>
            </form>
        <?php
        }
    }
    public function update($id, $name, $address)
    {
        try {
            $stmt = $this->handler->prepare(
                "UPDATE $this->tableName SET 
                name = :name,
                address = :address
                WHERE id = :id"
            );
            $stmt->bindparam(":id", $id);
            $stmt->bindparam(":name", $name);
            $stmt->bindparam(":address", $address);
            $updated_data = $stmt->execute();
            if ($updated_data) {
                header("Location: ../../views/users/index.php?updated=1");
            } else {
                header("Location: ../../views/users/index.php?updated=0");
            }
            return true;
        } catch (PDOException $e) {
            echo '<strong>ERROR FOUND !!! </strong>'. $e->getMessage();
        }

    }
    public function deleteView($query)
    {
        $stmt = $this->handler->prepare($query);
        $stmt->execute([':id' => $_GET['delete_id']]);
        while ($result = $stmt->fetch(PDO::FETCH_OBJ)) {
        ?>
            <form action="" method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" 
                    value="<?= $result->name; ?>">     
                </div>
                <div class="form-group">
                    <label for="address">address</label>
                    <input type="text" name="address" class="form-control" 
                    value="<?= $result->address; ?>">
                </div>
                <button type="submit" name="btn-delete" value="delete" 
                class="btn btn-danger">Delete user</button>
            </form>                
        <?php
        }
        return true;
    }
    public function delete($id)
    {
        $stmt = $this->handler->prepare("DELETE FROM users WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $delete_data = $stmt->execute();
        if ($delete_data) {
            header("Location: index.php?deleted=1");
        } else {
            header("Location: index.php?deleted=0");
        }
        return true;
    }
}
