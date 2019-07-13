<?php

namespace App\Observers;

use App\Company;
use Mail;

class CompanyObserver
{
    /**
     * Handle the company "created" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function created(Company $company)
    {
        $name = $company->name;
        Mail::raw("$name is added!", function ($message){
            $message->subject('New company is added!');
            $message->to('admin@admin.com');
        });
    }

    /**
     * Handle the company "updated" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function updated(Company $company)
    {
        //
    }

    /**
     * Handle the company "deleted" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function deleted(Company $company)
    {
        //
    }

    /**
     * Handle the company "restored" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function restored(Company $company)
    {
        //
    }

    /**
     * Handle the company "force deleted" event.
     *
     * @param  \App\Company  $company
     * @return void
     */
    public function forceDeleted(Company $company)
    {
        //
    }
}
