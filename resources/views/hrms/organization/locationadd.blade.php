
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
  .btn-style{
        margin-left: 18px;
            width: 80px;
  }
   .txt-style2{
      padding-top: 20px !important;
 }
 .box-style{
        height: 100px !important;
    width: 325px !important;;
 }
 .box1-style{
      width: 220px;
    height: 35px;
    background-color: #fafafa;
    border-color: lightgrey;
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
<table class="table table-striped">
  <tbody>
 <tr>
 <td colspan="1">
  <form action="{{url('/locationadd')}}" name="mylocationForm" method="post" class="well form-horizontal form-style" onsubmit="return(validate());">
    {{ csrf_field() }}
   

   <fieldset>
   <div class="form-group">
<label class="col-md-4 control-label">Name</label>
   <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
      <input id="" name="name" placeholder="" class="form-control" required="true" value="" type="text">
    </div>
 </div>
   </div>
 <div class="form-group">
  <label class="col-md-4 control-label">Country</label>
 <div class="col-md-8 inputGroupContainer">
   <div class="input-group">
   <select class="from-control1 box1-style" name="country">
   <option>India</option>
    <option>Newyork</option>
     <option>London</option>
      <option>Switzerland</option>
   </select>
   </div>
   </div>
 </div>
 <div class="form-group">
   <label class="col-md-4 control-label">State/Province</label>
 <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
      <input id="" name="state" placeholder="" class="form-control" required="true" value="" type="text"></div>
  </div>
    </div>
  <div class="form-group">
 <label class="col-md-4 control-label">City</label>
  <div class="col-md-8 inputGroupContainer">
  <div class="input-group">
<input id="" name="city" placeholder="" class="form-control" required="true" value="" type="text"></div>
</div>
 </div>
 <div class="form-group">
   <label class="col-md-4 control-label">Address</label>
     <div class="col-md-8 inputGroupContainer">
     <div class="input-group">
 <input id="" name="address" placeholder="" class="form-control" required="true" value="" type="text"></div>
   </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label">Postal Code/ZIP</label>
          <div class="col-md-8 inputGroupContainer">
          <div class="input-group">
     <input id="" name="postal_code" placeholder="" class="form-control" required="true" value="" type="text"></div>
       </div>
     </div>
 <div class="form-group">
   <label class="col-md-4 control-label">Phone</label>
 <div class="col-md-8 inputGroupContainer">
   <div class="input-group">
    <input id="" name="phone" placeholder="" class="form-control" required="true" value="" type="text"></div>
    </div>
  </div>
  <div class="form-group">
      <label class="col-md-4 control-label txt-style1">Fax</label>
     <div class="col-md-8 inputGroupContainer">
    <div class="input-group">
      <input id="" name="fax" placeholder="" class="form-control" required="true" value="" type="text">
    </div>
   </div>
  </div>
<div class="form-group">
   <label class="col-md-4 control-label txt-style2">Notes</label>
   <div class="col-md-8 inputGroupContainer">
        <textarea id="" name="notes" class="form-control box-style" required></textarea>
<label for="message"></label>
    
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
   </tr>
  </tbody>
   </table>
    </div>
    </body>
    </html>
    @endsection