<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionAnswer;

class edit_QA extends Controller
{
   
    public function index()
    {
        $allqas = QuestionAnswer::all();
        return view('edit_QA.index' , [ 'allqas' => $allqas]);
    }

    public function edit_QA(Request $request)
    {
        $questions = $_POST['questions'];
        $answers = $_POST['answers'];
        $checkqa = QuestionAnswer::all();
        $cnt = 0 ;  //用於計算有無被更動過
        for($i = 0 ; $i < count($checkqa) ; $i++){
            if($checkqa[$i]->question == $questions[$i]){
                //沒被修改不做任何事
            }else { 
                $cnt += 1; //被修改 > 計數器+1
                $saveqa = QuestionAnswer::where('question',$checkqa[$i]->question)->first();
                $saveqa->question = $questions[$i] ;
                $saveqa->save();
            }
            
            if($checkqa[$i]->answer == $answers[$i]){
                //沒被修改不做任何事
            }else { 
                $cnt += 1;  //被修改 > 計數器+1
                $saveqa = QuestionAnswer::where('answer',$checkqa[$i]->answer)->first();
                $saveqa->answer = $answers[$i];
                $saveqa->save();
            }
        }
        if($cnt == 0){  //計數器 = 0 表示沒被改過 ; 計數器 > 0 表示有被改過
            return back()->with('notice', '未修改任何欄位！');
        }else {
            return back()->with('notice', '修改成功！');
        }
    }

    public function new_QA(Request $request)
    {

        $question = $_POST['question'];
        $answer = $_POST['answer'];
        if($question == '' || $answer == ''){
            return back()->with('notice',"問題或回答欄位不可空白！");
        }else {
            $saveqa = new QuestionAnswer;
            $saveqa->question = "Q：" . $question;
            $saveqa->answer = "A：" . $answer ;
            $saveqa->save();
            return back()->with('notice',"新增成功！");
        }
    }

}
