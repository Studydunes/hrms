<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Organization;
use App\Location;
use App\Structure;
class OrganizationController extends Controller
{
  public function create()
    {

        return view('hrms.organization.create');
    }
   public function store(Request $request)
    {

    		//print_r($request->all());die;
      // return $request->input('number_of_employees');

       Organization::create($request->all());
       echo "value insert successfully.";


    }

//=========locations create========================


  public function locationcreate()
    {

        return view('hrms.organization.locationcreate');
    }

  public function locationstore(Request $request)
    {
       
            //print_r($request->all());die;
      Location::create($request->all());
      echo "value insert successfully.";


    }
//=============locationAdd============

  public function location_add_create()
    {

        return view('hrms.organization.locationadd');
    }
  public function location_add_store(Request $request)
  {
    Location::create($request->all());
    echo "value insert successfully.";

  }
//==========location search==========

public function location_search(Request $request)
{
  
 
  $organizationName = $request->input('name');

  $city = $request->input('city');
  $country = $request->country;
  $errorMessage = "Sorry we couldn't find what you were looking for";

  $searchResult = Location::where([
    ['name',$organizationName],
    ['country',$country],
    ['city',$city],
    ])
    ->first();


    $arrayResult = array(
      'result' => $searchResult,
      'errorMessage'=>$errorMessage,
      'remark'=>''
      );
    // $arrayResult['code']=200;
    // $arrayResult['result'] = 
    // array_push($arrayResult,$searchResult,$errorMessage);
    // print_r($arrayResult);
    
    if($arrayResult){
        $arrayResult['remark']='Success';
       
        return view('hrms.partials.searchresult')->with('arrayResult',$arrayResult);  
    } else{
      $arrayResult['remark']='Fail';
       return view('hrms.partials.searchresult')->with('arrayResult',$arrayResult);
    }

 // exit;
//   $organizationname=$request->input('');
//   $city=$request->input('');
//   $country=$request->input('');
// $locations=locations::where(organizationname=>$name);
// 'city'=> $city;
// 'country'=> $country;
// if($locations){
  // return view('organization')with('data');
}

//==========structure=====================

  public function structurecreate()
    {
        $organizations = Structure::all();
      

        return view('hrms.organization.structure')->with('organizations',$organizations);
    }

  public function structurestore(Request $request)
    {
       
        Structure::create($request->all());
      echo "value insert successfully.";


    }



//============structure index===================================

public function structure_index()
{
  $organizations = Structure::all();


        return view('hrms.organization.structureindex');
    }

  public function structure_index_store(Request $request)
    {
       
        Structure::create($request->all());
      echo "value insert successfully.";


    }

}

