<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Choice;
use App\Models\Criteria;
use App\Models\Product;
use App\Models\ProductAssigned;
use App\Models\ProductChoice;
use App\Models\ProductCriteria;
use CreateProductCriteriaTable;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class AssignController extends Controller
{
    //
    public function index(Request $request){

        if ($request->gender) {
            $gender = $request->gender;
            $criterias = Criteria::where('criteria_gender',$gender)->get();
        } else {

            $gender = 2;
            $criterias = Criteria::where('criteria_gender',2)->get();
        }

        return view('admin.criteria.assign', compact('criterias','gender'));
    }

    //Menu assign criteria => select the criteria to assign
    public function select_criteria(Request $request)
    {
        $criteriaSelected = Criteria::find($request->criteriaId);//to get the criteria selected with criteria id
        $gender = $criteriaSelected->criteria_gender; //get criteria selected gender
        $criterias = Criteria::where('criteria_gender',$gender)->where('id','<>',$request->criteriaId)->get();// get all criteria of gender checked
        $choices = Choice::where('criteria_id', $request->criteriaId)->get();// get all choices of criteria selected
        if($gender == 2){
            $allproducts = Product::where('productgender','female')->where('productmenu','menu_mainproduct')->get();
            $products = [];
            foreach ($allproducts as $product){
                $hasTaged = ProductAssigned::where('product_id',$product->id)->where('criteria_id',$criteriaSelected->id)->first();
                if(!$hasTaged){
                 $products[] = $product;
                 }
            }
        }
        if($gender == 1){
            $allproducts = Product::where('productgender','male')->where('productmenu','menu_mainproduct')->get();
            $products = [];

            foreach ($allproducts as $product){
                $hasTaged = ProductAssigned::where('product_id',$product->id)->where('criteria_id',$criteriaSelected->id)->first();
               if(!$hasTaged){
                $products[] = $product;
                }

            }
        }
        if ($choices == []){
            // return this message when the criteria selected don't have the choice
            Session::flash('warning', "No choices found for this criteria! Select another criteria.");
        }else{

            // return ('choices','criterias','criteriaSelected');

            return view('admin.criteria.assign', compact('choices','criterias','criteriaSelected','gender','products'));
        }

    }


    public function assign(Request $request)
    {
        $gender = $request->gender;
        $productId = $request->productid;
        $criteriaId = $request->criteriaId;
        $choiceAassignedIdValue = $request->choice_assigned_id_value;
        $criteriaSelected = Criteria::find($criteriaId);//to get the criteria selected with criteria id

        if(Product::find($productId)) {
            $productassigned = new ProductAssigned();
            $productassigned->product_id = $productId;
            $productassigned->criteria_id = $criteriaId;
            $productassigned->choice = $choiceAassignedIdValue;
            $productassigned->save();
            Session::flash('success', "choice assigned!");
            return back()->withInput();
        } else {

            Session::flash('danger', "Product  not found !");
        }
        // return redirect()->route('admin.criteria', ['gender' => $genderId]);

        if($gender == 2){
            // $products = Product::where('productgender','female')->where('choice_id', null)->get();
            $criterias = Criteria::where('criteria_gender',2)->get();
            $allproducts = Product::where('productgender','female')->where('productmenu','menu_mainproduct')->get();
            $products = [];
            foreach ($allproducts as $product){
                $hasTaged = ProductAssigned::where('product_id',$product->id)->where('criteria_id',$criteriaId)->first();
               if(!$hasTaged){
                $products[] = $product;
                }
            }
        }
        if($gender == 1){
            $criterias = Criteria::where('criteria_gender',1)->get();
            $allproducts = Product::where('productgender','male')->where('productmenu','menu_mainproduct')->get();
            $products = [];
            foreach ($allproducts as $product){
                $hasTaged = ProductAssigned::where('product_id',$product->id)->where('criteria_id',$criteriaId)->first();
               if(!$hasTaged){
                $products[] = $product;
                }
            }

        }

        return view('admin.criteria.assign', compact('criterias','gender','products'));

    }
    //
    // public function product_assigned(Request $request){

    //     if ($request->gender) {
    //         $genderId = $request->gender;
    //         if($genderId == 2){
    //             $criteria_gender = 'female';
    //         }
    //         if($genderId == 1){
    //             $criteria_gender = 'male';
    //         }
    //         $criterias = Criteria::where('criteria_gender',$criteria_gender)->get();
    //         $products = Product::where('productgender',$criteria_gender)->where('choice_id','<>', null)->get();
    //     } else {
    //         $genderId = 2;
    //         $criterias = Criteria::where('criteria_gender',2)->get();
    //         $products = Product::where('productgender','female')->where('choice_id','<>', null)->get();
    //     }
    //     return view('admin.criteria.assignproduct', [
    //         'products'=>$products,
    //         'gender' => $genderId
    //         ]);
    // }
}
