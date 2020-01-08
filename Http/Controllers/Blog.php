<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\BlogCategory;
use App\BlogPostedCategory;

class Blog extends Controller {

    public function category() {
        return view('Admin.category');
    }

    public function getAllCategory() {
        return BlogCategory::all();
    }

    public function categoryStore(Request $request) {
        BlogCategory::create($request->all());
        return ['success' => true, 'message' => 'category added sucessfully'];
    }

    public function categoryUpdate(Request $request) {
        if ($request->has('id')) {
            BlogCategory::find($request->input('id'))->update($request->all());
            return ['success' => true, 'message' => 'update  sucessfully'];
        }
        return ['success' => true, 'message' => 'update  sucessfully'];
    }

    public function categoryDelete(Request $request) {
        if ($request->has('id')) {
            BlogCategory::find($request->input('id'))->delete();
            return ['success' => true, 'message' => 'Category Delete sucessfully'];
        }
    }

    public function blogPostedCategoryStore(Request $request) {
        /*foreach ($data as $category) {
            BlogPostedCategory::create([
                'CategoryId' => $$category['CategoryId'],
                'BlogId' => $category['BlogId']
            ]);
        }*/
        //$products = json_decode($request->TempraryCategoryList() , true);
        BlogPostedCategory::create($request->all());
        return ['success' => true, 'message' => "hello world"];
    }

}
