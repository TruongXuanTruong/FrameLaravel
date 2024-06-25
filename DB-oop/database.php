<?php
require "config.php";
class DB
{
    private $conn;

    function __construct()
    {
        $this->connection();
    }
    public function connection()
    {
        $this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->conn->connect_error) {
            die("Kết nối không thành công" . $this->conn->connect_error);
        }
        echo "Đã kết nối csdl thành công ";
    }
    function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }
    function query($sql)
    {
        return $this->conn->query($sql);
    }

    //Tạo bảng Insert 
    function insert($table, $data)
    {
        foreach ($data as $k => $v) {
            $list_field[] = "`{$k}`";
            $list_value[] = "'{$this->escape_string($v)}'";
        }
        $list_field = implode(',', $list_field);
        $list_value = implode(',', $list_value);

        $sql = "INSERT INTO {$table} ({$list_field})
    VALUES ({$list_value})";

        if ($this->query($sql) == TRUE) {
            return $this->conn->insert_id;
        } else {
            echo "Lỗi : " . $this->conn->error;
        }
    }
    function get($table, $field = array(), $where = "")
    {
        $field = !empty($field) ? implode(',', $field) : "*";
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "SELECT {$field} FROM {$table} {$where}";

        echo $sql;

        $resutl = $this->query($sql);
        if ($resutl->num_rows > 0) {
            $data = array();

            while ($row = $resutl->fetch_assoc()) {
                $data[] = $row;
            }
            if (count($data) > 1)
                return $data;
            return [$data];
        } else {
            echo " Không tìm thấy bản ghi nào ";
        }
        //Tạo Update    
    }
    function update($table, $data = array(), $where = "")
    {
        $data_insert = array();
        foreach ($data as $k => $v) {
            $data_insert[] = "`{$k}` = '{$v}'";
        }
        $data_insert = implode(',', $data_insert);
        $where = !empty($where) ? "WHERE {$where}" : "";

        $sql = "UPDATE{$table}SET{$data_insert}WHERE{$where}";
        return $sql;
    }

    //Delete
    function delete($table, $where = "")
    {
        $where = !empty($where) ? "WHERE {$where}" : "";
        $sql = "DELETE FROM {$table} {$where}";

        if ($this->query($sql) === TRUE)
            return 1;
        else {
            echo "Lỗi: " . $this->conn->error;
        }
    }
}

$db = new DB;
$data = array(
    'username' => 'Xuânnnnnn',
    'password' => md5('truong28@')
);
$db->delete('users', 'id=7');
// echo $db->update('users', $data, 'id = 1');
// $db->connection();
// $user = $db->get('users', '');
// echo $db->insert('users', $data, 'id = 1');
    // echo "<pre>";
    // print_r($user);
    // echo "</pre>";
