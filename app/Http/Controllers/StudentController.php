<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(student $student)
    {
        //
    }

    public function statistik()
    {
        $gender = [
            'L' => Student::where('jenisKelamin', 'L')->count(),
            'P' => Student::where('jenisKelamin', 'P')->count(),
        ];

        $kelas = [
            'X'  => Student::where('kelas', 'X')->count(),
            'XI' => Student::where('kelas', 'XI')->count(),
            'XII'=> Student::where('kelas', 'XII')->count(),
        ];

        $jurusan = [
            'Farmasi' => Student::where('jurusan', 'Farmasi')->count(),
            'Askep'   => Student::where('jurusan', 'Askep')->count(),
            'TLM'     => Student::where('jurusan', 'TLM')->count(),
        ];

        return view('statistik', compact('gender', 'kelas', 'jurusan'));
    }
}
