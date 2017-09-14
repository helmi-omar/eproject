<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Yajra\Datatables\Datatables;

use Mail;
use App\Mail\AccountBaru;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        // Query ke table users
        // $users = DB::table('users')->orderBy('id', 'desc')->paginate(10);
        // $users = User::orderBy('id', 'desc')->paginate(10);

        // Paparkan template
        return view('users/senarai');
    }

    public function datatables() 
    {
        $users = User::select('id', 'name', 'email');

        return datatables()->of($users)
        ->addColumn('action', function ($item) {
                return '<a href="'. route('editUser', $item->id) .'"  class="btn btn-xs btn-primary">Edit</a>
                
                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete-' .$item->id .'">
                                    Delete
                                </button>

                                <!-- Modal -->
                                <form method="POST" action="'.route('deleteUser', $item->id).'">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="'. csrf_token() .'">
                                    
                                
                                    <div class="modal fade" id="delete-'. $item->id .'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Sahkan Hapus Data</h4>
                                        </div>
                                        <div class="modal-body">
                                            Adakah anda ingin hapuskan rekod '.$item->name .'?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Confirm</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                </form>
                
                ';
            })
        ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        return view('users/borang_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $request->validate([
            'username' => 'required|alpha_num|unique:users,username',
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:3|confirmed'
        ]);

        // Dapatkan semua data
        // $data = $request->only([
        //     'username', 
        //     'name', 
        //     'email', 
        //     'address', 
        //     'phone', 
        //     'role' ,
        //     'status'
        // ]);
        $data = $request->all();

        // Encrypt Password dan masukkan ke array $data
        $data['password'] = bcrypt( $request->input('password') );

        // Simpan data ke table users
        // DB::table('users')->insert($data);
        // User::insert($data);
        $user = User::create($data);

        // Email maklumat akaun kepada user
        Mail::to($user->email)->send(new AccountBaru($user));

        // Redirect user ke halaman senarai users
        return redirect()->route('senaraiUsers')->with('alert-success', $user->name . ' berjaya ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Dapatkan 1 rekod yang dipilih
        // $user = DB::table('users')->where('id', $id)->first();
        $user = User::find($id);

        // Paparkan template
        return view('users/borang_edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Form validation
        $request->validate([
            'username' => 'required|alpha_num|unique:users,username,' . $id,
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Dapatkan semua data
        $data = $request->except('password');

        // Encrypt Password dan masukkan ke array $data
        if ( !empty( $request->input('password') ) )
        {
            $data['password'] = bcrypt( $request->input('password') );
        }

        // Simpan data ke table users
        // DB::table('users')->where('id', $id)->update($data);
        User::find($id)->update($data);

        // Redirect user ke halaman senarai users
        return redirect()->route('senaraiUsers')->with('alert-success', 'Data berjaya dikemaskini!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Cari user berdasarkan id dan hapuskan rekod
        // DB::table('users')->where('id', $id)->delete();
        User::find($id)->delete();

        // Redirect user ke halaman senarai users
        return redirect()->route('senaraiUsers')->with('alert-success', 'Data berjaya dihapuskan!');
    }
}
