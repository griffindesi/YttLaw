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
  public function Kornar_Toygar()
  {
    return view('Kornar_Toygar');

  }
  public function Raed_Abu_Alhaijaa()
  {
    return view('Raed_Abu_Alhaijaa');

  }
  public function Melike_Ünlüsü()
  {
    return view('Melike_Ünlüsü');

  }
  public function Serap_Duman()
  {
    return view('Serap_Duman');

  }
  public function single_news()
  {
    return view('single_news');

  }
  public function single_practice()
  {
    return view('single_practice');

  }
  public function Attorney_Mert_Yalçın()
  {
    return view('Attorney_Mert_Yalçın');

  }
  public function Attorney_Kortan_Toygar()
  {
    return view('Attorney_Kortan_Toygar');

  }
  public function Attorney_Mert_Karayol()
  {
    return view('Attorney_Mert_Karayol');

  }
  public function single_vacancy()
  {
    return view('single_vacancy');

  }


}
