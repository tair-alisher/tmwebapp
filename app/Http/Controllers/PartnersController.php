<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PartnersRepo;
use App\Partner;
use Validator;

class PartnersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $partners = Partner::all();

        return view('partners.index')
            ->with('partners', $partners);
    }

    /* ********** admin partners ********** */

    public function partners()
    {
        $partners = Partner::all();

        return view('partners.partners')
            ->with('partners', $partners);
    }

    public function createForm()
    {
        return view('partners.create');
    }

    public function create(Request $request, PartnersRepo $repo)
    {
        $rules = [
            'name' => 'required|max:191',
            'link' => 'max:191'
        ];
        $messages = [
            'name.required' => 'Название обязательно для заполнения.',
            'name.max' => 'Название слишком длинное.',
            'link.max' => 'Ссылка слишком длинная.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $filename = '';
        if ($request->hasFile('image') && $request->file('image')->isValid())
        {
            $image = $request->file('image');
            $filename = $repo->makeUniqueFilename($image);
            $image->move(public_path('images/partners'), $filename);
        }

        $partner_id = $repo->create([
            'name' => $request['name'],
            'link' => $request['link'] == null ? '' : $request['link'],
            'image' => $filename
        ]);

        return redirect()
            ->route('admin.partners.edit_form', ['id' => $partner_id]);
    }
    
    public function editForm(PartnersRepo $repo, $id)
    {
        $partner = $repo->find($id);

        return view('partners.edit')
            ->with('partner', $partner);
    }

    public function edit(Request $request, PartnersRepo $repo, $id)
    {
        $rules = [
            'name' => 'required|max:191',
            'link' => 'max:191'
        ];
        $messages = [
            'name.required' => 'Название обязательно для заполнения.',
            'name.max' => 'Название слишком длинное.',
            'link.max' => 'Ссылка слишком длинная.'
        ];
        Validator::make($request->all(), $rules, $messages)->validate();

        $oldImageName = $repo->getImageName($id);

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $filename = $repo->makeUniqueFilename($image);
            $image->move(public_path('images/partners'), $filename);

            if (strlen($oldImageName) > 0) {
                $filepath = public_path('images/partners/') . $oldImageName;
                $repo->deleteFile($filepath);
            }
        } else {
            $filename = $oldImageName;
        }

        $repo->update($id, [
            'name' => $request['name'],
            'link' => $request['link'] == null ? '' : $request['link'],
            'image' => $filename
        ]);

        return redirect()->route('admin.partners.edit_form', ['id' => $id]);
    }
    
    public function delete(PartnersRepo $repo, $id)
    {
        $repo->delete($id);

        return redirect()
            ->route('admin.partners');
    }
}
