<div class="row">
        <div class="row form-title mb"><h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
            <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw" id="">
                <select name="iddm" id="">
                  <option value="0" selected>Tất cả</option>
                  <?php 
                    foreach($listdanhmuc as $danhmuc){
                      extract($danhmuc);
                      echo '<option value="'.$id.'">'.$name.'</option>';
                    }
                  ?>
              </select>
              <input type="submit" name="listOK" value="Go">
            </form>
        <div class="row form-content">
          <form action="" method="post">
            <div class="row mb10 form-dsLoai">
              <table>
                <tr>
                  <th></th>
                  <th>MÃ LOẠI</th>
                  <th>TÊN SẢN PHẨM</th>
                  <th>HÌNH</th>
                  <th>GIÁ</th>
                  <th>LƯỢT XEM</th>
                  <th></th>
                </tr>
                <?php
                  foreach($listsanpham as $sanpham){
                    extract($sanpham);
                    $suasp="index.php?act=suasp&id=".$id;
                    $xoasp="index.php?act=xoasp&id=".$id;
                    $hinhpath=".././upload/".$img;
                    if(is_file($hinhpath)){
                      $hinh="<img src='".$hinhpath."'height='200' width='200'>";
                    }else{
                      $hinh="no photo";
                    }
                    echo ' <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinh.'</td>
                            <td>'.$price.'</td>
                            <td>'.$luotxem.'</td>
                            <td>
                              <a href="'.$suasp.'"><input type="button" value="Sửa" /></a>
                              <a onclick="return confirm(\'Bạn có chắc muốn xóa?\')" href="'.$xoasp.'"><input type="button" value="Xóa" /></a>
                            </td>
                                              
                          </tr>';
                  }
                ?>
                
              </table>
              
            </div>
            <div class="row mb10">
              <input type="button" name="btn_all" value="Chọn tất cả" />
              <input type="button" name="btn_remove_all" value="Bỏ chọn tất cả" />
              <input type="button" name="btn_delete_all" value="Xóa các mục đã chọn" />
              <a href="index.php?act=addsp"><input type="button" value="Nhập thêm" /></a>
            </div>
          </form> 
        </div>
      </div>