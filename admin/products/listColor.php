<div class="row">
    <div class="row frmtitle titleAD">
        <h1>DANH SÁCH MÀU</h1>
    </div>
    <div class="row fromcontent">
        <div class="row mb frmdsloai table">
            <table>
                <tr>
                    <th></th>
                    <th>Mã màu</th>
                    <th>Tên màu</th>
                    <th></th>
                </tr>
                <?php
 $listcolor=color(); 
foreach ($listcolor as $color){

  extract($color);
  $suacolor="index.php?act=suacolor&id=".$id;
  $xoacolor="index.php?act=xoacolor&id=".$id;
  echo '<tr>
  <td><input type="checkbox" name="" id=""></td>
  <td>'.$id.'</td>
  <td>'.$mau.'</td>
  <td><a href="'.$suacolor.'"><input type="button" value="sửa"></a> <a href="'.$xoacolor.'"><input type="button" value="xóa"></a></td>
</tr>';
}
?>

            </table>
        </div>
    </div>
    <div class="row mb">

        <a href="index.php?act=addColor"> <input type="button" name="" id="" value="Nhập thêm"></a>
    </div>
</div>