<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserMainController extends Controller
{
   public function index(){
       return view('UI.index');
   }
   
   public function about(){
       return view('UI.about');
   }
   
   public function contact(){
      return view('UI.contact'); 
   }
   
   public function portfolioMain(){
       return view('UI.portfolio');
   }
   
   public function portfolioView(){
       return view('');
   }
   
   public function blogMain(){
       return view('UI.blog');
   }
   
   public function blogView(){
       return view('UI.blogView');
   }
   
   public function serviceMain(){
      return view('UI.service');
   }
   
   public function serviceView(){
       return view('');
   }
   
   public function servicePrice(){
       return view('UI.servicePrice');
   }
}
