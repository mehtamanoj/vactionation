<html>
<head><meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<style type="text/css">

span.cls_002{font-family:Arial,serif;font-size: 17.1px;color:rgb(31,73,125);font-weight:bold;font-style:normal;text-decoration: none;    margin-left: -17%;}
div.cls_002{font-family:Arial,serif;font-size:8.1px;color:rgb(31,73,125);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_003{font-family:Arial,serif;font-size: 10.1px;color: rgb(31,73,125);font-weight:bold;font-style:normal;text-decoration: none;    margin-left: -27%;}
div.cls_003{font-family:Arial,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none;     margin-top: 2%;}
span.cls_004{font-family:Arial,serif;font-size:13.1px;color:rgb(31,73,125);font-style:normal;text-decoration: none}
div.cls_004{font-family:Arial,serif;font-size:14.1px;color:rgb(31,73,125);font-style:normal;text-decoration: none}
span.cls_005{font-family:Arial,serif;font-size:8.1px;color:rgb(3,4,4);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_005{font-family:Arial,serif;font-size:8.1px;color:rgb(3,4,4);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_006{font-family:Arial,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_006{font-family:Arial,serif;font-size:10.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_007{font-family:Arial,serif;font-size:8.1px;color:rgb(3,4,4);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_007{font-family:Arial,serif;font-size:8.1px;color:rgb(3,4,4);font-weight:bold;font-style:normal;text-decoration: none}
span.cls_008{font-family:Arial,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
div.cls_008{font-family:Arial,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:normal;font-style:normal;text-decoration: none}
span.cls_009{font-family:Arial,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}
div.cls_009{font-family:Arial,serif;font-size:8.1px;color:rgb(0,0,0);font-weight:bold;font-style:normal;text-decoration: none}

.satyamev {
            width: 15%;
         margin-left: 43%;
        }
        @media print {
      body, html, #wrapper {
          width: 100%;
      }
}
 body,html { margin-top:0%;
   display:block;
   height:100%;}
</style>

<script type="text/javascript" src="32ffae24-977a-11ec-a980-0cc47a792c0a_id_32ffae24-977a-11ec-a980-0cc47a792c0a_files/wz_jsgraphics.js"></script>
</head>
<body>
	

<input type="button" onclick="printDiv('printableArea')" value="print a div!" />
	<?php
	
    // Include the library in your project
    require ('vendor/autoload.php');
	
    // Instantiate the library class
    $barcode = new \Com\Tecnick\Barcode\Barcode();
    $dir = "qr-code/";
    
    // Directory to store barcode
    if (! is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
    // data string to encode
    $source = "https://cdn.shopify.com/s/files/1/0272/4544/5199/products/PM_2178_1_7810574b-4403-401d-8bc5-ba409c3859d7_1600x.jpg?v=1575800986";
	
    // ser properties
    $qrcodeObj = $barcode->getBarcodeObj('QRCODE,H', $source, - 16, - 16, 'black', array(
        - 2,
        - 2,
        - 2,
        - 2
    ))->setBackgroundColor('#f5f5f5');
    
    // generate qrcode
    $imageData = $qrcodeObj->getPngData();
    $timestamp = time();
    
    //store in the directory
    file_put_contents($dir . $timestamp . '.png', $imageData);
	$qrimage = $dir . $timestamp.'.png';
     //Output image to the browser
      
?>
<div  id="printableArea" style="position:absolute;left:50%;margin-left:-297px;top:0px;width:595px;height:842px;overflow:hidden">

<img src="logo.png"
        class="satyamev"> 
        <div style="margin-left: 35%;left:80.79px;top:112.99px;" class="cls_001">
            <span class="cls_001" style=" font-size: 10.1px;
    color: rgb(0,0,0);
    font-weight: bold;font-family:Arial,serif;">Ministry of Health and Family Welfare</span>

</div>
 <div style="margin-left: 41%;left:80.79px;top:112.99px;" class="cls_001">
            <span class="cls_001" style=" font-size: 10.1px;
    color: rgb(0,0,0);
    font-weight: bold;font-family:Arial,serif;">Government of India</span>
    
</div>
<div style="margin-left: 37%;left:80.79px;top:112.99px" class="cls_002"><span class="cls_002">Certificate for COVID-19 Vaccination</span></div>
<div style="margin-left: 40%;left:145.62px;top:134.70px" class="cls_003"><span class="cls_003">Issued in India by Ministry of Health & Family Welfare, Govt. of India</span></div>
<div style="   margin-left: 53%;left: 232.63px;top: 128.32px;" class="cls_003"><span class="cls_003" style=" font-size: 9.1px;color: rgb(0,0,0);">Certificate ID   <?php echo rand(11111111111,999999999999);?></span></div>

<div style="position:absolute;left:38.25px;top:180.73px" class="cls_004"><span class="cls_004"><u>Beneficiary Details</u></span></div>
<div style="position:absolute;left:38.25px;top:205.02px" class="cls_005"><span class="cls_005">Beneficiary Name /</span></div>
<div style="position:absolute;left:109.33px;top:203.79px" class="cls_005"><span class="cls_005">लाभार्थी का नाम</span></div>
<div style="position:absolute;left:290.00px;top:200.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['BeneficiaryName'] ?></span></div>
<div style="position:absolute;left:290.00px;top:220.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['Age'] ?></span></div>
<div style="position:absolute;left:38.25px;top:226.59px" class="cls_005"><span class="cls_005">Age /</span></div>
<div style="position:absolute;left:61.95px;top:225.91px" class="cls_005"><span class="cls_005">उम्र</span></div>
<div style="position:absolute;left:38.25px;top:245.07px" class="cls_005"><span class="cls_005">Gender /</span></div>
<div style="position:absolute;left:75.74px;top:244.11px" class="cls_005"><span class="cls_005">लिंग</span></div>
<div style="position:absolute;left:290.00px;top:240.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['entry_589094590'] ?></span></div>
<div style="position:absolute;left:38.25px;top:265.40px" class="cls_005"><span class="cls_005">ID Verified /</span></div>
<div style="position:absolute;left:85.16px;top:263.60px" class="cls_005"><span class="cls_005">पहचान पत्र सत्यापित</span></div>
<!-- <div style="position:absolute;left:151.03px;top:266.76px" class="cls_005"><span class="cls_005">ा पत</span></div> -->
<div style="position:absolute;left:290.00px;top:260.90px" class="cls_006"><span class="cls_006">Aadhaar # XXXXXXXX<?php echo $_POST['Aadhaar'] ?></span></div>
<div style="position:absolute;left:38.25px;top:284.41px" class="cls_005"><span class="cls_005">Unique Health ID (UHID)</span></div>
<div style="position:absolute;left:38.25px;top:304.66px" class="cls_005"><span class="cls_005">Beneficiary Reference ID</span></div>
<div style="position:absolute;left:290.00px;top:300.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['BRI'] ?></span></div>
<div style="position:absolute;left:38.25px;top:324.24px" class="cls_005"><span class="cls_005">Vaccination Status /</span></div>
<div style="position:absolute;left:113.35px;top:323.39px" class="cls_005"><span class="cls_005">टीकाकरण की स्थिति</span></div>
<?php print_r($_POST)?>
<div style="position:absolute;left:290.00px;top:320.90px" class="cls_006"><span class="cls_006"><?php if($_POST['DoseNumber'] == 1){ echo  "Partially Vaccinated (1 Dose)"; }else{
    echo "Fully Vaccinated (2 Dose)";
} ?></span></div>
<div style="position:absolute;left:38.25px;top:347.84px" class="cls_004"><span class="cls_004"><u>Vaccination Details</u></span></div>
<div style="position:absolute;left:290.00px;top:364.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['VaccineName'] ?></span></div>
<div style="position:absolute;left:99.72px;top:369.04px" class="cls_005"><span class="cls_005">वैक्सीन का नाम</span></div>
<div style="position:absolute;left:38.25px;top:369.62px" class="cls_005"><span class="cls_005">Vaccine Name /</span></div>
<div style="position:absolute;left:290.00px;top:384.90px" class="cls_006"><span class="cls_006">COVID-19 vaccine, inactivated virus</span></div>
<!-- <div style="position:absolute;left:105.42px;top:393.69px" class="cls_005"><span class="cls_005">ट</span></div> -->
<div style="position:absolute;left:38.25px;top:391.18px" class="cls_005"><span class="cls_005">Vaccine Type /</span></div>
<div style="position:absolute;left:94.39px;top:390.98px" class="cls_005"><span class="cls_005">वैक्सीन प्रकार</span></div>
<div style="position:absolute;left:290.00px;top:404.90px" class="cls_006"><span class="cls_006">Bharat Biotech, India</span></div>
<div style="position:absolute;left:38.25px;top:409.88px" class="cls_005"><span class="cls_005">Manufacturer /</span></div>
<div style="position:absolute;left:96.70px;top:409.16px" class="cls_005"><span class="cls_005">उत्पादक</span></div>
<div style="position:absolute;left:290.00px;top:424.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['DoseNumber'] ?>/2</span></div>
<div style="position:absolute;left:98.72px;top:429.12px" class="cls_005"><span class="cls_005">खुराक संख्या</span></div>
<div style="position:absolute;left:38.25px;top:430.02px" class="cls_005"><span class="cls_005">Dose Number /</span></div>
<div style="position:absolute;left:290.00px;top:444.90px" class="cls_006"><span class="cls_006"><?php echo date("d M y", strtotime($_POST['DateofDose']) ) ?></span></div>
<div style="position:absolute;left:94.72px;top:449.76px" class="cls_005"><span class="cls_005">खुराक की तिथि</span></div>
<div style="position:absolute;left:38.25px;top:451.13px" class="cls_005"><span class="cls_005">Date of Dose /</span></div>
<div style="position:absolute;left:290.00px;top:464.90px" class="cls_006"><span class="cls_006">37M21028A</span></div>
<div style="position:absolute;left:38.25px;top:469.28px" class="cls_005"><span class="cls_005">Batch Number /</span></div>
<div style="position:absolute;left:98.72px;top:468.00px" class="cls_005"><span class="cls_005">बैच संख्या</span></div>
<?php $date = strtotime("+3 months", strtotime($_POST['DateofDose'])); ?>
<div style="position:absolute;left:290.00px;top:485.90px" class="cls_006"><span class="cls_006">Between <?php echo date("d M y", $date ) ?> and <?php echo date("d M y", strtotime("+5 days", $date) ) ?></span></div>
<div style="position:absolute;left:38.25px;top:490.32px" class="cls_005"><span class="cls_005">Next Due Date / अगला देय तिथि</span></div>
<div style="position:absolute;left:38.25px;top:510.98px" class="cls_005"><span class="cls_005">Vaccinated By /</span></div>
<div style="position:absolute;left:98.72px;top:508.82px" class="cls_005"><span class="cls_005">द्वारा टीका लगाया गया</span></div>
<div style="position:absolute;left:290.00px;top:505.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['VaccinatedBy'] ?></span></div>
<div style="position:absolute;left:38.25px;top:531.11px" class="cls_005"><span class="cls_005">Vaccination At /</span></div>
<div style="position:absolute;left:97.72px;top:528.66px" class="cls_005"><span class="cls_005">टीकाकरण ए.टी</span></div>
<div style="position:absolute;left:290.00px;top:525.90px" class="cls_006"><span class="cls_006"><?php echo $_POST['VaccinationAt'] ?></span></div>

<div style="position:absolute;right: 1%;bottom: 3%;z-index:9">
	<img src="<?php echo $qrimage; ?>" style="width: 238px;height: 241px;">
</div>
<div style="position:absolute;left:0px;bottom:0">
<img src="covid.png" width=595 height=auto></div> 
<!--<div style="position:absolute;left:150.64px;top:600.42px" class="cls_005"><span class="cls_005">“दवाई भी और कड़ाई भी।</span></div>-->
<!--<div style="position:absolute;left:149.64px;top:628.86px" class="cls_005"><span class="cls_005">Together, India will defeat</span></div>-->
<!--<div style="position:absolute;left:149.64px;top:648.68px" class="cls_005"><span class="cls_005">COVID-19”</span></div>-->
<!--<div style="position:absolute;left:149.64px;top:675.68px" class="cls_007"><span class="cls_007">- þधानमùी नरû मोदी</span></div>-->
<!--<div style="position:absolute;left:37.89px;top:710.33px" class="cls_008"><span class="cls_008">In case of any adverse events, kindly contact the nearest Public Health Center/</span></div>-->
<!--<div style="position:absolute;left:37.89px;top:719.07px" class="cls_008"><span class="cls_008">Healthcare Worker/District Immunization Officer/State </span><span class="cls_009">Helpline No. 1075</span></div>-->
<!--<div style="position:absolute;left:37.89px;top:734.41px" class="cls_008"><span class="cls_008">टीकाकरण पÌात कसी þ तकल घटना क होन पर नज़दीक+</span></div>-->
<!--<div style="position:absolute;left:216.54px;top:741.01px" class="cls_008"><span class="cls_008">ाö कû/  ाö कमZ/ जला टीकाकरण</span></div>-->
<!--<div style="position:absolute;left:37.89px;top:746.57px" class="cls_008"><span class="cls_008">अ धकारी/राÞ ह¹ लाइन 1075 पर सक कर</span></div>-->
<!--<div style="position:absolute;left:373.46px;top:816.71px" class="cls_008"><span class="cls_008">This certificate can be verified by scanning the QR code at</span></div>-->
<!--<div style="position:absolute;left:493.74px;top:825.13px" class="cls_008"><span class="cls_008"> </span><A HREF="http://verify.cowin.gov.in/">http://verify.cowin.gov.in</A> </div>-->
</div>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
<script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
<script type="text/javascript">
	function printDiv(divName) {
     // var printContents = document.getElementById(divName).innerHTML;
     // var originalContents = document.body.innerHTML;

     // document.body.innerHTML = printContents;

     // window.print();

     // document.body.innerHTML = originalContents;
     var HTML_Width = $("#printableArea").width();
    var HTML_Height = $("#printableArea").height();
    var top_left_margin = 0;
    var PDF_Width = HTML_Width + (top_left_margin * 2);
    var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
    var canvas_image_width = HTML_Width;
    var canvas_image_height = HTML_Height;

    var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

  html2canvas(document.querySelector("#printableArea"),{scale:5}).then(canvas => {
                //$("#previewBeforeDownload").html(canvas);
                var imgData = canvas.toDataURL("image/jpeg",1);
                var pdf = new jsPDF("p", "mm", "a4");
                var pageWidth = pdf.internal.pageSize.getWidth();
                var pageHeight = pdf.internal.pageSize.getHeight();
                var imageWidth = canvas.width;
                var imageHeight = canvas.height;

                var ratio = imageWidth/imageHeight >= pageWidth/pageHeight ? pageWidth/imageWidth : pageHeight/imageHeight;
                //pdf = new jsPDF(this.state.orientation, undefined, format);
                pdf.addImage(imgData, 'JPEG', 0, 0, imageWidth * ratio, imageHeight * ratio);
                pdf.save("invoice.pdf");
                //$("#previewBeforeDownload").hide();
                $('#c-invoice').modal('hide');
            });
}
</script>
</html>
