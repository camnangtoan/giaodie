<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap test template</title>

    <!-- Bootstrap -->
   
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/shipdi.css" rel="stylesheet">
  </head>
  <body>
      <div id="navigation" class="navbar  ">
          <div class="navbar-header">
              <a class="navbar-brand" href="#"></a>
          </div>
          <div>
            <ul class="nav navbar-nav">
              <li  ><a href="#"  class="glyphicon glyphicon-home"></a></li>
              <li class="dropdown active">
                <a class="dropdown-toggle " data-toggle="dropdown" href="#">Đơn hàng
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Page 1-1</a></li>
                  <li><a href="#">Page 1-2</a></li>
                  <li><a href="#">Page 1-3</a></li> 
                </ul>
        </li>
              <li><a href="#">Tiền thu hộ</a></li> 
              <li><a href="#">Hóa đơn</a></li> 
              <li><a href="#">Bảng giá</a></li> 
              <li><a href="#">Chính sách sử dụng</a></li> 
              <li><a href="#">Hướng dẫn</a></li> 
              
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-bullhorn"></span> Sign Up</a></li>
              <li><a href="#"><span class="glyphicon glyphicon-question-sign"></span> Login</a></li>
               <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Login</a></li>
            </ul>
           </div>
      </div>
      
      <div class="content ">
        <div class="row">
            <div class="col-lg-7">
                <div class="form-group">
                    <label for="sel_payment" class="col-md-2  control-label  control-label">HT thanh toán (<span class="glyphicon glyphicon-asterisk red"></span>)</label>
                    <div class="col-md-8" >
                        <select  class="form-control"  >
                            <option selected="selected">Người gửi trả tiền</option>
                            <option>Người nhận trả tiền</option>

                        </select>
                    </div>
                </div>
                 <div class="form-group">
                     <label for=" input_recipient" class="col-md-2  control-label  control-label">Tiền thu người nhận </label>
                     <div class="col-md-3">
                         <input type="text" class="form-control" data-toggle="tooltip" data-placement="top" title="Tiền thu người nhận chưa tính gói cước dịch vụ"class="form-control" id="input_recipient" >
                       
                         <p>()<strong>VND</strong></p>
                     </div>
                     <p class="col-md-4" style="margin-top: 10px">(Chưa bao gồm cước dịch vụ)</p>
                 </div>
<!--                <div class="form-group">
                   <label for=" sel_service_charges" class="col-md-2  control-label " control-label">Dịch vụ khai giá </label>
                    <div class="col-md-4">
                          
                        <select  class="form-control"  id="sel_service_charges" >
                            <option>0-1,000,000VND</option>
                            <option>1,000,001-2,000,000VND</option>
                            <option>2,000,001-3,000,000VND</option>
                            <option>4,000,001-5,000,000VND</option>

                        </select>
                    </div>
                   
                    <div class="checkbox col-xs-2 " style="width: 17%">
                            <label ><input type="checkbox" value="" data-toggle="tooltip" data-placement="top" title="Click vào đây để sử dụng dịch vụ khai giá"><strong style="font-size: 12px;">Cước phí:VND</strong></label>
                     </div>
                    <div class="col-xs-2 "style="margin-top: 10px; " >
                        <span class="glyphicon glyphicon-question-sign  green " data-toggle="tooltip" data-placement="top" title="Xem chi tiết"></span><b style="font-size: 12px;position: absolute;top:4px">Miễn phí</b></a>
                     </div>
                    </div>-->
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                     <label for=" tem_niem_phong" class="col-md-2  control-label " control-label">Tem niêm phong (<span class="glyphicon glyphicon-asterisk red"></span>)</label>
                     <div class="col-md-8">
                         <input type="text" placeholder="Tem niêm phong"  data-toggle="tooltip" data-placement="top" title="Tem niêm phong" class="form-control" id="tem_niem_phong" >


                      
                     </div>
                 </div>
                 <div class="form-group">
                     <label for=" ma_don_hang" class="col-md-2  control-label " control-label">Mã đơn hàng công ty </label>
                     <div class="col-md-8">
                         <input type="text" placeholder="Mã đơn hàng công ty" data-toggle="tooltip" data-placement="top" title="Mã đơn hàng công ty" class="form-control" id="ma_don_hang" >


                      
                     </div>
                 </div>
                <div class="form-group">
                     <label for=" ma_voucher" class="col-md-2  control-label " control-label>Mã voucher </label>
                     <div class="col-md-8">
                         <input type="text" placeholder="Mã voucher" data-toggle="tooltip" data-placement="top" title="Mã voucher" class="form-control" id="ma_voucher" >


                      
                     </div>
                 </div>
            </div>
        </div>
          <div  class="container-fluid" id="division"> </div>  
          <div class="row">
            <div class="col-lg-6">
                
                 <div class="form-group ">
                     <div class="col-md-3"></div>
                     <div class="  col-md-2">
                         <b style="position: absolute;top:20px">Người gửi</b>
                     </div>
                    <div class="col-md-5">
                        <select  class="form-control" >
                            <option>Select an option</option>
                            <
                        </select>
                    </div>
                </div>
                 <div class="form-group ">
                     
                     <label class="  col-md-3 control-label" >
                         Địa chỉ lấy hàng(<span class="glyphicon glyphicon-asterisk red"></span>)
                     </label>
                    <div class="col-md-7">
                        <input type="text" placeholder="Nhập địa chỉ người gửi"  class="form-control" >
                            
                    </div>
                     <div class="col-xs-1" id="map"><span class="glyphicon glyphicon-map-marker green"></span></div>
                </div>
                 <div class="form-group ">
                     
                     <label class="  col-md-3 control-label"  >
                         Điện thoại người gửi(<span class="glyphicon glyphicon-asterisk red"></span>)
                     </label>
                    <div class="col-md-8">
                        <input type="text" placeholder=" Điện thoại người gửi, vd 0838XXXYYY,0908XXXYYY,012XXXYYYZZ "  data-toggle="tooltip" data-placement="top" title="Nhập điện thoại người gửi, vd 0838XXXYYY,0908XXXYYY,012XXXYYYZZ" class="form-control" >
                            
                    </div>
                </div>
                 <div class="form-group ">
                     
                     <label class="  col-md-3 control-label"  >
                         Ghi chú
                     </label>
                    <div class="col-md-8">
                        <textarea type="text" placeholder=" Nội dung ghi chú đơn hàng" rows="4"  class="form-control " ></textarea>
                            
                    </div>
                </div>   
            </div>

             <div class="col-lg-6">

                        fggdsfgdg
            </div>
          </div>
      </div><!--END CONTENT-->
    
 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/bootstrap.min.js"></script>
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});</script>
  </body>
</html>