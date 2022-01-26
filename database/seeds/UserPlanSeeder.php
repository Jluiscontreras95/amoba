<?php

use Illuminate\Database\Seeder;

class UserPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $json = database_path('data/user_plans.json');
        $data = file_get_contents($json);

        foreach (json_decode($data)->user_plans as $row){

          DB::table('user_plans')->insert([

            'id' => $row->id,
        		'user_id' => $row->user_id,
        		'currency_id' => $row->currency_id,
        		'next_user_plan_id' => $row->next_user_plan_id,
        		'start_timestamp' => $row->start_timestamp,
        		'end_timestamp' => $row->end_timestamp,
        		'renewal_timestamp' => $row->renewal_timestamp,
        		'renewal_price' => $row->renewal_price,
        		'requires_invoice' => $row->requires_invoice,
        		'status' => $row->status,
        		'created' => $row->created,
        		'modified' => $row->modified,
        		'financiation' => $row->financiation,
        		'status_financiation' => $row->status_financiation,
        		'language' => $row->language,
        		'nif' => $row->nif,
        		'business_name' => $row->business_name,
        		'pending_payment' => $row->pending_payment,
        		'date_max_payment' => $row->date_max_payment,
        		'proxim_start_timestamp' => $row->proxim_start_timestamp,
        		'proxim_end_timestamp' => $row->proxim_end_timestamp,
        		'proxim_renewal_timestamp' => $row->proxim_renewal_timestamp,
        		'proxim_renewal_price' => $row->proxim_renewal_price,
        		'credits_return' => $row->credits_return,
        		'company_id' => $row->company_id,
        		'cancel_employee' => $row->cancel_employee,
        		'force_renovation' => $row->force_renovation,
        		'date_canceled' => $row->date_canceled,
        		'amount_confirm_canceled' => $row->amount_confirm_canceled,
        		'credit_confirm_canceled' => $row->credit_confirm_canceled,
        		'cost_center_id' => $row->cost_center_id



          ]);
        }
    }
}
