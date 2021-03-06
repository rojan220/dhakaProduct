<?php

namespace App\Http\Requests\purchase;

use App\Models\Purchase;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PurchaseEditRequest extends FormRequest
{
    /**
     * Determine if the purchase is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        ];
    }
}
