<?php
  function query_count($sql) {
    $total=0;
    $tmp=$GLOBALS['koneksi']->query($sql);
    $total=$tmp->num_rows;
    return $total;
  }
?>