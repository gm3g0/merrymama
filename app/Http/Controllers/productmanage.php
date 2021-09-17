<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;

class productmanage extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = products::all();
        return view('productmanage.edit', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function productmanage()
    {
        //
        ini_set("display_errors", "On");

        $Pname = $_POST['Pname'];
        echo $Pname;
        $price = $_POST['price'];
        echo $price;
        $savetype = $_POST['day'];
        $savetype = implode('、', $savetype);
        echo $savetype;
        $introduction = $_POST['introduction'];
        $pic = $_POST['pic'];
        echo $pic;
        require_once "../method/connect.php";
        $search = products::where('Pname', '=', $Pname)->pluck('Pname');

        if ($Pname == '' || $price == '' || $savetype == '' || $introduction == '' || $pic == '') {
            return back()->with('notice', '輸入資料不完全！');
        } else {
            if ($search == '["' . $Pname . '"]') {
                return back()->with('notice', '已有相同品項！');
            } else {
                require_once "../method/connect.php";
                $insert = $connect->prepare("INSERT INTO product(Pname,price,day,introduction,pic)
                VALUES(?,?,?,?,?)");
                $insert->execute(array($Pname, $price, $savetype, $introduction, $pic));
                return back()->with('notice', '新增成功！');
            }
        }
        return back()->with('notice', '修改成功!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
