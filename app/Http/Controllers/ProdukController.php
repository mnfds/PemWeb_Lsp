<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\produk;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    public function login(){
        return view('login');
    }

    public function proseslogin(Request $request){
        
        if(Auth::attempt($request->only('username','password'))){
            if(Auth()){
                return redirect('/dashboard');
            }
        }
        return redirect('/')->with('gagallogin', 'login gagal, silahkan coba lagi!');
    }
    

    public function logout(){
        Auth::logout();
        return redirect('/')->with('logout', 'Anda Telah Logout');
    }

    public function register(){
        return view('register');
    }

    public function registeruser(Request $request){
        User::create([
            'username'=>$request->username,
            'password'=>bcrypt($request->password),
        ]);

        return redirect('/');
    }

    public function dashboard(){
        $data = Produk::count();
        return view('dashboard',compact('data'));
    }

    public function list(){
        $data = Produk::all();
        return view('list',compact('data'));
    }

    public function create(){
        return view('tambahdata');
    }
    public function creating(Request $request){
        $this->validate($request,[
            'gambar' => 'image|max:1024',
        ]);
        $gambar = $request->file('gambar');
        $img_name = Str::random(10) . '.png';
        if ($gambar){
            Produk::create([
                'judulProduk' => $request->judulProduk,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
                'gambar' => $img_name,
            ]);
            $gambar->storeAs('public/gambar',$img_name);
            return redirect('/list');
        }
        else {
            return redirect()->back();
        }
    }

    public function edit($id){
        $data = Produk::find($id);
        return view('editdata',['data' => $data]);

    }
    public function editing(Request $request, $id){
        $this->validate($request,[
            'gambar' => 'image|max:1024',
        ]);
        $data = Produk::find($id);
        $old = $data->gambar;
        $name_img = Str::random(10) . '.png';
        $gambar = $request->file('gambar');
        if($gambar){
            if($old){
                Storage::delete('public/gambar/'.$old);
                $gambar->storeAs('public/gambar/', $name_img);
                $data->update([
                    'judulProduk' => $request->judulProduk,
                    'deskripsi' => $request->deskripsi,
                    'harga' => $request->harga,
                    'gambar' => $name_img,
                ]);
                return redirect('/list');
            }else {
                return redirect()->back();
            }
        }
    }

    public function delete($id){

        $hapus = Produk::find($id);
        Storage::delete('public/gambar/'.$hapus->gambar);
        $hapus->delete();
        return redirect()->back();
    }
}
