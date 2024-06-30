<?php
  function insert_danhmuc($tendm){
    $sql = "INSERT INTO danhmuc (name) VALUES ('$tendm')";
    pdo_execute($sql);
  }
  function delete_danhmuc($id_dm){
    $sql="delete from danhmuc where id_dm =".$id_dm;
    pdo_execute($sql);
  }
  function loadAll_danhmuc(){
    $sql = "SELECT * FROM danhmuc ORDER BY id_dm DESC";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
  }
  function loadOne_danhmuc($id_dm){
    $sql="select*from danhmuc where id_dm =".$id_dm;
    $dm=pdo_query_one($sql);
    return $dm;
  }
  function update_danhmuc($id_dm,$tendm){
    $sql = "UPDATE danhmuc SET name='".$tendm."' WHERE id_dm=".$id_dm;
    pdo_execute($sql);
  }
?>