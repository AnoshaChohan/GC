<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SystemVariable;
use App\Models\SubscriptionPlan;

// TODO authorize admin to perform these actions
class ManageSystemVariableController extends Controller
{
	/**
     * Display the specified resource.
     */
    public function showSystemVariables()
    {
        $variables = SystemVariable::all();
		$subscriptionPlans = SubscriptionPlan::all();
        return response(view('manageSystemVariable.showSystemVariables', ['variables' => $variables, 'subscriptionPlans' => $subscriptionPlans]));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editSystemVariable($id)
    {
		$variable = SystemVariable::findOrFail($id);
        return response(view('manageSystemVariable.editSystemVariable', ['variable' => $variable]));
    }

	public function editSubscriptionPlan($id) {
		$subscriptionPlan = SubscriptionPlan::findOrFail($id);
		return response(view('manageSystemVariable.editSubscriptionPlan', ['subscriptionPlan' => $subscriptionPlan]));
	}

    /**
     * Update the specified resource in storage.
     */
    public function updateSystemVariable(Request $request)
    {
		$variable = SystemVariable::find($request->$id); // hidden input in the form
		$variable->name = $request->name;
		$variable->description = $request->description;
		$variable->value = $request->value;
		$variable->save();

		return $this->showSystemVariables();
    }

	/**
     * Update the specified resource in storage.
     */
    public function updateSubscriptionPlan(Request $request)
    {
		$subscriptionPlan = SubscriptionPlan::find($request->$id); // hidden input in the form
		$subscriptionPlan->name = $request->name;
		$subscriptionPlan->description = $request->description;
		$subscriptionPlan->price = $request->price;
		$subscriptionPlan->duration = $request->duration;
		$subscriptionPlan->save();

		return $this->showSystemVariables();
    }

	/**
     * Delete the specified resource in storage.
     */
    public function deleteSubscriptionPlan($id)
    {
		SubscriptionPlan::findOrFail($id)->delete;
		return $this->showSystemVariables();
    }
}
