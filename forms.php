<!-- // <?php  if (!empty($_SESSION['user_name'])): -->
<!--
//     $log_user = $_SESSION['user_name']." ".$_SESSION['user_last'];
//     $form = new form();
//     $lbaddress = new label('IP : ');
//     $lbzoo = new label('สวน / สำนัก : ');
//     $lbname = new label('ชื่อหรือระบบ : ');
//     $lbnickname = new label('ชื่อเล่น : ');
//     $lbdetail = new label('อธิบาย : ');
//     $lbcomname = new label('คอมพิวเตอร์ : ');
//     $lbcomgroup = new label('กรุ๊ป : ');
//     $lbstatus = new label('สถานะ : ');
//     $lbtypetools = new label('ชนิดของอุปกรณ์ : ');
//     $txtaddress = new textfieldreadonly('ipzpo_address','','','');
//     $txtname = new textfield('ipzpo_user','','form-control css-require','','');
//     $txtnickname = new textfield('ipzpo_nickname','','form-control','','');
//     $txtcomname = new textfield('ipzpo_comname','','form-control','','');
//     $txtname->value = 'IP-[ว่าง]';
//     $txtcomgroup = new textfield('ipzpo_comgroup','','form-control','','');
//     $txtcomgroup->value = 'WorkGroup';
//     $txtdetail = new textfield('ipzpo_detail','','form-control','','');
//     $selectstatus = new SelectFromDB();
//     $selectstatus->name = 'status_status_id';
//     $selectstatus->lists = 'โปรดระบุ';
//     $selecttype = new SelectFromDB();
//     $selecttype->name = 'typearticle_typearticle_id';
//     $selecttype->lists = 'โปรดระบุ';
//     $inputfile = new inputFile('article_pathpic','form-control-file','');
//     
//     $button = new buttonok("ยืนยัน","","btn btn-success ipbotton","");
//     
//      
//     if(!empty($_GET['id'])){
// 	$id = $_GET['id'];
// 	$r = $db->findByPK2('ipzpo','subzoo','ipzpo_id',$id)->executeRow();
// 	$txtaddress->value = $r['ipzpo_address'];
// 	$txtname->value = $r['ipzpo_user'];
// 	$txtnickname->value = $r['ipzpo_nickname'];
// 	$txtcomname->value = $r['ipzpo_comname'];
// 	$txtcomgroup->value = $r['ipzpo_comgroup'];
// 	$txtdetail->value = $r['ipzpo_detail'];
// 	$selecttools->value = $r['typetools_typetools_id'];
// 	$selectstatus->value = $r['status_status_id'];
// 	$zoo = $r['subzoo_zoo_zoo_id'];
//     $subzoo = $r['subzoo_subzoo_id'];
// 	}
-->
<!-- // ?> -->
<head>
	<meta charset="utf-8">
    <title>forms</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
 	<div class="container">
    	<form>
            <h2>เพิ่มรายการ องค์ความรู้</h2>
            <hr></hr>
            	<div class="form-group row">
  					<label for="example-text-input" class="col-2 col-form-label">หัวข้อเอกสาร</label>
  						<div class="col-10">
    						<?php echo $selecttype->selectFromTB('typearticle','typearticle_id','typearticle_name',$r['typearticle_typearticle_id']) ?>
  						</div>
					</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">เนื้อหาข่าว</label>
 						<div class="col-10">
    						
    							<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
  						</div>
				</div>
				<div class="form-group row">
  					<label for="example-text-input" class="col-2 col-form-label">ชนิดไฟล์เอกสาร</label>
  						<div class="col-10">
    						<select class="form-control">
  								<option>ชนิดไฟล์เอกสาร</option>
                                <option>PDF</option>
                                <option>word</option>
                                <option>text</option>
                            </select>
  						</div>
				</div>
				<div class="form-group row">
  					<label for="example-text-input" class="col-2 col-form-label">วิดีโอ</label>
  						<div class="col-10">
    						<input class="form-control" type="วิดีโอ" id="example-text-input" placeholder="ใส่ลิงก์วิดีโอ">
  						</div>
				</div>
				<div class="form-group row">
  					<label for="custom-file-input" class="col-2 col-form-label">ภาพปกวิดีโอ</label>
  						<div class="col-10">
    						<div class="form-group">
    							<label for="InputFile"></label>
    								<?php echo $inputfile; ?>
  </div>
  						</div>
                </div>
                <div class="form-group row">
  					<label for="example-text-input" class="col-2 col-form-label">ชนิดไฟล์รูปภาพ</label>
  						<div class="col-10">
    						<select class="form-control">
  								<option>ชนิดไฟล์รูปภาพ</option>
                                <option>.jpg</option>
                                <option>.png</option>
                            </select>
  						</div>
				</div>
				<div class="form-group row">
  					<label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
  						<div class="col-10">
    						<input class="form-control" type="datetime-local" id="example-datetime-local-input">
  						</div>
				</div>
                <div class="form-group row">
  					<label for="example-text-input" class="col-2 col-form-label">เจ้าของผลงาน</label>
  						<div class="col-10">
    						<input class="form-control" type="เจ้าของผลงาน" id="example-text-input" placeholder="ใส่ชื่อเจ้าของผลงาน">
  						</div>
				</div>
                <div class="form-group row">
  					<label for="example-text-input" class="col-2 col-form-label">ผู้ลง</label>
  						<div class="col-10">
    						<input class="form-control" type="ผู้ลง" id="example-text-input" placeholder="กรุณาใส่ชื่อของคุณ">
  						</div>
				</div>
                 <button type="submit" class="btn btn-primary">Submit</button>
                </form>
    	</div><!----Div class="container"--->
<!-- <?php endif; ?> -->