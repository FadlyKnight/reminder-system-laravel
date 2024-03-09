<?php

namespace App\Http\Requests\User;

use App\Models\RefReminder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\Rule;

class CreateUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $listReminderType = Cache::get('list_reminder_type');
        if ($listReminderType == null) {
            Cache::set('list_reminder_type', RefReminder::get()->pluck('ref_rmndr_type')->toArray());
            $listReminderType = Cache::get('list_reminder_type');
        }
        return [
            'email' => [ 'email','required','string','unique:users' ],
            'first_name' => ['required', 'string', 'max:40', 'min:3'],
            'last_name' => ['nullable', 'string', 'max:40', 'min:3'],
            'rmndr_type' => [ 'required', Rule::in($listReminderType) ],
            'timezone' => [ 'required', 'timezone'],
            'occur_date' => [ 'date' ],
        ];
    }
}
