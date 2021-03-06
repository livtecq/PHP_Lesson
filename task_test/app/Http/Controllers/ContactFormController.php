<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ContactForm;

// クエリビルダで使用
use Illuminate\Support\Facades\DB;

// 切り出した処理の使用
use App\Services\CheckFormData;

// カスタムバリデーションを読み込む
use App\Http\Requests\StoreContactForm;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 検索機能の追加
        $search = $request->input('search');

        // dd($request);


        // // クエリビルダ
        // $contacts = DB::table('contact_forms')
        // ->select('id', 'your_name', 'title', 'created_at')
        // ->orderBy('created_at', 'desc')
        // // ->get();
        // ->paginate(20); //ページネーションの設定

        // 検索フォーム用
        $query = DB::table('contact_forms');

        // もしキーワードがあったら
        if($search !== null) {
            // 全角スペースを半角に
            $search_split = mb_convert_kana($search, 's');

            // 空白で区切る
            $search_split2 = preg_split('/[\s]+/', $search_split,-1,PREG_SPLIT_NO_EMPTY);

            // 単語をループで回す
            foreach($search_split2 as $value){
                $query->where('your_name', 'like', '%' . $value . '%');
            }
        };

        $query->select('id', 'your_name', 'title', 'created_at');
        $query->orderBy('created_at', 'asc');
        $contacts = $query->paginate(20);


        //データベースの値をすべて取得 エロクワント ORマッパー
        // $contacts = ContactForm::all();

        // dd($contacts);
        
        return View('contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return View('contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    // カスタムバリデーションを読み込む為に書き換える
    public function store(StoreContactForm $request)
    
    // public function store(Request $request)
    {
        $contact = new ContactForm;

        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        $contact->save();

        return redirect('contact/index');

        // dd($your_name, $title);

        // すべてのデータを取得する
        // $input = $request->all();
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
        $contact = ContactForm::find($id);

        $gender = CheckFormData::checkGender($contact);
        $age = CheckFormData::checkAge($contact);
        

        // ファットコントローラー 行数が多く処理の流れを追うことが難しくなること。
        // 切り分ける app→新たにフォルダServicesを作成
        // if($contact->gender === 0){
        //     $gender = '男性';
        // }
        // if($contact->gender === 1){
        //     $gender = '女性';
        // }
        // if($contact->age === 0){
        //     $age = '～19歳';
        // }
        // if($contact->age === 1){
        //     $age = '20歳～29歳';
        // }
        // if($contact->age === 2){
        //     $age = '30歳～39歳';
        // }
        // if($contact->age === 3){
        //     $age = '40歳～49歳';
        // }
        // if($contact->age === 4){
        //     $age = '50歳～59歳';
        // }
        // if($contact->age === 5){
        //     $age = '60歳以上';
        // }


        // dd($contact);

        // compactは変数を複数渡すことが出来るので便利
        return view('contact.show', 
        compact('contact', 'gender', 'age'));
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
        $contact = ContactForm::find($id);

        return view('contact.edit', compact('contact'));
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
        $contact = ContactForm::find($id);

        // アップデータでは新規インスタンスは作成しない
        // $contact = new ContactForm;

        $contact->your_name = $request->input('your_name');
        $contact->title = $request->input('title');
        $contact->email = $request->input('email');
        $contact->url = $request->input('url');
        $contact->gender = $request->input('gender');
        $contact->age = $request->input('age');
        $contact->contact = $request->input('contact');

        $contact->save();

        return redirect('contact/index');



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

        $contact = ContactForm::find($id);
        $contact->delete();

        return redirect('contact/index');

    }
}