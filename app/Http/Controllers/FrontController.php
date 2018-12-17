<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
  /*=============
  /This Controller Handiling All Front End Pages\
  /In This Controller All Models And Tabels Will Inclode Here Every Methoud Will Redirect For Page \
  Ytt Law Project Using Eloquent ORM Class Not DB
 
  ===============*/


  public function AboutUs()
  {
    // This Method Will Redirect To About-Us Page And Will Handil The Page Data
    return view('AboutUs');
  }


}
