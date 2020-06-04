# csdl2020-v5 _ web điện thoại _ php
Đề tài : <a href="https://csdl-2020.000webhostapp.com">Website bán điện thoại di động online </a>

file báo cáo bằng pdf : <a href="https://github.com/pqthinh/csdl2020/blob/master/bao_cao_csdl.pdf" >bao_cao_csdl.pdf Tại đây </a>

https://shorturl.at/eprK9 (<a href="https://docs.google.com/document/d/1x7DE3xb-B_Crvc4eEayqBQXC59vljLrhA8UWSNZlPe8/edit?usp=sharing">XEM báo cáo chi tiết gg docx </a>)<br>
(LINK gg docx bên trên chứa Chức năng chi tiết + truy vấn cơ bản + Chi tiết các bảng trong csdl )

<ul>
  <p>1 Giới thiệu : </p>
  <li><p>Link git :  https://github.com/pqthinh/csdl2020-v3<p></li>
  <li><p>Link web demo: https://csdl-2020.000webhostapp.com<p></li>
( Đăng nhập :  pqthinh0@gmail.com | 123  hoặc admin| admin) 
<li>
  <ul> Công nghệ sử dụng: 
    <li>Mô hình web:  client - server </li>
    <li>html css js (thuần) : code front-end </li>
    <li>php (thuần) + mysql  : code back-end</li>
    <li>Quản lý project : github / git-desktop</li>
    <li>IDE code : netbeans 8.2</li>
    <li>Database : phpMyAdmin (xampp)</li>
  </ul>
</li>
<li> 
  <ul> Trang web tham khảo :
      <li>https://www.w3schools.com  (html/ css / js  / php) </li>
      <li>https://www.mysql.com  (mysql)</li>
  </ul>
  </li>
</ul>

<hr>

2 Chức năng : <br/>
+Người dùng ( thành viên / khách hàng ) đăng nhập vào hệ thống có thể xem / sửa thông tin / xem lịch sửa mua hàng / đơn hàng hiện tại / xem + tìm kiếm + mua + thanh toán ( không có thanh toán online [chỉ nhận tiền khi giao hàng] )  + báo cáo lỗi về trang admin <br>

+Hiển thị nội dung trang web : Show sản phẩm bán chạy / ưa thích / sp mới nhất / sp có khuyến mãi / danh mục sp / hỗ trợ người dùng tìm kiếm + lọc thông tin theo cái đặc điểm như giá tiền, tên sp, loại sản phẩm ,hãng ,tính năng ...  / hiển thị trang cá nhân của thành viên / trang giỏ hàng <br>

+Hiển thị quảng cáo phù hợp với kết quả khi người dùng tìm kiếm

+Giỏ hàng : thêm sp vào giỏ / sửa số lượng sp trong giỏ / xóa sp khỏi giỏ hàng 

+Chức năng thanh toán :
  b1:(lấy thông tin thành viên -> thông tin trên bảng khách hàng | lấy thông tin nhân viên phù hợp đề chèn vào bảng khách hàng)<br>
  b2:(lấy thông tin từ bảng giỏ hàng chèn vào bảng hóa đơn )<br>
  b3:(lấy thông tin người nhận hàng mà người dùng nhập rồi chèn vào bảng thanh toán )<br>
  b4:(làm rỗng giỏ hàng khi đã thanh toán)<br>
  
+Xứ lý thông tin lúc đăng nhập ( admin/ thành viên ), đăng ký thành viên mới 
  * chỉ có 1 tài khoản admin để quản lý trang *

+Quản trị viên : 
-Quản lý ds nhân viên (xem, thêm ,sửa , xóa thông tin của nhân viên )
-Quản lý hóa đơn (xem ,sửa đơn hàng )
-Quản lý danh mục sp ( thêm sửa xóa sp / thêm sp khuyến mãi)
-Tính toán doanh thu :(không có)
-Quản lý lỗi do người dùng báo cáo về hệ thống

<hr>

3 Mô hình csdl:
<br>
Mô hình liên kết bảng :
<br>

![alternativetext](mohinhlienketbang.png)

<hr>

4 Truy vấn cơ bản sử dụng trong bài .( <a href="https://docs.google.com/document/d/1x7DE3xb-B_Crvc4eEayqBQXC59vljLrhA8UWSNZlPe8/edit?usp=sharing">có trong chi tiết báo cáo</a> )

<br>
<p style="border-botom: 1px solid red; text-align: center;">end</p>
<p>--------------------Sửa: 6/2/2020--------------------------</p>
