
@extends('hrms.layouts.base')
@section('content')

<!Doctype html>
<html>
	<head>
		<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
.box-style{
	    width: 289px;
    height: 91px;

}
.form1-style{
    margin-top: 100px;
    margin-left: 0px;
    border-color: transparent;
}
 .btn-style{
        margin-left: 102px !important;
            width: 80px;
             margin-left: 40px;
  }
  .txt-style{
  	 margin-left: 167px;
  }
  .txt1-style{
        padding-left: 78px;
  }
   .require-style{
    margin-bottom: -22px;
    margin-left: 64px;
        color: red;
 }
 .text-style{
      margin-left: 74px;
 }
</style>
</head>
    <body>
      <div class="container">
    <form action="{{url('/structurestore')}}" name="mylocationForm" method="post" class="well form-horizontal form-style form1-style" onsubmit="return(validate());">
    {{ csrf_field() }}
    <fieldset>
      <div class="control-group">
    <label class="col-md-4 control-label">Company Name</label>
     <div class="col-md-8 inputGroupContainer">
   <div class="input-group">
   <select class="from-control1">
   @foreach($organizations as $organization)
      <option value="{{$organization->name}}" selected="<?php if($organization->id == 1){
          echo "selected";
      }else{
        echo null;
      }?>"
      >
      {{$organization->name}}
</option>
 @endforeach
 </select>
 </div>
 </div>
 </div>
     <div class="control-group">
<!-- Username -->
     <label class="control-label"  for="username">Unit Id</label>
      <div class="controls">
        <input type="text" id="username" name="unit_id" placeholder="" class="input-xlarge">
 </div>
 </div>
         <div class="control-group">
  <!-- Password-->
         <label class="control-label" for="name">Name</label>
          <div class="controls">
          <input type="" id="name" name="name" placeholder="" class="input-xlarge">
</div>
</div>
       <div class="control-group">
  <!-- Password-->
        <label class="control-label" for="password">Description</label>
         <div class="controls">
          <textarea rows="3" id="description" name="description" class="input-block-level box-style" placeholder=""></textarea>
 </div>
  </div>
         <p class="txt1-style">This unit will be added under Soarlogic Company(Pvt.Ltd)</p>
 </fieldset>
            <div class="required-icon require-style">
             <div class="text">*</div>
 </div>
            <div class="text-style">
               Required Field
 </div>
        <div class="row txt-style3">
       <button class="btn btn-success btn-style">Save</button>
</div>
</form>
</form>
</div>
</div>
</div>
 </body>
 </html>
 @endsection