
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
 .txt2-style{
         margin-top: -5px;
    padding-right: 2px;
 }
 .txt-style1{
   margin-top: -3px;
       padding-right: 15px;
 }
 .txt-style2{
      margin-top: -8px;
 }
 .box1-style{
      width: 161px;
    margin-left: -17px;
    height: 30px;
    background-color: #fafafa;
    border-color: lightgrey;
 }
 .box2-style{
      height: 28px;
    width: 150px;
    margin-left: -13px;
 }
 .box3-style{
      width: 198px;
 }
  .btn-style{
      
            width: 76px;
  }
  .table-style{
    margin-top: 15px;
  }
 .backclr-style{
   background-color: #DE8700 !important;
 }
</style>
 </head>
   <body>
    <div class="container">
	   <p>Locations</p>
     <table class="table table-striped">
     <tbody>
    <tr>
    <td colspan="1">
    	<form action="{{url('locationsearch')}}" id="searchForm" name="myForm" method="post" class="well form-horizontal form-style" onsubmit="return(validate());">
    {{ csrf_field() }}
   
 <fieldset>
    <div class="row">
      <div class="col-md-4">
  <div class="form-group">
    <label class="txt-style2">Organization Name</label>
     <div class="inputGroupContainer">
 <div class="input-group"><span class="box-style"><i class="">
 </i></span>
 <input id="" name="name" placeholder="" class="form-control" required="true" value="" type="text">
</div>
  </div>
   </div>
 </div>
     <div class="col-md-3">
   <div class="form-group">
    <label class="txt-style1 ">City
    </label>
     <div class="inputGroupContainer">
    <input id="" name="city" placeholder="" class="form-control box3-style" required="true" value="" type="text">
  </div>
   </div>
 </div>
   <div class="col-md-3">
  <div class="form-group">
   <label class="txt2-style">Country</label>
    <div class="inputGroupContainer">
   <div class="input-groupContainer">
    <span class="box-style" style="max-width: 100%;">
      <i class=""></i>
    </span>`
    <select class="from-control box1-style" name="country">
       <option Value='India'>India</option>
       <option Value='Switzerland'>Switzerland</option>
       <option Value='Dubai'>Dubai</option>
       <option Value='Newyork'>Newyork</option>
       <option Value='England'>England</option>
    </select>
  </div>
  </div>
  </div>
</div>
 </div>
<div class="row">
    <button class="btn btn-success btn-style" type="button" onclick="search_click()">Search</button>
      <button class="btn btn-style">Reset</button>
  </div>
   </form>
    </td>
  </td>
  </tr>
   </tbody>
    </table>
    </div>
    <div class="container">
<div class="row">
 <table class="table table-striped">
   <tbody>
    <tr>
    <td colspan="1">
    <a class="btn btn-success btn-style"  href="/organization/locationadd">
    Add</a>&nbsp;
      <button class="btn btn-danger btn-style">Delete</button>
  </div>
<div class="row">
 <table class="table table-striped table-style">
   <tbody>
    <tr>
    <th class="backclr-style">
      Name
   </th>
      <th class="backclr-style">
     City
   </th>
       <th class="backclr-style">
     Country
   </th>
       <th class="backclr-style">
     Phone
   </th>
   
  </tr>
  </tbody>
    <tbody id="search_result">

    </tbody>

   </table>
   
    </div>
     <script>
    function search_click(){
    
      var url = $('#searchForm').attr('action');
      $.ajax({

          url: url,
          method: 'POST',
          data: $('#searchForm').serialize(),
          success: function(response){
              $('#search_result').html(response);
          }
      });
      
  }

    </script>
         </body>
           </html>
               @endsection