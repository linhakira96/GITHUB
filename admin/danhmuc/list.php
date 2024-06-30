<div class="row">
        <div class="row form-title"><h1>DANH SÁCH LOẠI HÀNG HÓA</h1></div>
        <div class="row form-content">
          <form action="" method="post">
            <div class="row mb10 form-dsLoai">
              <table>
                <tr>
                  <th></th>
                  <th>MÃ LOẠI</th>
                  <th>TÊN LOẠI</th>
                  <th></th>
                </tr>
                <?php
                  foreach($listdanhmuc as $danhmuc){
                    extract($danhmuc);
                    $suadm="index.php?act=suadm&id=".$id;
                    $xoadm="index.php?act=xoadm&id=".$id;
                    echo ' <tr>
                            <td><input type="checkbox" name="" id="" /></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>
                              <a href="'.$suadm.'"><input type="button" value="Sửa" /></a>
                              <a onclick="return confirm(\'Bạn có chắc muốn xóa?\')" href="'.$xoadm.'"><input type="button" value="Xóa" /></a>
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
              <a href="index.php?act=adddm"><input type="button" btn="nhapthem" value="Nhập thêm" /></a>
            </div>
          </form> 
        </div>
      </div>