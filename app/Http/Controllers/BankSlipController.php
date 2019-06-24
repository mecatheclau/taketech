<?php

namespace App\Http\Controllers;

use App\bankSlip;
use auth;
use DB;
use App\User;
use Illuminate\Http\Request;
class BankSlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
   /**
     * Display a student payment.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewslip()
    {
        //
        return view('admin/checkpayment');
    }
    public function search(Request $request)
    {
            
        $q = $request->input('q');
        $data = DB::table('bank_slips')
            ->select('bank_slips.*','users.*')
            ->join('users','users.id','=','bank_slips.student')
            ->where('bank_slips.student',$q)->orWhere('bank_slips.class',$q)->get();
        return view('admin/result',[
            'data' => $data,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $authId = auth()->id();
        $select = User::all()->where('id',$authId)->last();
        $status = $select->role;
        if($status == 2) {
            return view('admin/recordslip');
        }
        else {
            echo "you don't ve permission to access this file!";
        }
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
        $this->validate(request(),[
            'student'=>'required',
            'academy'=>'required'
        ]);
        $record = new bankSlip;

        $student = $request->input('student');
        $academy = $request->input('academy');
        $class = $request->input('class');
        $bank = $request->input('bank');
        $ref = $request->input('reference');
        $pdate = $request->input('pay_date');
        $tel = $request->input('telephone');
        $amount = $request->input('amount');

        if ($request->hasFile('hardcopy')) {
            $attachment = request()->file('hardcopy');
            $file = $attachment->getClientOriginalName();
            $imageurl = "images/".$file;
            $copy = move_uploaded_file($attachment, $imageurl);
            if ($copy) {
                $record->attachment = $file;
            }else {
                $record->attachment = "N/A";
            }
        }
        
        $record->student = $student;
        $record->academy = $academy;
        $record->class = $class;
        $record->bank = $bank;
        $record->pay_date = $pdate;
        $record->reference_no = $ref;
        $record->telephone = $tel;
        $record->amount = $amount;

        $save = $record->save();
        if ($save) {
            return redirect()->back()->with(['message' => 'recorded successfully']);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\bankSlip  $bankSlip
     * @return \Illuminate\Http\Response
     */
    public function show(bankSlip $bankSlip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\bankSlip  $bankSlip
     * @return \Illuminate\Http\Response
     */
    public function edit(bankSlip $bankSlip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\bankSlip  $bankSlip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bankSlip $bankSlip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\bankSlip  $bankSlip
     * @return \Illuminate\Http\Response
     */
    public function destroy(bankSlip $bankSlip)
    {
        //
    }
}
