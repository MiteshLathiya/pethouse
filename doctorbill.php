<script>
function printContent(el){
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById(el).innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}
</script>
<link href="<?php echo $baseurl?>css/doctorbill.css" rel="stylesheet">
<link href="<?php echo $baseurl?>css/doctorbootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="<?php echo $baseurl?>js/doctorbootstrap.min.js"></script>
<script src="<?php echo $baseurl?>js/doctorjquery.min.js"></script>

<script>
    $('#printInvoice').click(function(){
                Popup($('.invoice')[0].outerHTML);
                function Popup(data) 
                {
                    window.print();
                    return true;
                }
            });
    </script>

<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="toolbar hidden-print">
        <div class="text-right">
        <!-- onclick="printContent('div1')"> -->
            <button onclick="printContent('print')" id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> Print</button>
            <!-- <button class="btn btn-info"><i class="fa fa-file-pdf-o"></i> Export as PDF</button> -->
        </div>
        <hr>
    </div>
    <div class="invoice overflow-auto" id="print">
        <div style="min-width: 600px">
           
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="<?php echo $baseurl?>image/main-logo.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    
                </div>
            </header>
            <main>
                <div class="row contacts">
                <?php foreach ($userdata as $userdata1) 
                {
                ?>
                    <div class="col invoice-to">
                        <div class="text-gray-light">YOUR INFORMTAION :</div>
                        <h2 class="to"><?php echo $userdata1["firstname"]?></h2>
                        <div class="address">MOBILE : <?php echo $userdata1["mobile"]?></div>
                        <div class="email">EMAIL : <a><?php echo $userdata1["email"]?></a></div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">RECEIPT</h1>
                        
                        <div class="date"><?php echo $userdata1["doctorbook_date"]?></div>
                        
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">DOTOR NAME</th>
                            <th class="text-right">PRICE</th>
                            <th class="text-right">TIME</th>
                            <th class="text-right">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($doctorcartbill as $doctorcartbill1) {
                        ?>
                
                        <tr>
                            <td class="no"><?php echo $doctorcartbill1["bill_id"]?></td>
                            <td class="text-left"><h3>
                             
                                <?php echo $doctorcartbill1["d_name"]?>
                            
                                </h3>
                               <a  href="https://www.youtube.com/channel/UC_UMEcP_kF0z4E6KbxCpV1w">
                                 
                               </a> 
                               <?php echo $doctorcartbill1["d_info"]?>
                            </td>
                            <td class="unit"><?php echo $doctorcartbill1["d_fee"]?></td>
                            <td class="qty"><?php echo $doctorcartbill1["d_date"]?></td>
                            <td class="total"><?php echo $doctorcartbill1["d_fee"]?></td>
                        </tr>
                       <?php
                    }
                    ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>.<?php echo $subtotalbill[0]["total"];?></td>
                        </tr>
                       
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">GRAND TOTAL</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
                <div class="thanks">Thank you!</div>
                
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
          
        </div>
        <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
        <div></div>
    </div>
</div>