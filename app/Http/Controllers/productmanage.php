<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\news;

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
    public function productmanage(Request $request)
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
        echo $introduction;
        //$pic = $_POST['pic'];
    
        //if (isset($_FILES["file"])){
            //echo $_FILES["file"]["name"];
        //}else {
            //echo "失敗";
        //}
        //if($request->hasFile('file')){
            //echo '有東西';
        //}else {
            //echo "沒東西";
        //}
        //echo $_FILES[$pic]["name"];
        require_once "../method/connect.php";
        /*
        if ($Pname == '' || $price == '' || $savetype == '' || $introduction == '' || $files == '') {
            return back()->with('notice', '輸入資料不完全！');
        } else {
            if ($search == '["' . $Pname . '"]') {
                return back()->with('notice', '已有相同品項！');
            } else {
                require_once "../method/connect.php";
                $cnt = 0;
                for ($i = 0; $i < 1; $i++) {
                    if (!empty($_FILES['files']['name'][$i])) {
                        $cnt = $cnt + 1;
                    }
                }
                if ($cnt != 0) {
                    $files = $request->file('files');
                    if ($request->hasFile('files')) {
                        foreach ($files as $file) {
                            $path = $file->store('public/news_images');
                            $file = [
                                'news_pic'    => $path,
                                'news_time' => $now
                            ];
                            $file = news::create($file);
                        }
                    }
                    $insert = $connect->prepare("INSERT INTO product(Pname,price,day,introduction)
                    VALUES(?,?,?,?)");
                    $insert->execute(array($Pname, $price, $savetype, $introduction));
                    echo '新增成功！';
                    return back()->with('notice', '修改成功!');
                } else {
                    return back()->with('notice', '未選擇檔案！');
                }
               
                return back()->with('notice', '新增成功！');
            }
        }
        return back()->with('notice', '修改成功!');*/
    }
    public function new_product(Request $request)
    {
        $PName = $_POST['PName'];
        $price = $_POST['price'];
        $type = $_POST['day'];
        $type = implode('、', $type);  //對checkbox做整理
        $introduction = $_POST['introduction'];
        $checkpname = products::where('PName' , $PName)->first();  //查資料表內相同的名稱產品
        if( request()->hasFile('file') ){  //照片處理
            $file = $request->file('file');
            $path = $file->store('public/product_images');   //只能放在public下

            if($checkpname != '' ){       //查看有無相同名稱產品
                return back()->with('notice', '已有相同名稱品項！');
            }else{           //沒有的話有兩種可能：1.名稱空白 2.新產品

                if($PName == '' || $price == '' || $introduction == ''){  //此為1.名稱空白，順便檢查其他欄位有無空白
                    return back()->with('notice', '填寫資訊不全！');
                }else{      //此為2.新產品且欄位都有填寫
                    $savedata = new products;
                    $savedata->PName = $PName;
                    $savedata->price = $price;
                    $savedata->type = $type;
                    $savedata->introduction = $introduction;
                    $path = str_replace('public/','',$path);   //存入資料庫前對路徑做處理
                    $savedata->pic = $path;
                    $savedata->save();
                    return back()->with('notice', '新增成功！');
                }
                
            }
            
        }else{
            return back()->with('notice', '請放置圖片！');
        }

    }
    public function edit_product()
    {
        $deletPName = $_POST['checkbox'];
        foreach($deletPName as $PName){
            $delet = products::where('PName' , $PName)->first();
            $delet->status = "0";
            $delet->save();
        }
        
        return back()->with('notice', '已刪除所選商品！');;
    }
    public function productedit(){
        $products = products::all();
        return view('productmanage.productedit', ['products' => $products]);
 
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
