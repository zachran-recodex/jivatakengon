<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FacilityStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'icon' => [
                'required',
                'string',
                Rule::in([
                    'flaticon-helmet', 'flaticon-best-price', 'flaticon-travel',
                    'flaticon-right-quote', 'flaticon-flight', 'flaticon-camp',
                    'flaticon-blanket', 'flaticon-cat', 'flaticon-tent',
                    'flaticon-fire', 'flaticon-rabbit', 'flaticon-wifi-router',
                    'flaticon-solar-energy', 'flaticon-cycling', 'flaticon-fishing',
                    'flaticon-gym', 'flaticon-hiking', 'flaticon-tent-1',
                    'flaticon-reviews', 'flaticon-award', 'flaticon-quote',
                    'flaticon-camping', 'flaticon-cable-car', 'flaticon-trailer',
                    'flaticon-firewood', 'flaticon-biking-mountain', 'flaticon-fishing-1',
                    'flaticon-fishing-2', 'flaticon-caravan', 'flaticon-world',
                    'flaticon-journey', 'flaticon-gps', 'flaticon-paper-plane'
                ]),
            ],
        ];
    }
}
