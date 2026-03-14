<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UpdateClassesRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
//            'morning' => 'nullable|integer|min:0',
//            'afternoon' => 'nullable|integer|min:0',
//            'full_time' => 'nullable|integer|min:0',
//            'staff_ids' => 'required|array|min:1',
//            'staff_ids.*' => 'integer|exists:staff,id',
        ];
    }

//    public function after(): array
//    {
//        return [
//            function (Validator $validator): void {
//                $hasAtLeastOnePeriod = collect([
//                    $this->input('morning'),
//                    $this->input('afternoon'),
//                    $this->input('full_time'),
//                ])->contains(fn ($value) => filled($value));
//
//                if (! $hasAtLeastOnePeriod) {
//                    $validator->errors()->add('periods', 'Informe pelo menos um período para cadastrar a turma.');
//                }
//            },
//        ];
//    }
}
