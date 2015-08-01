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
      <div class="content ">
        <div class="row">
            <div class="col-lg-7">
                <div class="form-group">
                    <label for="sel_payment" class="col-md-2  control-label  control-label">HT thanh toán (<span class="glyphicon glyphicon-asterisk red"></span>)</label>
                    <div class="col-md-8" >
                        <select  class="form-control kichthuocfont"  >
                            <option selected="selected">Shop trả tiền</option>
                            <option>Khách hàng trả tiền</option>

                        </select>
                    </div>
                </div>
                 <div class="form-group">
                     <label for=" input_recipient" class="col-md-2  control-label  control-label">Tiền thu người nhận </label>
                     <div class="col-md-3">
                         <input type="text" class="form-control" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="Tiền thu người nhận chưa tính gói cước dịch vụ "class="form-control" id="input_recipient" >
                       
                     </div>
                     <p class="col-md-4 kichthuocfont" style="margin-top: 10px">(Chưa bao gồm cước dịch vụ)</p>
                 </div>
            </div>
            <div class="col-lg-5">
                <div class="form-group">
                    <div class="col-md-4">
                     <label for=" tem_niem_phong" class="  control-label " control-label">Tem niêm phong </label>
                    </div>
                     <div class="col-md-8">
                         <input type="text" placeholder="Tem niêm phong"  data-toggle="tooltip" data-placement="bottom" data-trigger="hover" title="Tem niêm phong" class="form-control" id="tem_niem_phong" >


                      
                     </div>
                 </div>
                <div class="form-group">
                    <div class="col-md-4">
                     <label for=" ma_voucher" class=" control-label " control-label>Mã voucher </label>
                    </div>
                     <div class="col-md-8">
                         <input type="text" placeholder="Mã voucher" data-toggle="tooltip" data-placement="top" data-trigger="hover" title="Mã voucher" class="form-control" id="ma_voucher" >
                     </div>
                 </div>
            </div>
        </div>
          <div  class="container-fluid" id="division"> </div>  
          <div class="row">
            <div class="col-lg-7">
                <div id="nguoigui">
                    <div class="form-group ">
                        <div class="col-md-3"></div>
                        <div class="  col-md-2">
                            <label class="doituonggiaonhan "><b >NGƯỜI GỬI</b></label>
                        </div>
                       <div class="col-md-6">
                           <select  class="form-control kichthuocfont" >
                               <option>Select a Shop</option>
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
                       <div class="col-md-8" id="telephone">
                           <input type="text" placeholder=" Điện thoại người gửi, vd 0838XXXYYY,0908XXXYYY,012XXXYYYZZ "  data-toggle="tooltip" data-placement="top" 
                                  data-trigger="hover" title="Nhập điện thoại người gửi, vd 0838XXXYYY,0908XXXYYY,012XXXYYYZZ" class="form-control"  >

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
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <span class="guinhan"><button class="kichthuocfont" onClick="annguoigui();">Ẩn người gửi</button></span>
                    </div>
                </div>
                <div id="hienthinguoigui">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <span class="guinhan"><button class="kichthuocfont" onClick="hienthinguoigui();">Hiển thị người gửi</button></span>
                    </div>
                </div>
                <div class="form-group ">
                     <div class="col-md-3"></div>
                     <div class="  col-md-3" style="margin-top: 20px">
                         <label class="doituonggiaonhan"><b >NGƯỜI NHẬN</b></label>
                     </div>
                    
                </div>
                <div class="form-group ">
                     
                     <label class="  col-md-3 control-label" >
                         Địa chỉ người nhận(<span class="glyphicon glyphicon-asterisk red"></span>)
                     </label>
                    <div class="col-md-7">
                        <input type="text" placeholder="Địa chỉ nhận hàng"  class="form-control" >
                            
                    </div>
                     <div class="col-xs-1" id="map"><span class="glyphicon glyphicon-map-marker green"></span></div>
                </div>
                <div class="form-group ">
                     
                     <label class="  col-md-3 control-label" >
                        Tên người nhận(<span class="glyphicon glyphicon-asterisk red"></span>)
                     </label>
                    <div class="col-md-8">
                        <input type="text" placeholder="Họ tên người nhận hàng"    data-toggle="tooltip" data-placement="top" data-trigger="hover"
                              title="Nhập họ tên người nhận hàng" class="form-control" >
                            
                    </div>
                     
                </div>
                
                <div class="form-group ">
                     
                     <label class="  col-md-3 control-label"  >
                         Điện thoại người nhận
                     </label>
                    <div class="col-md-8" id="telephone">
                        <input type="text" placeholder=" Điện thoại người nhận hàng, vd 0838XXXYYY,0908XXXYYY,012XXXYYYZZ "  data-toggle="tooltip" data-placement="top" 
                              data-trigger="hover" title="Nhập điện thoại người gửi, vd 0838XXXYYY,0908XXXYYY,012XXXYYYZZ" class="form-control"  >
                            
                    </div>
                </div>
                <div class="form-group">
                   <label for=" sel_service_charges" class="col-md-2  control-label " control-label">Gói cước dịch vụ (<span class="glyphicon glyphicon-asterisk red"></span>)</label>
                    <div class="col-md-4">
                          
                        <select  class="form-control kichthuocfont"  id="sel_service_charges" >
                            <option>0-1,000,000VND</option>
                            <option>1,000,001-2,000,000VND</option>
                            <option>2,000,001-3,000,000VND</option>
                            <option>4,000,001-5,000,000VND</option>

                        </select>
                    </div>
                </div>
                 <div class="form-group">
                     <label for=" weight"  class="col-md-2  control-label" >Khối lượng (<span class="glyphicon glyphicon-asterisk red"></span>)</label>
                    <div class="col-md-4" data-toggle="tooltip" data-trigger="hover" data-placement="top"  title="Chọn mức khối lượng cho mặt hàng">
                          
                        <select  class="form-control kichthuocfont"  id="weight" >
                            <option>Nhẹ (<3kg)</option>
                            <option>Trung bình ( từ 3-10kg)</option>
                            <option>Nặng (lớn hơn 10kg)</option>
                            

                        </select>
                    </div>
                </div>
                <div class="form-group">
                        <label for=" size"  class="col-md-2  control-label" >Kích thước (<span class="glyphicon glyphicon-asterisk red"></span>)</label>
                  
                        <label class="col-xs-1 kichthuocfont">Dài:</label>
                        <div class="col-md-2" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Dài (cm)">
                            <input type="text" class="form-control" > 
                                
                        </div>   
                  
                        <label class="col-xs-1 kichthuocfont kichhuoclui">Rộng:</label>
                        <div class="col-md-2" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Rộng (cm)">
                            <input type="text" class="form-control" > 
                                
                        </div>
                  
                        <label class="col-xs-1 kichthuocfont kichhuoclui">Cao:</label>
                        <div class="col-md-2" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Cao (cm)">
                            <input type="text" class="form-control" > 
                                
                        </div>
                         
                       
                    
                </div>

             <div class="col-lg-5">

                        
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
        });
        $('#nguoigui').hide();
        function hienthinguoigui(){
            $('#nguoigui').show();
            $('#hienthinguoigui').hide();
        }
        function annguoigui(){
            $('#nguoigui').hide();
            $('#hienthinguoigui').show();
        }
    </script>
  </body>
</html>