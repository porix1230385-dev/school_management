<?php

namespace App\Repositories;

use App\helpers\Qs;
use App\Models\Inscrire;
// use App\Models\Payment;
// use App\Models\PaymentRecord;
// use App\Models\Receipt;

class PaymentRepo
{

    /** Inscriptions**/
    // public function all()
    // {
    //     return Payment::all();
    // }

    // public function getPayment($data)
    // {
    //     return Payment::where($data)->with('my_class');
    // }

    // public function getGeneralPayment($data)
    // {
    //     return Payment::whereNull('my_class_id')->where($data)->with('my_class');
    // }

    // public function getActivePayments()
    // {
    //     return $this->getPayment(['year' => Qs::getCurrentSession()]);
    // }

    // public function getPaymentYears()
    // {
    //     return Payment::select('year')->distinct()->get();
    // }

    // public function find($id)
    // {
    //     return Payment::find($id);
    // }

    public function create($stu_id,$class_id,$mtn,$year_id)
    {
        return Inscrire::create([
            'date_inscription'=> date('Y-m-d H:i:s'),
            'montant_inscription'=> $mtn,
            'eleve_id'=>$stu_id,
            'annee_scolaire_id'=>$year_id,
            'classe_id'=>$class_id,
            'created_at'=>now()->format('Y-m-d H:i:s'),
            'updated_at'=>now()->format('Y-m-d H:i:s')
        ]);
    }

    // public function update($id, $data)
    // {
    //     return Payment::find($id)->update($data);
    // }

    // public function delete($id)
    // {
    //     return Payment::destroy($id);
    // }

    // /************** PAYMENT RECORDS ***************/

    // public function findMyPR($st_id, $pay_id)
    // {
    //     return $this->getRecord(['student_id' => $st_id, 'payment_id' => $pay_id]);
    // }

    // public function getAllMyPR($st_id, $year = NULL)
    // {
    //     return $year ? $this->getRecord(['student_id' => $st_id, 'year' => $year]) : $this->getRecord(['student_id' => $st_id]);
    // }

    // public function getRecord($data, $order = 'year', $dir = 'desc')
    // {
    //     return PaymentRecord::orderBy($order, $dir)->where($data)->with('payment');
    // }

    // public function createRecord($data)
    // {
    //     return PaymentRecord::firstOrCreate($data);
    // }

    // public function findRecord($id)
    // {
    //     return PaymentRecord::findOrFail($id);
    // }

    // public function updateRecord($id, $data)
    // {
    //     return PaymentRecord::find($id)->update($data);
    // }

    // /************** PAYMENT RECEIPTS ***************/

    // public function createReceipt($data)
    // {
    //     return Receipt::Create($data);
    // }

    // public function deleteReceipts($data)
    // {
    //     return Receipt::where($data)->delete();
    // }

    // public function getReceipt($data)
    // {
    //     return Receipt::where($data);
    // }

    // public function getAllMyReceipts($pr_id)
    // {
    //     return $this->getRecord(['pr_id' => $pr_id])->get();
    // }

}
