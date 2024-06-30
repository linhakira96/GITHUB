<div class="row">
        <div class="row form-title"><h1>THÊM MỚI LOẠI HÀNG HÓA</h1></div>
        <div class="row form-content">
          <form action="index.php?act=adddm" method="post">
            <div class="row mb10">
              Mã loại <br />
              <input type="text" name="maloai" id="" disabled />
            </div>
            <div class="row mb10">
              Tên loại <br />
              <input type="text" name="tenloai" id="" />
            </div>
            <div class="row mb10">
              <input type="submit" name="themmoi" value="THÊM MỚI" />
              <input type="reset" name="nhaplai" value="NHẬP LẠI" />
              <a href="index.php?act=listdm"
                ><input type="button" name="btn_list" value="DANH SÁCH"
              /></a>
            </div>
            <?php
            if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
            ?>
          </form>
        </div>
      </div>
    </div>