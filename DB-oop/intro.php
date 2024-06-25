DB  
- insert();
- get();
- update();
- delete();
function escape_string($str)
    {
        return $this->conn->real_escape_string($str);
    }
    function query($sql)
    {
        return $this->conn->query($sql);
    }
    public function insert($table, $data)
    {
        if (!empty($data)) {
            foreach ($data as $k => $v) {
                $list_key[] = "{$k}";
                $list_value[] = "'{$this->escape_string($v)}'";
            }
        }
        $list_key = implode(',', $list_key);
        $list_value = implode(',', $list_value);

        $sql = "INSERT INTO {$table} ({$list_key})
    VALUES ({$list_value})";

        if ($this->query($sql) == TRUE) {
            return $this->conn_insert_id;
        } else {
            echo "Lỗi: " . $this->conn->error;
        }
        function update($table, $data, $where)
        {
            $where = !empty($where) ? "Where {$where}" : "";

            $data_insert = array();
            foreach ($data as $k => $v) {
                $value[] = "`{$k}` = '{$this->escape_string($v)}'";
            }
            $data_insert = implode(',', $value);

            $sql = "UPDATE {$table} SET {$data_insert} {$where}";
            echo $sql;

            if ($this->query($sql) === TRUE) {
                echo " Cập nhật thành công";
            } else {
                echo " Lỗi: " . $this->conn->error;
            }
        }
        function delete($table, $where = "")
        {
            $where = !empty($where) ? "Where {$where}" : "";
            $sql = "DELETE FROM {$table} {$where}";
            $this->query($sql);
        }
        function get($table, $field = array(), $where = "")
        {
            $field = !empty($field) ? implode(',', $field) : "*";

            $where = !empty($where) ? "Where {$where}" : "";

            $sql = " SELECT {$field} FROM {$table} {$where}";

            $result = $this->query($sql);

            if ($result->num_rows > 0) {
                $data = array();
                while ($row = $result->fetech_assoc()) {
                    $data[] = $row;
                }
                if (count($data) == 1) return $data[0];
                return $data;
            } else {
                echo " Không có bản ghi nào";
            }
        }
    }
    $data = array(
    'username' => 'Trường',
    'password' => 'truong',
    'age' => 22
);

$data = array(
    'username' => 'Anh',
    'password' => md5("admin"),
    'age' => 22
);
$db->update('user', $data, "id = 3");
$db->delete('user', "id = 1");
$user = $db->get('users', '');

echo "</pre>";
print_r($users);
echo "</pre>";