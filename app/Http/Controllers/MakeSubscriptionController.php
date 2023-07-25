<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemVariable;
use App\Models\SubscriptionPlan;

class MakeSubscriptionController extends Controller
{
	public function showSubscriptionPlan() {
		return view('makeSubscription.subscription');
	}
}
