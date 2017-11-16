<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <title>forms</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    
</head>
<body>
 	<div class="container">
    	<form>
            	<div class="form-group row">
  					<label for="example-text-input" class="col-2 col-form-label">หัวข้อเอกสาร</label>
  						<div class="col-10">
    						<select class="form-control" >
  								<option>หัวข้อเอกสาร</option>
                                <option>แผนยุธทศาสตร์</option>
                                <option>รายงานประจำปี</option>
                                <option>พระราชฎีกา</option>
                                <option>คอมพิวเตอร์</option>
                                <option>สัตว์</option>
                                <option>วิดีโอ</option>
							</select>
  						</div>
					</div>
				<div class="form-group row">
					<label for="example-text-input" class="col-2 col-form-label">เนื้อหาข่าว</label>
 						<div class="col-10">
    						<label for="exampleTextarea">ใส่รายละเอียด</label>
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
    							<label for="exampleInputFile"></label>
    								<input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
    									<small id="fileHelp" class="form-text text-muted">กรุณาเลือกรูปภาพ</small>
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
</body>
</html>
