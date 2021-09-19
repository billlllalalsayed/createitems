<?php
class Item_Model extends CI_Model
{
    function saverecords($name, $email, $phone)
    {
        $query = "insert into items values('','$name','$email','$phone')";
        $this->db->query($query);
    }

    function displayrecords()
    {
        $query = $this->db->query("select * from items");
        return $query->result();
    }
    function deleterecords($id)
    {
        $this->db->query("delete  from items where ID='" . $id . "'");
    }
    function displayrecordsById($id)
    {
        $query = $this->db->query("select * from items where ID='" . $id . "'");
        return $query->result();
    }

    function updaterecords($name, $email, $phone, $id)
    {
        $query = $this->db->query("update items SET Name='$name',Email='$email',Phone='$phone' where ID='" . $id . "'");
    }
}
