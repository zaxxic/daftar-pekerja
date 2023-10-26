<?php

namespace App\Http\Requests;

use App\TingkatanEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Http\Request;

class SchoolEdit extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    // public function authorize(): bool
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(Request $request): array
    {
        return [
            'NamaSekolah' => 'required|max:150',
            'Jurusan' => 'max:100',
            'TanggalAwal' => 'required|date|before_or_equal:today',
            'TanggalAkhir' =>  [
                'required',
                'after:TanggalAwal',
                'before_or_equal:today', // Custom validation rule
                function ($attribute, $value, $fail) use ($request) {
                    if ($request->TanggalAwal > $value) {
                        $fail('Tanggal Akhir harus setelah Tanggal Awal.');
                    }
                },
            ],
        ];
    }
    public function messages(): array
    {
        return [
            'NamaSekolah.required' => 'Nama sekolah/universitas harus diisi.',
            'NamaSekolah.max' => 'Nama sekolah/universitas tidak boleh lebih dari :max karakter.',
            'Jurusan.required' => 'Jurusan harus diisi.',
            'Jurusan.max' => 'Jurusan tidak boleh lebih dari :max karakter.',
            'TanggalAwal.required' => 'Tanggal awal harus diisi.',
            'TanggalAwal.date' => 'Tanggal awal harus dalam format tanggal yang benar.',
            'TanggalAwal.before_or_equal' => 'Tanggal awal harus sebelum atau sama dengan hari ini.',
            'TanggalAkhir.required' => 'Tanggal akhir harus diisi.',
            'TanggalAkhir.date' => 'Tanggal akhir harus dalam format tanggal yang benar.',
            'TanggalAkhir.after' => 'Tanggal akhir harus setelah tanggal awal.',
            'TanggalAkhir.before_or_equal' => 'Tanggal akhir harus sebelum hari ini.',
            'Tingkatan.required' => 'Tingkatan harus dipilih.',
            'Tingkatan.max' => 'Tingkatan tidak boleh lebih dari :max karakter.',
            'Tingkatan.in' => 'Tingkatan yang dipilih tidak valid.',
        ];
    }
}
