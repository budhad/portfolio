<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CabinetController extends Controller
{
    private const ADVERT_VALIDATOR = [
        'title' => 'required|max:50',
        'content' => 'required',
        'price' => 'required|numeric|min:1'
    ];
    private const ADVERT_ERROR_MESSAGES = [
        'price.min' => 'Цена не может быть меньше 1',
        'required' => 'Заполните это поле',
        'max' => 'Значение не должно быть длиннее :max символов',
        'numeric' => 'Введите число'
    ];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('cabinet',
            ['adverts' => Auth::user()->adverts()->latest()->get()]);
    }

    public function showAddAdvertForm() {
        return view('advert_add');
    }
    public function storeAdvert( Request $request ) {
        $validated = $request->validate(self::ADVERT_VALIDATOR, self::ADVERT_ERROR_MESSAGES);

        Auth::user()->adverts()->create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'price' => $validated['price'],
        ]);
        // Auth::user()->adverts()->create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'price' => $request->price
        // ]);
        return redirect()->route('cabinet');
    }

    public function showEditAdvertForm(Advert $ad) {
        return view('advert_edit', ['advert' => $ad]);
    }
    public function updateAdvert(Request $request, Advert $ad) {
        $validate = $request->validate(self::ADVERT_VALIDATOR, self::ADVERT_ERROR_MESSAGES);
        $ad->fill(['title' => $validate['title'],
        'content' => $validate['content'],
        'price' => $validate['price']]);
        $ad->save();
        return redirect()->route('cabinet');
    }

    public function showDeleteAdvertForm(Advert $ad) {
        return view('advert_delete', ['advert' => $ad]);
    }
    public function destroyAdvert(Advert $ad) {
        $ad->delete();
        return redirect()->route('cabinet');
    }
}
