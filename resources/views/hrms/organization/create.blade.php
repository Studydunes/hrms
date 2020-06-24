
@extends('hrms.layouts.base')
@section('content')

<!Doctype html>
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.box-style{
	padding-left: 76px;
}
.txt-style1{
	margin-top: 15px;
}
 .txt-style2{
      padding-top: 15px !important;
 }
.txt-box-size{
	    margin-top: 28px;
}
.form-style{
  margin-right: 166px;
}
.box-style1{
    margin-left: -20px;
    }
    .box-style2{
     height: 90px !important;
  }
  .btn-style{
        margin-left: 18px;
            width: 76px;
  }
  .box-style3{
   margin-left: -10px;
  }
   .box1-style{
          width: 292px;
    margin-left: -18px;
    height: 35px;
    background-color: #fafafa;
    border-color: lightgrey;
 }
 .txt2-style{
      padding-right: 26px;
 }
 .require-style{
      margin-bottom: -20px;
    margin-left: -10px;
        color: red;
 }
</style>
</head>
<body>
<div class="container">
	<p>Genral Information</p>
 <table class="table table-striped">
   <tbody>
    <tr>
    <td colspan="1">
    	<form action="{{url('/store')}}" name="myForm" method="post" class="well form-horizontal form-style" onsubmit="return(validate());">
    {{ csrf_field() }}
   
 <fieldset>
    <div class="row">
      <div class="col-md-6">
  <div class="form-group">
    
    <label class="col-md-4 control-label txt-style1">Organization Name</label>
     <div class="col-md-8 inputGroupContainer">
 <div class="input-group"><span class="box-style"><i class="">
 </i></span>
 <input id="" name="name" placeholder="" class="form-control" required="true" value="" type="text">
</div>
  </div>
   </div>
   <div class="form-group">
    <label class="col-md-4 control-label txt-style1 ">Number Of Employees
    </label>
     <div class="col-md-8 txt-box-size">
    <input class="form-control" name="number_of_employees" placeholder="" type="text"> 
  </div>
   </div>
 </div>
   <div class="col-md-6">
  <div class="form-group">
   <label class="col-md-4 control-label txt-style1">Tax Id</label>
   <div class="col-md-8 inputGroupContainer">
  <div class="input-group"><span class="box-style"><i class=""></i></span>
  	<input id="" name="tax_id" placeholder="" class="form-control" required="true" value="" type="text">
  </div>
    </div>
    </div>
     <div class="form-group">
    <label class="col-md-4 control-label txt-style1">Registration Number</label>
  <div class="col-md-8 inputGroupContainer">
   <div class="input-group"><span class="box-style"><i class=""></i></span>
   	<input id="" name="registration_number" placeholder="" class="form-control" required="true" value="" type="text">
   </div>
     </div>
    </div>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
     <div class="form-group">
    <label class="col-md-4 control-label txt-style1">Phone</label>
   <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
  	<span class="box-style">
  		<i class=""></i>
  	</span>
  	<input id="" name="phone" placeholder="" class="form-control" required="true" value="" type="text"></div>
     </div>
      </div>
     <div class="form-group">
     <label class="col-md-4 control-label txt-style1">Address Street1</label>
    <div class="col-md-8 inputGroupContainer">
 <div class="input-group"><span class="box-style">
 	<i class="">
    </i></span><input id="" name="address_sheet1" placeholder="" class="form-control" required="true" value="" type="text"></div>
    </div>
  </div>
</div>
<div class="col-md-6">
   <div class="form-group">
      <label class="col-md-4 control-label txt-style1">ZIP/Postal Code</label>
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group"><span class="box-style">
    	<i class=""></i></span>
    	<input id="" name="postal_code" placeholder="" class="form-control" required="true" value="" type="text">
    </div>
 </div>
  </div>
    <div class="form-group">
    	<label class="col-md-4 control-label txt-style1">Fax</label>
     <div class="col-md-8 inputGroupContainer">
    <div class="input-group"><span class="box-style">
      <i class=""></i></span>
      <input id="" name="fax" placeholder="" class="form-control" required="true" value="" type="text">
    </div>
   </div>
  </div>
</div>
<div class="row">
  <div class="col-md-6">
 
   <label class="col-md-4 control-label txt-style1">City</label>
  <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
<span class="box-style">
  <i class=""></i>
  </span>
 <input id="" name="city" placeholder="" class="form-control" required="true" value="" type="text"></div>
    </div>
  </div>
   <div class="col-md-6">
  <div class="form-group">
    <label class="col-md-4 control-label txt-style1">Address Street2
    </label>
    <div class="col-md-8 inputGroupContainer">
    <div class="input-group"><span class="box-style">
    	<i class=""></i></span>
   <input id="" name="address_sheet2" placeholder="" class="form-control box-style3" required="true" value="" type="text">
</div>
 </div>
 </div>
</div>
<div class="col-md-6">
 <div class="form-group">
  <label class="col-md-4 control-label txt-style1">Email</label>
    <div class="col-md-8 inputGroupContainer">
     <div class="input-group"><span class="box-style">
     	<i class=""></i></span><input id="" name="email" placeholder="" class="form-control" required="true" value="" type="text"></div>
      </div>
   </div>
   
   <div class="form-group">
   <label class="col-md-4 control-label txt-style1  txt-style2">Notes</label>
   <div class="col-md-8 inputGroupContainer">
        <textarea id="" name="note" class="form-control box-style2" required></textarea>
<label for="message"></label>
    
 </div>
   </div>
 </div>
 <div class="row">
  <div class="col-md-6">
    <div class="form-group">
    <label class="col-md-4 control-label txt-style1 box-style1">State/Province</label>
   <div class="col-md-8 inputGroupContainer">
    <div class="input-group"><span class="box-style">
    	<i class=""></i>
    </span>
    	<input id="" name="state" placeholder="" class="form-control" required="true" value="" type="text">
    </div>
    </div>
    </div>
  <div class="form-group">
   <label class="col-md-4 control-label txt-style1 txt2-style">Country</label>
    <div class="col-md-8 inputGroupContainer">
   <div class="input-group">
     <span class="box-style" style="max-width: 100%;">
     	<i class=""></i>
     </span>`
    <select class="from-control1 box1-style">
     <option>India</option>
      <option>Switzerland</option>
       <option>Dubai</option>
        <option>Newyork</option>
         <option>Paris</option>
    </select>
  </div>
  </div>
   </div>
  </fieldset>
   <div class="required-icon require-style">
                <div class="text">*</div>
            </div>
    Required Field
  <div class="row txt-style3">
    <button class="btn btn-success btn-style">Save</button>
  </div>
   </form>
    </td>
  </td>
  </tr>
   </tbody>
    </table>
    </div>
    </body>
    </html>
    @endsection