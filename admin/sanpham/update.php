<?php
  if(is_array($sanpham)){
    extract($sanpham);
  }
  $hinhpath=".././upload/".$img;
  if(is_file($hinhpath)){
    $hinh="<img src='".$hinhpath."'height='100' width='200'>";
  }else{
    $hinh="no photo";
  }
?>
<div class="row">
        <div class="row form-title"><h1>CẬP NHẬT LOẠI HÀNG HÓA</h1></div>
        <div class="row form-content">
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="row mb10">
            <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php 
                      foreach($listdanhmuc as $danhmuc){
                        if($iddm==$danhmuc['id']) $s="selected";else $s="";
                          echo '<option value="'.$danhmuc['id'].'" '.$s.'>'.$danhmuc['name'].'</option>';
                      }
                    ?>
            </select>
            </div>
            <div class="row mb10">
              Tên sản phẩm <br />
              <input type="text" name="tensp" id="" value="<?=$name?>" />
            </div>
            <div class="row mb10">
              Giá<br />
              <input type="text" name="giasp" id="" value="<?=$price?>" />
            </div>
            <div class="row mb10">
              Hình<br />
              <input type="file" name="hinh" id="" />
              <?=$hinh?>
            </div>
            <div class="row mb10">
              Mô tả<br />
              <textarea name="mota" id="" cols="30" rows="10"><?=$mota?></textarea>
            </div>
            <div class="row mb10">
              <input type="hidden" name="id" value="<?=$id?>">
              <input type="submit" name="capnhat" value="Cập nhật" />
              <input type="reset" name="nhaplai" value="Nhập lại" />
              <a href="index.php?act=listsp"
                ><input type="button" name="btn_list" value="Danh sách"
              /></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </form>
        </div>
      </div>
    </div>