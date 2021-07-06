<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\support\Facades\DB;

class ProductController extends Controller
{
    //
    function index(){
       $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');

        }else
        {
            return redirect('/login');
        }
       
    }
    public function search(Request $req){
        //return $req->input();
        //if($req->has('q')){
           // $q=$req->q;
           // $result=Product::where('name','like','%'.$q.'%')->get();
           // return response()->json(['data'=>$result]);
      //  }else{
           // $data=Product::where('name','like','%'.$req->input('query').'%')->get();
            //return view('search',['products'=>$data]);
       // }
        $data=Product::where('name','like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
    static function cartItem(){
        $userId=Session::get('user')['id']; 
        return Cart::where('user_id',$userId)->count();
    }
    function cartList(Request $req){
        if($req->session()->has('user'))
        {
        $userId=Session::get('user')['id'];
        $products=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cart_list',['products'=>$products]);
    }else
    {
        return redirect('/login');
    }

    }
    function removeCart($id){
        Cart::destroy($id);
        return redirect('cart_list');
    }
    function orderNow(Request $req){
        if($req->session()->has('user'))
        {
        $userId=Session::get('user')['id'];
         $total=DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)

        ->sum('products.price');

        return view('ordernow',['total'=>$total]);
    }else
    {
        return redirect('/login');
    }
    }
    function place_order(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->status="pending";
             $order->payment_method=$req->payment;
             $order->payment_status="pending";
             $order->address=sprintf('%s-%s-%s-%s',
             $req->address1,
             $req->address2,
             $req->address3,
             $req->address4);
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
          $req->input();
         return redirect('/');
    }
    function myOrders(Request $req)
    {
        if($req->session()->has('user'))
        {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get();
 
         return view('myorders',['orders'=>$orders]);
         
        }else
        {
            return redirect('/login');
        }
    }
    
    function autocomplete(Request $request)
    {
     if($request->get('query'))
     {
      $query = $request->get('query');
      $data = Product::where('name','like','%'.$req->input('query').'%')->get();
      $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
      foreach($data as $row)
      {
       $output .= '
       <li><a href="#">'.$row->country_name.'</a></li>
       ';
      }
      $output .= '</ul>';
      echo $output;
     }
    }


}
