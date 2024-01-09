<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFormRequest;
use App\Http\Requests\UpdateFormRequest;
use App\Models\Form;
use App\Http\Resources\FormResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index(Request $request)
    {
        $forms = DB::table('forms')
            ->when($request->input('nama'), function ($query, $nama) {
                return $query->where('nama', 'like', '%' . $nama . '%');
            })
            ->select('id', 'nomor_identitas', 'nama', 'nomor_telepon', 'email', 'created_by', 'updated_by', 'deleted_by', DB::raw('DATE_FORMAT(created_at, "%d %M %Y") as created_at'))
            ->orderBy('id', 'desc')
            ->paginate(15);

        return view('pages.forms.index', compact('forms'));
    }

    public function create()
    {
        return view('pages.forms.create');
    }

    public function store(StoreFormRequest $request)
    {
        Form::create([
            'nomor_identitas' => $request['nomor_identitas'],
            'nama' => $request ['nama'],
            'tempat_lahir' => $request ['tempat_lahir'],
            'tanggal_lahir' => $request ['tanggal_lahir'],
            'agama' => $request ['agama'],
            'alamat' => $request ['alamat'],
            'nomor_telepon' => $request ['nomor_telepon'],
            'email' => $request['email'],
        ]);

        return redirect(route('form.index'))->with('success', 'Create New Form Successfully');
    }

    public function edit(Form $form)
    {
        return view('pages.forms.edit')->with('form', $form);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateFormRequest $request, Form $form)
    {
        $validate = $request->validated();
        $form ->update($validate);
        return redirect()->route('form.index')->with('success', 'Edit Form Successfully');
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('form.index')->with('success', 'Delete Form Successfully');
    }
}
